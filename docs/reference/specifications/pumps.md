---
eyebrow: 'Docs · Spec · Pumps'
lede:    'Pumps — centrifugal pumps, positive-displacement pumps, dosing pumps. 18 enums for hydraulic and mechanical state, one structured type. Pulls Machinery + DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Pumps', meta: 'external', label: 'UA-Nodeset · Pumps' }

prev: { label: 'PROFINET', href: './profinet.md' }
next: { label: 'Robotics', href: './robotics.md' }
---

# Pumps

OPC UA companion specification for industrial pumps — centrifugal,
positive-displacement, dosing. Standardised by VDMA. Common in
chemical, food and beverage, water treatment.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 18    |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`PumpsRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/pumps/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Pumps\PumpsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PumpsRegistrar())   // pulls Machinery, DI, IA
    ->connect('opc.tcp://pump-station.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [DI](./di.md) — via Machinery
- [IA](./ia.md) — via Machinery

## Notable enums

The 18 enums classify pump operation:

- **Operating mode** — local / remote / manual / automatic
- **State** — running, stopped, faulted, maintenance
- **Hydraulic conditions** — cavitation, dry-running, suction
  starvation
- **Alarm severity** — informational, warning, alarm

## Notable types

The single DTO covers pump-curve / operating-point summary — the
performance metadata a pump server reports.
