---
eyebrow: 'Docs · Spec · CAS'
lede:    'Compressed Air Systems — compressors, dryers, filters in industrial pneumatic networks. 23 enums for operational state, 1 structured type, depends on the full Machinery + IA + DI cascade.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CAS', meta: 'external', label: 'UA-Nodeset · CAS' }

prev: { label: 'BACnet', href: './bacnet.md' }
next: { label: 'CNC',    href: './cnc.md' }
---

# CAS — Compressed Air Systems

OPC UA companion specification for compressors, air dryers,
filters, and the auxiliary equipment in industrial compressed-air
networks. Standardised by [VDMA 24582](https://www.vdma.org/).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 23    |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`CASRegistrar`) |

Enum-heavy: 23 distinct enumerations cover compressor states,
dryer states, alarm categories, control modes.

## Loading

<!-- @code-block language="php" label="examples/cas/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CAS\CASRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CASRegistrar())   // pulls DI, IA, Machinery
    ->connect('opc.tcp://compressor.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

`CASRegistrar::dependencyRegistrars()` returns three direct entries:

- [DI](./di.md) — direct.
- [IA](./ia.md) — direct.
- [Machinery](./machinery.md) — direct. The spec's `CompressorType`
  extends `MachineryItemType`.

## Notable enums

The 23 enums cluster around the compressor lifecycle. A
representative sample (full list under `src/CAS/Enums/`):

- **Compressor lifecycle** — `CompressorOperatingStateEnum`
  (`Other`, `Stopped`, `Starting`, `Loading`, `Loaded`, …),
  `CompressorTypeEnum`
- **Dryer / health** — `DryerOperatingStateEnum`,
  `HealthStateEnum` (`OK`, `Warning`, `Error`, `Critical`)
- **Network / classification** — `IpVersionEnum`,
  `FilterClassEnum`, `FluidTypeEnum`
- **Bitmask option set** — `SensorTechnologyOptionSet` (the
  only `OptionSet` in CAS — semantically a bitmask, declared as a
  PHP backed enum)

For a typical state read:

<!-- @code-block language="php" label="examples/cas/read-state.php" -->
```php
use PhpOpcua\Nodeset\CAS\Enums\CompressorOperatingStateEnum;

$state = $client->read('ns=N;s=Compressor1.OperatingState')->getValue();

if ($state === CompressorOperatingStateEnum::Loaded) { … }
```
<!-- @endcode-block -->
