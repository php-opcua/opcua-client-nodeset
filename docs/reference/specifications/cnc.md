---
eyebrow: 'Docs · Spec · CNC'
lede:    'CNC — Computerized Numerical Control machines. Six enums for axis state, one structured position type, no upstream dependency cascade.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machine-tool.md',    meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CNC', meta: 'external', label: 'UA-Nodeset · CNC' }

prev: { label: 'CAS',                          href: './cas.md' }
next: { label: 'CommercialKitchenEquipment',   href: './commercial-kitchen-equipment.md' }
---

# CNC — Computerized Numerical Control

OPC UA companion specification for CNC machine controllers — the
control side of milling machines, lathes, machining centres.
Distinct from `MachineTool`, which models the machine itself; CNC
covers the controller's runtime state.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 6     |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`CNCNodeSetRegistrar`) |

Note the registrar's non-standard name (`CNCNodeSetRegistrar`,
not `CNCRegistrar`) — the spec's XML root element is `CNCNodeSet`.

## Loading

<!-- @code-block language="php" label="examples/cnc/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CNC\CNCNodeSetRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CNCNodeSetRegistrar())
    ->connect('opc.tcp://cnc-controller.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — CNC is independent of Machinery / MachineTool, even though
it conceptually fits underneath them. Combine manually if your
target server publishes both.

## Notable types

- `Types\CncPositionDataType` — a typed axis position record
  (units, value, increments).

## Notable enums

- `CncAxisStateEnum` — per-axis state (idle, moving, alarmed)
- `CncOperationModeEnum`, `CncProgramStateEnum`,
  `CncChannelStateEnum` — controller-level states
- `CncAlarmSeverityEnum`, `CncAlarmCategoryEnum`

Pair with [MachineTool](./machine-tool.md) — most servers publish
both, the auto-cast and DTO decoding cover the typed paths,
NodeIds from both specs flow through the same client.
