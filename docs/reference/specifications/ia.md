---
eyebrow: 'Docs · Spec · IA'
lede:    'Industrial Automation — the operational layer above DI. Four enums, one structured type. Loaded transitively by Machinery and every spec under it.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/IA', meta: 'external', label: 'UA-Nodeset · IA' }

prev: { label: 'I4AAS',   href: './i4aas.md' }
next: { label: 'IOLink',  href: './iolink.md' }
---

# IA — Industrial Automation

The "industrial automation" layer that sits on top of DI. Adds
operational types — running / stopped state, operating modes,
production counters — that DI's identification-focused model
leaves out.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`IARegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/ia/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\IA\IARegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new IARegistrar())   // pulls DI
    ->connect('opc.tcp://machine.local:4840');
```
<!-- @endcode-block -->

You rarely load IA directly — it comes in transitively with
Machinery and every spec downstream.

## Direct dependencies

- [DI](./di.md)

## Notable enums

- `MachineOperationModeEnumeration` — Production / Setup /
  Maintenance / Cleaning
- `ItemStateEnumeration` — at-item state
- `ProductionStateEnumeration` — at-station rollup
- `ProductionResultEnumeration` — Pass / Fail per piece

## Loaded by

Most operational specs pull IA in: Machinery, CAS, CuttingTool,
ECM, LaserSystems, MachineTool, MetalForming, Robotics, Scales.
Loading any of those gives you IA's vocabulary for free.
