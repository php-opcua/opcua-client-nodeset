---
eyebrow: 'Docs · Usage'
lede:    'One ClientBuilder, one or more registrars, one connect. Loading is additive — every call accumulates onto the same client.'

see_also:
  - { href: './dependency-resolution.md',         meta: '5 min' }
  - { href: '../concepts/codecs-and-registrars.md', meta: '5 min' }
  - { href: '../reference/specifications.md',     meta: '5 min' }

prev: { label: 'Codecs and registrars',  href: '../concepts/codecs-and-registrars.md' }
next: { label: 'Dependency resolution',  href: './dependency-resolution.md' }
---

# Loading registrars

`ClientBuilder::loadGeneratedTypes()` is the only public method the
package interacts with. It takes a `GeneratedTypeRegistrar`,
returns `$builder` for chaining, accumulates onto the builder's
internal state.

## Loading one

<!-- @code-block language="php" label="examples/single-load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())
    ->connect('opc.tcp://192.168.1.100:4840');
```
<!-- @endcode-block -->

`RoboticsRegistrar` declares `DI` and `IA` as dependencies, so the
loader pulls them in transitively. After the chain runs, the
client has Robotics + DI + IA enum mappings and codecs wired —
three registrars active, one builder call.

## Loading several

<!-- @code-block language="php" label="examples/multiple-load.php" -->
```php
$client = ClientBuilder::create()
    ->loadGeneratedTypes(new \PhpOpcua\Nodeset\Robotics\RoboticsRegistrar())
    ->loadGeneratedTypes(new \PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar())
    ->loadGeneratedTypes(new \PhpOpcua\Nodeset\AutoID\AutoIDRegistrar())
    ->connect('opc.tcp://multi-spec.plant.local:4840');
```
<!-- @endcode-block -->

Each call accumulates onto the same builder. Duplicates between
the dependency trees (`DI` is a dependency of all three) are
handled — see below.

## Deduplication

The dependency trees of Robotics, MachineTool, and AutoID all
include `DI`. Loading them all means the loader visits `DI` three
times. Each visit:

<!-- @steps -->
- **Calls `DiRegistrar::registerCodecs()`** on the per-client
  ExtensionObjectRepository.

  The repository's `register()` overwrites any prior codec at the
  same NodeId. Re-registering an identical codec is a no-op in
  effect — the same codec instance lands at the same key.

- **Merges `DiRegistrar::getEnumMappings()`** into the enum
  registry.

  The merge is `array_replace`-like: later mappings overwrite
  earlier ones. Identical mappings collapse harmlessly.
<!-- @endsteps -->

The effect is **idempotent** for the common case (multiple specs
that share the same generated dependency). The cost is the
re-invocation of `register()` and the array merge — both cheap.

Where it can bite: if you load **two different versions** of the
same spec's registrar (extremely rare — would require manually
forking the package), the later load wins. Avoid by not doing
that.

## Order of loading

`loadGeneratedTypes()` runs the registrar **synchronously** as
part of the builder configuration phase. The order of calls
determines the final state of the registries — but for
**well-formed** registrars in this package, the order does not
matter. All idempotent operations.

Where order would matter: a custom registrar (yours, not from this
package) that registers a codec against a NodeId another registrar
also claimed. The last load wins. See [Recipes · Extending a
registrar](../recipes/extending-a-registrar.md).

## When to load all 51

You almost never want to. The dependency cascade means loading the
"top" specs (`MachineTool`, `MachineVision`, `LADS`, `Pumps`,
`Scales`, `Weihenstephan`, `Woodworking`, `MetalForming`) covers
most of the rest transitively.

For a development sandbox where you want everything available:

<!-- @code-block language="php" label="examples/load-everything.php" -->
```php
$builder = ClientBuilder::create();

$registrars = [
    new \PhpOpcua\Nodeset\AutoID\AutoIDRegistrar(),
    new \PhpOpcua\Nodeset\BACnet\BACnetRegistrar(),
    new \PhpOpcua\Nodeset\CommercialKitchenEquipment\CommercialKitchenEquipmentRegistrar(),
    new \PhpOpcua\Nodeset\CuttingTool\CuttingToolRegistrar(),
    new \PhpOpcua\Nodeset\I4AAS\I4AASRegistrar(),
    new \PhpOpcua\Nodeset\IREDES\IREDESRegistrar(),
    new \PhpOpcua\Nodeset\LADS\LADSRegistrar(),
    new \PhpOpcua\Nodeset\LaserSystems\LaserSystemsRegistrar(),
    new \PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar(),
    new \PhpOpcua\Nodeset\MachineVision\MachineVisionRegistrar(),
    new \PhpOpcua\Nodeset\MetalForming\MetalFormingRegistrar(),
    new \PhpOpcua\Nodeset\PAEFS\PAEFSRegistrar(),
    new \PhpOpcua\Nodeset\Pumps\PumpsRegistrar(),
    new \PhpOpcua\Nodeset\Robotics\RoboticsRegistrar(),
    new \PhpOpcua\Nodeset\Scales\ScalesRegistrar(),
    new \PhpOpcua\Nodeset\Weihenstephan\WeihenstephanRegistrar(),
    new \PhpOpcua\Nodeset\Woodworking\WoodworkingRegistrar(),
    // …
];

foreach ($registrars as $r) {
    $builder->loadGeneratedTypes($r);
}

$client = $builder->connect('opc.tcp://localhost:4840');
```
<!-- @endcode-block -->

The cost: ~193 codec instances + ~309 enum mappings in memory.
Still well under a megabyte; the autoloader has done worse for
less.

For production, load only what the target server actually
implements. See [Reference · Specifications](../reference/specifications.md)
for which registrar covers which spec.

## Loading via a configuration array

For applications that want to drive the registrar list from a
config file:

<!-- @code-block language="php" label="examples/config-driven.php" -->
```php
$registrarClasses = config('opcua.registrars', []);
// e.g. ['Robotics', 'MachineTool']

$builder = ClientBuilder::create();
foreach ($registrarClasses as $name) {
    $fqcn = "PhpOpcua\\Nodeset\\{$name}\\{$name}Registrar";
    if (! class_exists($fqcn)) {
        throw new \InvalidArgumentException("Unknown registrar: {$name}");
    }
    $builder->loadGeneratedTypes(new $fqcn());
}
```
<!-- @endcode-block -->

This pattern is fragile:

- For specs whose registrar uses non-uppercase casing (`DI` →
  `DiRegistrar`, `ISA95` → `OpcISA95Registrar`, `PROFINET` →
  `PnRegistrar`, …) the synthesised FQCN does not match the
  filename on disk. PHP resolves classes case-insensitively at
  runtime, so it can still work — but it is brittle under PSR-4
  strict-mode autoloaders.
- Several specs ship **no** single `<Name>Registrar` class:
  `AML` ships `AMLBaseTypesRegistrar` + `AMLLibrariesRegistrar`,
  `FDI` ships `Fdi5Registrar` + `Fdi7Registrar`, `IOLink` ships
  `IOLinkRegistrar` + `IOLinkIODDRegistrar`, `PADIM` ships
  `PADIMRegistrar` + `IRDIRegistrar`, `DI` ships `DiRegistrar` +
  `DiPackageMetadataRegistrar`. For these, the synthesised FQCN
  will not exist at all.

A reliable config-driven loader needs an explicit lookup table
that maps logical names to FQCNs. See
[What gets generated](../getting-started/what-gets-generated.md#section-naming-inconsistencies-you-may-see).

## Static analysis

`loadGeneratedTypes()` takes a `GeneratedTypeRegistrar` — PHPStan
and Psalm can verify your loaded list against the interface. The
generated registrars all conform.

If you wrote a custom registrar (see [Recipes · Extending a
registrar](../recipes/extending-a-registrar.md)), make sure it
implements the contract — the interface is non-`final`, simple,
no surprises.

## What load order does *not* do

- **Does not lock the builder.** You can call `loadGeneratedTypes()`
  between any other builder setter — `setSecurityPolicy()`,
  `setUserCredentials()`, etc. The order does not matter.
- **Does not open IPC.** `loadGeneratedTypes()` is a builder
  setter; it touches no sockets. When using
  `opcua-session-manager`, pass your registrars to the
  underlying `ClientBuilder` used to construct the managed client
  — `ManagedClient` itself does not currently expose a
  `loadGeneratedTypes()` shortcut.
- **Does not validate against the server.** The registrar's
  contents are statically known. A spec your server doesn't
  implement loads cleanly; the codecs and enum mappings just
  never match anything at runtime. No error.

For dependency resolution mechanics, see [Dependency
resolution](./dependency-resolution.md).
