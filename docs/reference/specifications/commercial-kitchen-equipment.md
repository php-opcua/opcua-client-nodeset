---
eyebrow: 'Docs · Spec · CommercialKitchenEquipment'
lede:    'Commercial Kitchen Equipment — ovens, refrigerators, dishwashers in professional food service. 24 enums (operating modes, alarm categories, cleaning states), no DTOs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CommercialKitchenEquipment', meta: 'external', label: 'UA-Nodeset · CKE' }

prev: { label: 'CNC',           href: './cnc.md' }
next: { label: 'CranesHoists',  href: './cranes-hoists.md' }
---

# CommercialKitchenEquipment

OPC UA companion specification for professional kitchen equipment
— combi ovens, refrigeration units, dishwashers, deep fryers. The
target is restaurant and commercial-catering automation.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 24    |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`CommercialKitchenEquipmentRegistrar`) |

Enum-only at the runtime level. The 24 enums cover operating
modes, door states, cleaning cycles, alarm categories — a
state-rich domain.

## Loading

<!-- @code-block language="php" label="examples/cke/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CommercialKitchenEquipment\CommercialKitchenEquipmentRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CommercialKitchenEquipmentRegistrar())   // pulls DI
    ->connect('opc.tcp://kitchen-controller.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md) — kitchen devices extend `DeviceType`.

## Notable enums

The 24 enums cluster around equipment lifecycles:

- **Operational** — `OperationalStateEnum`, `OperatingModeEnum`,
  `MaintenanceStateEnum`
- **Equipment-specific** — `DoorStateEnum`, `CleaningStateEnum`,
  `OvenChamberStateEnum`, `RefrigerationStateEnum`
- **Alarms** — `AlarmCategoryEnum`, `WarningLevelEnum`,
  `MessageStateEnum`

Use the auto-cast to read any of them as typed PHP enums; the
spec's runtime is otherwise straightforward.
