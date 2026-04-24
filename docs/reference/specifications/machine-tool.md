---
eyebrow: 'Docs · Spec · MachineTool'
lede:    'MachineTool — the machine-side of CNC milling / turning centres. Ten enums for tool/spindle state, no DTOs at this level (operational content lives in CNC + CuttingTool). Pulls Machinery + IA + DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MachineTool', meta: 'external', label: 'UA-Nodeset · MachineTool' }

prev: { label: 'LaserSystems',  href: './laser-systems.md' }
next: { label: 'MachineVision', href: './machine-vision.md' }
---

# MachineTool

OPC UA companion specification for machine tools — milling
machines, lathes, machining centres viewed from the mechanical
side (vs CNC, which is the controller side). Defines tool magazines,
spindle assemblies, axes, monitoring.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 10    |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`MachineToolRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/machine-tool/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\MachineTool\MachineToolRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineToolRegistrar())   // pulls Machinery, IA, DI
    ->connect('opc.tcp://mill.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [IA](./ia.md) — via Machinery
- [DI](./di.md) — via IA

## Notable enums

The 10 enums describe tool-life, monitoring, and operational state
specific to machine tools:

- `ToolLifeStateEnum` — tool-life classification
- `ToolHolderStateEnum` — installed / removed / faulted
- `AxisStateEnum`, `SpindleStateEnum` — mechanical state
- `MonitoringLevelEnum` — vibration / wear / load monitoring

## Loaded by

- [CuttingTool](./cutting-tool.md) — tool-life records
- [LaserSystems](./laser-systems.md) — laser-equipped machines
- [MetalForming](./metal-forming.md) — forming machines extend
  the same base
