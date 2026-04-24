---
eyebrow: 'Docs · Spec · Machinery'
lede:    'Machinery — the cross-cutting "MachineryItem" base for every machine class. No enums, no DTOs at the package level, but loaded transitively by 14 other specs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Machinery', meta: 'external', label: 'UA-Nodeset · Machinery' }

prev: { label: 'MachineVision', href: './machine-vision.md' }
next: { label: 'MDIS',          href: './mdis.md' }
---

# Machinery

OPC UA companion specification for the cross-cutting "machinery"
abstraction — `MachineryItemType` is the base every domain-
specific machine class extends. Defines health rollups, identification
mapping, operational-mode patterns reusable across machine
categories.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`MachineryRegistrar`) |

No enums and no DTOs at this level — Machinery is **structural**.
The vocabulary it contributes lives in NodeId constants. Domain
specs (MachineTool, Pumps, Robotics, …) add the operational
content.

## Loading

<!-- @code-block language="php" label="examples/machinery/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Machinery\MachineryRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineryRegistrar())   // pulls DI, IA
    ->connect('opc.tcp://machine.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

`MachineryRegistrar::dependencyRegistrars()` returns two direct
entries. `DI` itself has no upstream dependencies, so it does not
pull anything else in.

- [DI](./di.md) — direct
- [IA](./ia.md) — direct (IA in turn declares DI as its own
  dependency)

## Loaded by

14 specs depend on Machinery: CAS, CranesHoists, CuttingTool,
LADS, LaserSystems, MachineTool, MetalForming, PAEFS, Powertrain,
Pumps, Scales, Shotblasting, Weihenstephan, Woodworking. Loading
any of those gives you Machinery for free.

## What you typically use

The NodeIds — `MachineryNodeIds::*` — for navigating the cross-
cutting `Identification`, `Health`, `Components`, `MachineryItemState`
nodes the spec defines.
