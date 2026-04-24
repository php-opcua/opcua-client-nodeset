---
eyebrow: 'Docs · Spec · ADI'
lede:    'Analytical Devices Integration — instruments in process labs (chromatographs, mass spectrometers, particle analysers). Enum-only at the package level; the spec''s heavy lifting is in instances and reference types that build on DI.'

see_also:
  - { href: '../specifications.md',        meta: '5 min' }
  - { href: './di.md',                     meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/ADI', meta: 'external', label: 'UA-Nodeset · ADI' }

prev: { label: 'Specifications', href: '../specifications.md' }
next: { label: 'AMB',            href: './amb.md' }
---

# ADI — Analytical Devices Integration

OPC UA companion specification for analytical instruments —
chromatographs, mass spectrometers, particle analysers, and
similar lab devices. Defines a hierarchy of `AnalyserDeviceType`
on top of DI's `DeviceType`.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 3     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`AdiRegistrar`) |

Enum-only at the runtime level. Most of the spec's complexity is
in object types and reference types — surfaced through the NodeId
constants, not through generated DTOs.

## Loading

<!-- @code-block language="php" label="examples/adi/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\ADI\AdiRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new AdiRegistrar())   // pulls DI transitively
    ->connect('opc.tcp://analyser.lab.local:4840');
```
<!-- @endcode-block -->

The cascade pulls `DI` in — without `DI`'s codecs, reads on common
nodes inherited from `DeviceType` (identification, parameters)
fall back to raw `ExtensionObject`s.

## Direct dependencies

- [DI](./di.md) — provides the `DeviceType` hierarchy ADI extends.

Transitive dependencies: none — DI is a root.

## Notable enums

The three enums describe operating states common to analytical
instruments:

- `AcquisitionStateEnumeration` — measurement-cycle state
- `AcquisitionResultStateEnumeration` — result-set lifecycle
- `DeviceHealthEnumeration` — health rollup

Read any of them through the auto-cast:

<!-- @code-block language="php" label="examples/adi/read-state.php" -->
```php
use PhpOpcua\Nodeset\ADI\Enums\AcquisitionStateEnumeration;

$state = $client->read('ns=N;s=Analyser1.AcquisitionState')->getValue();

if ($state === AcquisitionStateEnumeration::ACQUIRING) {
    // …
}
```
<!-- @endcode-block -->

## What you typically use from this spec

- `AdiNodeIds::*` — NodeId constants for ADI-defined types and
  attributes
- The three enums via auto-cast
- The DI cascade — every ADI device exposes `Identification`,
  `Manufacturer`, `Model`, etc. from DI

For DTO-shaped values (e.g. parameter definitions, calibration
data), the underlying server typically returns DI-defined
structures — see [DI](./di.md).
