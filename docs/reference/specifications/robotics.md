---
eyebrow: 'Docs · Spec · Robotics'
lede:    'Robotics — articulated arms, motion systems, SCARA, gantries. Four enums (operational mode, motion category, axis profile, execution mode), no DTOs. Pulls DI and IA.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: '../../recipes/robotics-walkthrough.md', meta: '6 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Robotics', meta: 'external', label: 'UA-Nodeset · Robotics' }

prev: { label: 'Pumps', href: './pumps.md' }
next: { label: 'RSL',   href: './rsl.md' }
---

# Robotics

OPC UA companion specification for industrial robots — articulated
arms (six-axis, four-axis), SCARA, gantry, delta, collaborative
robots. Standardised by VDMA in cooperation with the
[OPC Foundation](https://opcfoundation.org/).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`RoboticsRegistrar`) |

Enum-only at the runtime level. The spec's runtime contribution
is the auto-cast on the four enums; the rest of the integration
goes through NodeIds and DI / IA codecs.

## Loading

<!-- @code-block language="php" label="examples/robotics/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())   // pulls DI, IA
    ->connect('opc.tcp://robot.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)
- [IA](./ia.md)

## Notable enums

Case names below are quoted as they appear in
`src/Robotics/Enums/` (`SCREAMING_SNAKE`).

- `OperationalModeEnumeration` — `OTHER` (0), `MANUAL_REDUCED_SPEED`
  (1), `MANUAL_HIGH_SPEED` (2), `AUTOMATIC` (3),
  `AUTOMATIC_EXTERNAL` (4)
- `MotionDeviceCategoryEnumeration` — `OTHER` (0),
  `ARTICULATED_ROBOT` (1), `SCARA_ROBOT` (2), `CARTESIAN_ROBOT` (3),
  `SPHERICAL_ROBOT` (4), `PARALLEL_ROBOT` (5), `CYLINDRICAL_ROBOT`
  (6). The spec has no `DELTA_ROBOT` or `GANTRY_ROBOT` case.
- `AxisMotionProfileEnumeration` — `OTHER` (0), `ROTARY` (1),
  `ROTARY_ENDLESS` (2), `LINEAR` (3), `LINEAR_ENDLESS` (4)
- `ExecutionModeEnumeration` — `CYCLE` (0), `CONTINUOUS` (1),
  `STEP` (2)

## Loaded by

- [CranesHoists](./cranes-hoists.md) — cranes reuse the motion
  model

## Walkthrough

For a complete end-to-end Robotics example, see
[Recipes · Robotics walkthrough](../../recipes/robotics-walkthrough.md).
