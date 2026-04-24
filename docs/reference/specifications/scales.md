---
eyebrow: 'Docs · Spec · Scales'
lede:    'Industrial Scales — weighing equipment in production and logistics. Six enums, five typed structures, deep cascade through PackML + Machinery + IA + DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './packml.md',          meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Scales', meta: 'external', label: 'UA-Nodeset · Scales' }

prev: { label: 'Safety',    href: './safety.md' }
next: { label: 'Scheduler', href: './scheduler.md' }
---

# Scales — Industrial Weighing

OPC UA companion specification for industrial weighing equipment
— platform scales, hopper scales, conveyor scales, checkweighers.
Common in food and beverage, logistics, chemicals.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 6     |
| DTOs         | 5     |
| Codecs       | 5     |
| Registrars   | 1 (`ScalesRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/scales/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Scales\ScalesRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new ScalesRegistrar())   // pulls PackML, Machinery, IA, DI
    ->connect('opc.tcp://scale.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [IA](./ia.md) — via Machinery
- [DI](./di.md) — via IA
- [PackML](./packml.md) — for state-model alignment

## Notable types

The five DTOs encode weighing records — gross / net / tare values,
calibration reports, batch summaries, alibi-storage records (legal-
for-trade audit trails).

## Notable enums

- Weighing modes (gross / net / tare / counting)
- Calibration states, legal-for-trade indicators, alarm categories
