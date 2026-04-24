---
eyebrow: 'Docs · Spec · CranesHoists'
lede:    'Cranes & Hoists — overhead cranes, gantries, jib cranes, hoists. Four enums, no DTOs, but a fully-loaded dependency cascade through Robotics + Machinery.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './robotics.md',        meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CranesHoists', meta: 'external', label: 'UA-Nodeset · CranesHoists' }

prev: { label: 'CommercialKitchenEquipment', href: './commercial-kitchen-equipment.md' }
next: { label: 'CSPPlusForMachine',          href: './csp-plus-for-machine.md' }
---

# CranesHoists

OPC UA companion specification for industrial lifting equipment —
overhead bridge cranes, gantry cranes, jib cranes, hoists.
Reuses Robotics' motion model for axis state.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`CranesHoistsRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/cranes-hoists/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CranesHoists\CranesHoistsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CranesHoistsRegistrar())   // pulls Robotics, Machinery, DI
    ->connect('opc.tcp://crane.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Robotics](./robotics.md) — for axis motion
- [Machinery](./machinery.md) — for the machinery-item base type
- [DI](./di.md) — comes via the cascade

## Notable enums

- `OperationalState_CraneEnum`
- `CraneTypeEnum`
- `LoadStateEnum`
- `HookStateEnum`

For motion-related state, the auto-cast also surfaces Robotics'
own enums (`OperationalModeEnumeration`, `MotionDeviceCategoryEnumeration`)
on nodes inherited from Robotics types.
