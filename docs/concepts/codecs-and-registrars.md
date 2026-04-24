---
eyebrow: 'Docs · Concepts'
lede:    'Codecs decode bytes to DTOs and back. Registrars wire codecs and enum mappings into the client at boot. The contract is GeneratedTypeRegistrar — one method, three things to register.'

see_also:
  - { href: '../usage/loading-registrars.md',     meta: '5 min' }
  - { href: '../usage/dependency-resolution.md',  meta: '5 min' }
  - { href: '../reference/registrar-api.md',      meta: '4 min' }

prev: { label: 'Typed DTOs',           href: './typed-dtos.md' }
next: { label: 'Loading registrars',   href: '../usage/loading-registrars.md' }
---

# Codecs and registrars

A registrar is the wiring class. Each companion spec ships at
least one. It implements
`PhpOpcua\Client\Repository\GeneratedTypeRegistrar` (the contract
defined by `opcua-client`) and is the single object the application
hands to `ClientBuilder::loadGeneratedTypes()` to turn on the
spec's typed surface.

This page covers what a registrar does, what a codec does, and how
the two interact with the client at runtime.

## The `GeneratedTypeRegistrar` contract

<!-- @code-block language="php" label="GeneratedTypeRegistrar" -->
```php
namespace PhpOpcua\Client\Repository;

interface GeneratedTypeRegistrar
{
    public function registerCodecs(ExtensionObjectRepository $repository): void;

    /** @return array<string, class-string<\BackedEnum>> */
    public function getEnumMappings(): array;

    /** @return GeneratedTypeRegistrar[] */
    public function dependencyRegistrars(): array;
}
```
<!-- @endcode-block -->

Three moving parts:

| Slot                     | Purpose                                                      |
| ------------------------ | ------------------------------------------------------------ |
| `registerCodecs()`       | Push each codec onto the client's `ExtensionObjectRepository` keyed by the DataType NodeId |
| `getEnumMappings()`      | Return the DataType-NodeId-to-PHP-enum-class table          |
| `dependencyRegistrars()` | Return the registrars this spec depends on, for recursive load |

The shipped concrete classes also expose a `public bool $only = false`
constructor flag (via promoted properties) — when `true` the loader
skips that registrar's dependencies. The flag is implementation
detail, not part of the interface; custom registrars are free to
omit it.

The interface lives in `opcua-client`'s
`PhpOpcua\Client\Repository\` namespace — it is the cross-package
contract. See [Reference · Registrar API](../reference/registrar-api.md).

## What a generated registrar looks like

<!-- @code-block language="php" label="generated registrar" -->
```php
namespace PhpOpcua\Nodeset\AMB;

class AMBRegistrar implements GeneratedTypeRegistrar
{
    public function __construct(public bool $only = false) {}

    public function registerCodecs(ExtensionObjectRepository $repository): void
    {
        $repository->register(
            NodeId::parse(AMBNodeIds::NameNodeIdDataType_3),
            new Codecs\NameNodeIdDataTypeCodec(),
        );
        $repository->register(
            NodeId::parse(AMBNodeIds::RootCauseDataType_3),
            new Codecs\RootCauseDataTypeCodec(),
        );
    }

    public function getEnumMappings(): array
    {
        return [
            AMBNodeIds::MaintenanceMethodEnum => Enums\MaintenanceMethodEnum::class,
        ];
    }

    public function dependencyRegistrars(): array
    {
        return [];
    }
}
```
<!-- @endcode-block -->

Three things to note:

- **The NodeId keys come from the same `<Spec>NodeIds` class** the
  rest of the application uses. The `_3` suffix here is the
  generator's disambiguator — see [NodeId constants](./node-id-constants.md).
- **Codecs are instantiated eagerly** — one `new <Codec>()` per
  registered structure. The cost is tiny (codecs are stateless),
  and the repository holds the instance for the client's lifetime.
- **`dependencyRegistrars()` returns instances**, not class names.
  The generator instantiates dependency registrars when this
  method runs, so each call gets a fresh dependency tree.

## What a codec looks like

<!-- @code-block language="php" label="generated codec" -->
```php
namespace PhpOpcua\Nodeset\AMB\Codecs;

class NameNodeIdDataTypeCodec implements ExtensionObjectCodec
{
    public function decode(BinaryDecoder $decoder): NameNodeIdDataType
    {
        return new NameNodeIdDataType(
            $decoder->readLocalizedText(),
            $decoder->readNodeId(),
        );
    }

    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeLocalizedText($value->Name);
        $encoder->writeNodeId($value->NodeId);
    }
}
```
<!-- @endcode-block -->

The contract is `PhpOpcua\Client\Encoding\ExtensionObjectCodec`:

- **`decode(BinaryDecoder)`** reads the wire bytes in field order
  and constructs the DTO with positional arguments.
- **`encode(BinaryEncoder, mixed $value)`** does the inverse —
  reads the DTO's properties and writes them in order.

Codecs are stateless. The same instance can serve every read /
write of the same DataType across the entire session.

## What `loadGeneratedTypes()` actually does

`ClientBuilder::loadGeneratedTypes()` is the only entry point the
application calls. It runs once, before `connect()`:

<!-- @code-block language="text" label="loading flow" -->
```text
$builder->loadGeneratedTypes(new AMBRegistrar())
  │
  ├── Unless the registrar's $only flag is true, recursively call
  │   loadGeneratedTypes() on each dependencyRegistrars() entry
  │
  ├── Call $registrar->registerCodecs($builder->getExtensionObjectRepository())
  │     ← codecs land in the per-client codec repository
  │
  └── Merge $registrar->getEnumMappings() into the builder's
      enum registry
      ← consumed by Client when wrapping read responses
```
<!-- @endcode-block -->

After this runs:

- Every `read()` returning a `Variant<ExtensionObject>` whose
  `typeId` matches a registered codec returns a typed DTO via
  `getValue()`.
- Every `read()` returning a `Variant<Int32>` whose DataType
  matches a registered enum mapping returns the typed enum via
  `getValue()`.

Multiple `loadGeneratedTypes()` calls accumulate — see [Usage ·
Loading registrars](../usage/loading-registrars.md).

## Codecs and the per-client repository

The `ExtensionObjectRepository` is **per `Client` instance**, not
global. Two clients in the same PHP process can carry different
codec sets:

<!-- @code-block language="php" label="examples/two-clients.php" -->
```php
$plcClient = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineToolRegistrar())
    ->connect('opc.tcp://cnc.plant.local:4840');

$historianClient = ClientBuilder::create()
    ->loadGeneratedTypes(new MTConnectRegistrar())
    ->connect('opc.tcp://historian.plant.local:4840');
```
<!-- @endcode-block -->

Two registries, no cross-contamination. The cost is the codec
instances are duplicated in memory — negligible for the sizes
involved.

## Codecs that share types

A handful of specs duplicate well-known structures (e.g. several
specs define their own `KeyValuePair` or `RangeDataType`). The
generator emits each spec's codec independently, keyed by that
spec's DataType NodeId. Loading two such registrars registers two
codecs against two distinct NodeIds — no conflict.

If two specs ever defined codecs against the **same** NodeId
(possible if the OPC Foundation ever consolidates), the later
`registerCodecs()` call overwrites the earlier one. The order in
which the application loads registrars determines the winner.

## Empty registrars

Specs with no enums and no structures still ship a registrar — a
no-op:

<!-- @code-block language="php" label="empty registrar shape" -->
```php
class MachineryRegistrar implements GeneratedTypeRegistrar
{
    public function __construct(public bool $only = false) {}

    public function registerCodecs(ExtensionObjectRepository $repository): void
    {
        // Nothing to register
    }

    public function getEnumMappings(): array
    {
        return [];
    }

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

These exist because the spec inherits from other specs that **do**
register things. `MachineryRegistrar` loads DI and IA — which is
the entire reason someone loads `MachineryRegistrar` at all.

## Where to look next

- [Loading registrars](../usage/loading-registrars.md) — single
  load, multiple loads, dedup.
- [Dependency resolution](../usage/dependency-resolution.md) — the
  `dependencyRegistrars()` chain and the `only: true` opt-out.
- [Reference · Registrar API](../reference/registrar-api.md) — the
  full interface contract.
