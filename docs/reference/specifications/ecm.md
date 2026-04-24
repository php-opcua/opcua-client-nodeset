---
eyebrow: 'Docs · Spec · ECM'
lede:    'Energy Consumption Management — energy KPIs, load profiles, demand charges. One enum, five structured types, pulls DI and IA.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './ia.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/ECM', meta: 'external', label: 'UA-Nodeset · ECM' }

prev: { label: 'DI',   href: './di.md' }
next: { label: 'FDI',  href: './fdi.md' }
---

# ECM — Energy Consumption Management

OPC UA companion specification for energy-management interfaces
on industrial equipment — current consumption, demand profiles,
KPI rollups, peak management.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | 5     |
| Codecs       | 5     |
| Registrars   | 1 (`ECMRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/ecm/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\ECM\ECMRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new ECMRegistrar())   // pulls DI, IA
    ->connect('opc.tcp://energy-meter.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)
- [IA](./ia.md)

## Notable types

The five DTOs carry energy measurements and rollups:

- `EnergyKpiData` — KPI snapshot (period, totalised value, unit)
- `EnergyDemandData` — peak/average demand record
- `EnergyMeasurementData` — instantaneous measurement (V, A, P, Q)
- `EnergyTimePeriodData` — time-window descriptor
- `EnergyConsumptionData` — cumulative consumption

The single enum classifies the measurement direction (consumption
vs production / import vs export).
