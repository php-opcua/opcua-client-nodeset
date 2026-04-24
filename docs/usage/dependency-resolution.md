---
eyebrow: 'Docs · Usage'
lede:    'Every registrar declares the registrars it needs. The loader walks the tree depth-first. Pass only: true to load a single spec''s output without its dependencies.'

see_also:
  - { href: './loading-registrars.md',           meta: '5 min' }
  - { href: '../reference/specifications.md',    meta: '5 min' }
  - { href: '../regeneration/troubleshooting.md', meta: '5 min' }

prev: { label: 'Loading registrars',         href: './loading-registrars.md' }
next: { label: 'Reading structured data',    href: './reading-structured-data.md' }
---

# Dependency resolution

OPC UA companion specifications form a graph. `MachineTool`
depends on `Machinery`; `Machinery` depends on `DI` and `IA`; `IA`
depends on `DI`. Loading one registrar pulls the whole subtree by
default — usually the right behaviour, sometimes not.

This page covers the resolution mechanism, the loops the generator
prevents, and the `only: true` opt-out.

## The dependency graph

Each registrar declares its direct dependencies. Two examples from
v4.3.0:

<!-- @code-block language="php" label="MachineTool's dependencies" -->
```php
class MachineToolRegistrar implements GeneratedTypeRegistrar
{
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DiRegistrar(),
            new \PhpOpcua\Nodeset\IA\IARegistrar(),
            new \PhpOpcua\Nodeset\Machinery\MachineryRegistrar(),
        ];
    }
}
```
<!-- @endcode-block -->

<!-- @code-block language="php" label="Machinery's dependencies" -->
```php
class MachineryRegistrar implements GeneratedTypeRegistrar
{
    public function dependencyRegistrars(): array
    {
        return [
            new \PhpOpcua\Nodeset\DI\DiRegistrar(),
            new \PhpOpcua\Nodeset\IA\IARegistrar(),
        ];
    }
}
```
<!-- @endcode-block -->

The result, for `MachineToolRegistrar`:

<!-- @code-block language="text" label="resolved tree" -->
```text
MachineToolRegistrar
├── DiRegistrar
├── IARegistrar
│   └── DiRegistrar          ← visited again, deduped on the repository side
└── MachineryRegistrar
    ├── DiRegistrar          ← same
    └── IARegistrar          ← same, deduped
```
<!-- @endcode-block -->

`DiRegistrar` gets visited three times across this single
`loadGeneratedTypes()` call. Each visit re-runs `registerCodecs()`
(harmless — same codec instance overwrites the same NodeId) and
re-merges `getEnumMappings()` (harmless — identical keys, same
values). See [Loading registrars ·
Deduplication](./loading-registrars.md#section-deduplication).

## Resolution algorithm

`ClientBuilder::loadGeneratedTypes()` is recursive. Pseudo-code:

<!-- @code-block language="text" label="algorithm" -->
```text
function loadGeneratedTypes(registrar):
    if registrar.only is false:
        for each dep in registrar.dependencyRegistrars():
            loadGeneratedTypes(dep)

    registrar.registerCodecs(this.repository)
    merge registrar.getEnumMappings() into this.enumRegistry
```
<!-- @endcode-block -->

Three properties:

- **Depth-first.** Dependencies are processed before the parent.
- **No cycle detection.** The generator guarantees the dependency
  graph is acyclic (the OPC Foundation's spec graph is itself a
  DAG). A handcrafted cyclic registrar would infinite-loop —
  see [Recipes · Extending a
  registrar](../recipes/extending-a-registrar.md) for guidelines.
- **No memoisation.** The same registrar called twice in different
  branches runs twice. Idempotent for shipped registrars; consider
  it for custom ones.

## `only: true` — single-spec mode

Sometimes you want a spec's output without the cascade. Pass
`only: true` to the constructor:

<!-- @code-block language="php" label="examples/only-mode.php" -->
```php
$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineToolRegistrar(only: true))
    ->connect('opc.tcp://machine.local:4840');
```
<!-- @endcode-block -->

This loads MachineTool's own codecs and enum mappings — **and
nothing else**. DI, IA, Machinery: untouched.

When this is useful:

- **You already loaded the dependencies** by hand and want to avoid
  the re-registration churn (cosmetic — the churn is harmless).
- **You explicitly want MachineTool's MT-specific enums** but plan
  to use raw integers everywhere else. Surgical.
- **Custom dependency wiring** — your application has its own
  layered registrar architecture where MachineTool's deps are
  satisfied differently.

The flag is a constructor argument so it can be passed at every
recursive call site — `dependencyRegistrars()` produces fresh
instances per call, and they default to `only: false`. The flag
on the **outer** registrar does not propagate to the dependencies'
recursion (they would still cascade themselves, except `only:
true` on the outer stops the recursion at the outer level).

In practice: `only: true` is rarely needed. Use it deliberately,
not as a default.

## The Onboarding → GDS edge case

`OnboardingRegistrar`'s dependency on `GdsRegistrar` is worth
noting:

<!-- @code-block language="php" label="Onboarding's dependency" -->
```php
class OnboardingRegistrar implements GeneratedTypeRegistrar
{
    public function dependencyRegistrars(): array
    {
        return [new \PhpOpcua\Nodeset\GDS\GdsRegistrar()];
    }
}
```
<!-- @endcode-block -->

GDS is one of the **mixed-case** registrars (`GdsRegistrar`, not
`GDSRegistrar`). The generated dependency declaration uses the
exact class name. The generator's post-processing step in
`generate.php` validates this — if `GdsRegistrar` didn't exist,
the reference would be cleaned up before commit. See
[Regeneration · Overview](../regeneration/overview.md).

## What dependencies *do not* do

- **Do not block load on missing classes.** Every registrar in
  `dependencyRegistrars()` is `new`-ed eagerly at runtime. If a
  dependency class is missing (manually deleted, name mismatch),
  PHP throws `Error: Class not found` during the load — fatal, not
  graceful.
- **Do not check OPC UA semantic compatibility.** The dependency
  graph reflects the OPC Foundation's spec relationships at
  generation time. A server that implements a child spec without
  its parents (rare but possible) still works — the parent's
  codecs are loaded onto the client without matching any of the
  server's responses, which is fine.
- **Do not signal completion.** `loadGeneratedTypes()` returns
  `$builder` (for chaining), not a status. To verify a registrar
  loaded:

<!-- @code-block language="php" label="verify-by-side-effect.php" -->
```php
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

// After connect(), the live Client exposes the accumulated mappings:
$mappings = $client->getEnumMappings();
assert(
    in_array(OperationalModeEnumeration::class, $mappings, true)
);
```
<!-- @endcode-block -->

The builder itself does not expose `getEnumMappings()` — the
mappings are accumulated privately and surfaced on the `Client`
returned by `connect()`.

## Visualising a tree

The dependency tree is computable from
`dependencyRegistrars()`. A small helper, for documentation /
debugging:

<!-- @code-block language="php" label="examples/print-tree.php" -->
```php
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

function tree(GeneratedTypeRegistrar $r, int $depth = 0): void
{
    echo str_repeat('  ', $depth) . $r::class . "\n";
    foreach ($r->dependencyRegistrars() as $dep) {
        tree($dep, $depth + 1);
    }
}

tree(new \PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar());
```
<!-- @endcode-block -->

Output:

<!-- @code-block language="text" label="output" -->
```text
PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar
  PhpOpcua\Nodeset\DI\DiRegistrar
  PhpOpcua\Nodeset\IA\IARegistrar
    PhpOpcua\Nodeset\DI\DiRegistrar
  PhpOpcua\Nodeset\Machinery\MachineryRegistrar
    PhpOpcua\Nodeset\DI\DiRegistrar
    PhpOpcua\Nodeset\IA\IARegistrar
      PhpOpcua\Nodeset\DI\DiRegistrar
```
<!-- @endcode-block -->

The duplicates are real. The loader visits each node once per
appearance — idempotent per the reasoning above.

## Loaded dependencies are visible

Once `loadGeneratedTypes()` has run on the builder, every codec
and enum mapping the chain registered is in the client. Code that
uses `DI` constants and DI codecs works just fine, even if the
application's `loadGeneratedTypes()` call only mentioned
`MachineToolRegistrar`:

<!-- @code-block language="php" label="examples/use-deps-transitively.php" -->
```php
use PhpOpcua\Nodeset\DI\DiNodeIds;
use PhpOpcua\Nodeset\DI\Types\FileDescriptor;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineToolRegistrar())  // pulls DI transitively
    ->connect('opc.tcp://machine.local:4840');

// Identification on DI is an object node — read its leaf properties
// individually (Manufacturer, Model, …) which return the built-in
// scalar / LocalizedText types.
$manufacturer = $client->read(DiNodeIds::Manufacturer)->getValue();
// → LocalizedText

// For DTO-returning DI nodes, the codec is in scope automatically.
// Example: a variable typed as FileDescriptor returns the DTO.
```
<!-- @endcode-block -->

That is the dependency cascade in action — you load the top, you
get the whole subtree. The DI spec exposes its identification
fields as separate leaf nodes (built-ins, not a packaged DTO);
its structured DataTypes live elsewhere — see `src/DI/Types/`.
