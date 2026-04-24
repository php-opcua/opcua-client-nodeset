---
eyebrow: 'Docs · Spec · Shotblasting'
lede:    'Shotblasting — abrasive blasting machines for surface preparation. NodeIds only; pulls Machinery and DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Shotblasting', meta: 'external', label: 'UA-Nodeset · Shotblasting' }

prev: { label: 'Sercos', href: './sercos.md' }
next: { label: 'TMC',    href: './tmc.md' }
---

# Shotblasting

OPC UA companion specification for shotblasting machines —
abrasive-blasting equipment for surface preparation, descaling,
deburring. Used in foundries, metal-fabrication shops, automotive
manufacturing.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`ShotblastingRegistrar`) |

NodeIds-only. The spec ships type definitions and node names but
no custom DataTypes at this generation.

## Loading

<!-- @code-block language="php" label="examples/shotblasting/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Shotblasting\ShotblastingRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new ShotblastingRegistrar())   // pulls Machinery, DI, IA
    ->connect('opc.tcp://shotblast-machine.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [DI](./di.md) — via Machinery
- [IA](./ia.md) — via Machinery

## What you typically use

`ShotblastingNodeIds::*` for the spec's type-definition NodeIds.
Operational state goes through Machinery + IA vocabulary.
