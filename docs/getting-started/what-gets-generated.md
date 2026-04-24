---
eyebrow: 'Docs · Getting started'
lede:    'Each companion specification produces up to five PHP file types. Some specs ship all five; some ship only a handful. Knowing which is which saves time when chasing down what the package gave you.'

see_also:
  - { href: '../concepts/node-id-constants.md',   meta: '4 min' }
  - { href: '../concepts/enums-and-auto-cast.md', meta: '4 min' }
  - { href: '../reference/specifications.md',     meta: '5 min' }

prev: { label: 'Quick start',          href: './quick-start.md' }
next: { label: 'NodeId constants',     href: '../concepts/node-id-constants.md' }
---

# What gets generated

The generator walks one NodeSet2.xml at a time and emits up to
five categories of PHP file per companion specification. None of
them are mandatory — a spec with no structures produces no `Types/`
or `Codecs/`; a spec with no enumerations produces no `Enums/`.
Everything that exists matches what the source XML actually
defines.

## The five categories

### 1. `<Spec>NodeIds.php` — NodeId constants

A single class whose public constants are the canonical NodeId
strings for every node the spec defines.

<!-- @code-block language="php" label="generated NodeIds" -->
```php
namespace PhpOpcua\Nodeset\Robotics;

class RoboticsNodeIds
{
    public const OperationalMode = 'ns=3;i=18961';
    public const ParameterSet    = 'ns=3;i=16602';
    // … hundreds of constants …
}
```
<!-- @endcode-block -->

The constant name is the BrowseName from the source XML, sanitised
to a PHP identifier. Always present — every spec has one.

See [Concepts · NodeId constants](../concepts/node-id-constants.md).

### 2. `Enums/<Enum>.php` — PHP BackedEnums

One file per `<UADataType>` whose `<Definition>` is an enumeration.

<!-- @code-block language="php" label="generated Enum" -->
```php
namespace PhpOpcua\Nodeset\Robotics\Enums;

enum OperationalModeEnumeration: int
{
    case OTHER                  = 0;
    case MANUAL_REDUCED_SPEED   = 1;
    case MANUAL_HIGH_SPEED      = 2;
    case AUTOMATIC              = 3;
    case AUTOMATIC_EXTERNAL     = 4;
}
```
<!-- @endcode-block -->

Naming: the spec's enum-type DataType becomes the class name. Each
member's `Name` attribute becomes the case name in `SCREAMING_SNAKE`.
The integer value matches the OPC UA spec's `Value` attribute.

Generated for every spec that defines at least one enumeration
DataType — 37 of the 51 specs at v4.3.0. The 14 specs without
enums of their own are: `AML`, `CSPPlusForMachine`, `CuttingTool`,
`GDS`, `GPOS`, `LaserSystems`, `Machinery`, `MetalForming`,
`Onboarding`, `Powertrain`, `RSL`, `Sercos`, `Shotblasting`, `WoT`.

See [Concepts · Enums and auto-cast](../concepts/enums-and-auto-cast.md).

### 3. `Types/<Type>.php` — readonly DTOs

One file per `<UADataType>` whose `<Definition>` is a structure
(non-enumeration). Each field of the structure becomes a typed
constructor parameter.

<!-- @code-block language="php" label="generated DTO" -->
```php
namespace PhpOpcua\Nodeset\AMB\Types;

readonly class NameNodeIdDataType
{
    public function __construct(
        public LocalizedText $Name,
        public NodeId        $NodeId,
    ) {
    }
}
```
<!-- @endcode-block -->

Field types are inferred from the spec's `<Field DataType="...">`:
- Built-in OPC UA types map to their PHP equivalent (`LocalizedText`,
  `NodeId`, `int`, `float`, `string`, `bool`, …).
- Enum fields are typed with the generated `BackedEnum` class.
- Optional fields are nullable.
- Array fields use `array`.

Generated only for specs with non-enum structure DataTypes — 33 of
51 specs at v4.3.0. The reference table flags which.

See [Concepts · Typed DTOs](../concepts/typed-dtos.md).

### 4. `Codecs/<Type>Codec.php` — binary codecs

For every DTO in `Types/`, the generator emits a matching
`ExtensionObjectCodec`. The codec reads the binary wire format and
constructs the DTO; the inverse writes the DTO back to bytes.

<!-- @code-block language="php" label="generated Codec" -->
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

Codec count always equals DTO count.

See [Concepts · Codecs and registrars](../concepts/codecs-and-registrars.md).

### 5. `<Spec>Registrar.php` — registrar

The wiring class. Implements
`PhpOpcua\Client\Repository\GeneratedTypeRegistrar`. Three
responsibilities:

<!-- @code-block language="php" label="generated Registrar" -->
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
        // … one register() per codec …
    }

    public function getEnumMappings(): array
    {
        return [
            AMBNodeIds::MaintenanceMethodEnum => Enums\MaintenanceMethodEnum::class,
            // … DataType NodeId → BackedEnum class …
        ];
    }

    public function dependencyRegistrars(): array
    {
        return [];   // or other registrars this spec depends on
    }
}
```
<!-- @endcode-block -->

Every spec ships at least one registrar (some ship more — see
below). Even specs with no codecs and no enum mappings have a
registrar, so that `loadGeneratedTypes(new SpecRegistrar())` always
works regardless of what the spec actually contains.

See [Reference · Registrar API](../reference/registrar-api.md).

## When a spec ships more than one of something

Most specs map one-to-one to a single registrar. A handful ship
two:

| Spec       | Why                                                              | Registrars                                      |
| ---------- | ---------------------------------------------------------------- | ----------------------------------------------- |
| `DI`       | The OPC Foundation publishes `DI` plus a `DI.PackageMetadata` extension | `DiRegistrar`, `DiPackageMetadataRegistrar`     |
| `FDI`      | Two distinct FDI versions (FDI 5, FDI 7)                          | `Fdi5Registrar`, `Fdi7Registrar`                |
| `IOLink`   | `IOLink` plus `IOLink.IODD` (the device-description extension)    | `IOLinkRegistrar`, `IOLinkIODDRegistrar`        |
| `PADIM`    | `PADIM` plus `IRDI` (ISO identifier registry)                     | `PADIMRegistrar`, `IRDIRegistrar`               |
| `AML`      | AML splits into `AMLBaseTypes` and `AMLLibraries` in upstream     | `AMLBaseTypesRegistrar`, `AMLLibrariesRegistrar` |

For these, decide at the application level which registrar(s) you
need. Most applications load only one — the package keeps them
separate so that downstream code can pick.

## Empty specs

A few specs ship effectively empty — no enums, no DTOs, no codecs:
`AML`, `CSPPlusForMachine`, `LaserSystems`, `Machinery`,
`Powertrain`, `RSL`, `Sercos`, `Shotblasting`, `WoT`. They still
have:

- A NodeIds class (the spec defines hundreds of nodes even if no
  custom DataTypes).
- A registrar that boots up cleanly but registers nothing.

Loading them is harmless — useful when a more complex spec
declares them as a dependency (`Machinery` is the canonical
example, depended on by `MachineTool`, `Robotics`, `LADS`, …).

## Naming inconsistencies you may see

The generator follows the spec's URI casing. A few specs end up
with non-uppercase class names:

| Spec directory  | Class name              |
| --------------- | ----------------------- |
| `DI`            | `DiRegistrar` (lowercase i) |
| `ISA95`         | `OpcISA95Registrar`     |
| `MDIS`          | `OpcMDISRegistrar`      |
| `PROFINET`      | `PnRegistrar`           |
| `PNEM`          | `PnEmRegistrar`         |

The IDE will autocomplete them; do not assume the registrar's
name matches the directory name in PascalCase. The full list is in
[Reference · Specifications](../reference/specifications.md).

## What is **not** generated

- **Method signatures.** OPC UA methods are nodes — their `NodeId`
  is in the constants — but the generator does not emit typed
  wrappers around `call()`. Use `$client->call($objectId, $methodId, $args)`
  directly.
- **Browse paths.** The constants are NodeIds, not paths. For
  resolving a browse path you still write the string
  (`/Objects/Server/...`) yourself.
- **Event types as classes.** Event NodeIds are in the constants,
  but the event payload (a `Variant[]` matching the event's
  `SelectClauses`) is not strongly typed by the generator. Decode
  it from the subscription notification by hand.
- **XML-encoded structures.** Codecs emit only binary encoding
  (`ExtensionObject` encoding = 1). XML-encoded payloads are
  surfaced as raw bytes.

For the contracts these limitations imply, see [Reference ·
Registrar API](../reference/registrar-api.md) and the
[`opcua-client` ExtensionObject docs](https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md).
