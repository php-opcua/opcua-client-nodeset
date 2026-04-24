---
eyebrow: 'Docs · Spec · DI'
lede:    'Device Integration — the OPC UA root spec for any "device". Identification, parameters, software metadata. Loaded transitively by almost every other operational spec.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './ia.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/DI', meta: 'external', label: 'UA-Nodeset · DI' }

prev: { label: 'DEXPI', href: './dexpi.md' }
next: { label: 'ECM',   href: './ecm.md' }
---

# DI — Device Integration

The foundational OPC UA companion specification for industrial
devices. Defines `DeviceType`, `Identification`,
`ParameterSet`, `MethodSet`, `FunctionalGroupType`, and the
related cross-cutting concerns that every other spec extends.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 8     |
| DTOs         | 11    |
| Codecs       | 11    |
| Registrars   | 2 (`DiRegistrar`, `DiPackageMetadataRegistrar`) |

DI ships **two** registrars — `Di` for the core spec and
`DiPackageMetadata` for the OPC Foundation's package-metadata
extension. Most applications only need `DiRegistrar`.

## Loading

<!-- @code-block language="php" label="examples/di/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\DI\DiRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new DiRegistrar())
    ->connect('opc.tcp://device.local:4840');
```
<!-- @endcode-block -->

You rarely load DI directly — almost every other registrar pulls
it in transitively.

## Direct dependencies

None — DI is a root spec.

## Notable types

The 11 DTOs (all under `src/DI/Types/`) cover packaging,
compatibility, file transfer, and parameter-result shapes used
across device specs:

- `PackageMetadata`, `PackageTarget`, `UpdateTarget`,
  `FileDescriptor` — software-update packaging
- `CompatibilityOption`, `CompatibilityRequirement`,
  `Assignment`, `FxPathElement` — capability / topology
  metadata
- `ParameterResultDataType`,
  `TransferResultDataDataType`,
  `TransferResultErrorDataType` — typed result envelopes

There is **no** `IdentificationData` DTO. DI exposes
identification via leaf nodes (`Manufacturer`, `Model`,
`SerialNumber`, `HardwareRevision`, `SoftwareRevision`, …)
whose values are built-in scalars / `LocalizedText`.

## Notable enums

All 8 live in `src/DI/Enums/`:

- `DeviceHealthEnumeration` — health rollup: `NORMAL` (0),
  `FAILURE` (1), `CHECK_FUNCTION` (2), `OFF_SPEC` (3),
  `MAINTENANCE_REQUIRED` (4)
- `SoftwareClass` — `Firmware`, `Application`, `Configuration`,
  `Solution`
- `PackageType`, `UpdateBehavior`, `SoftwareVersionFileType`,
  `FileType` — package / software metadata taxonomy
- `ComparisonOperation`, `LocationIndicationType` — auxiliary
  classifiers

## Loaded by

DI is depended on by 30+ specs (see [Specifications · root
specs](../specifications.md#section-the-dependency-root-specs)).
The cascade ensures every device-oriented integration carries
DI's codecs without explicit wiring.

## Naming

The registrar's class name is `DiRegistrar` (lowercase `i`) —
**not** `DIRegistrar`. Generated from the spec's URI casing.
