---
eyebrow: 'Docs · Spec · LADS'
lede:    'Laboratory and Analytical Device Standard — lab automation, sample handling, analytical instrument workflows. Pulls AMB, Machinery, and DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './amb.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/LADS', meta: 'external', label: 'UA-Nodeset · LADS' }

prev: { label: 'ISA95',           href: './isa95.md' }
next: { label: 'LaserSystems',    href: './laser-systems.md' }
---

# LADS — Laboratory and Analytical Device Standard

OPC UA companion specification for laboratory automation —
sample-handling robots, plate readers, spectrophotometers,
analytical instruments. Distinct from ADI (which focuses on
process-analytical devices); LADS targets discrete lab workflows.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`LADSRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/lads/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\LADS\LADSRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new LADSRegistrar())   // pulls AMB, Machinery, DI, IA
    ->connect('opc.tcp://lab-instrument.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [AMB](./amb.md) — for asset / maintenance records
- [Machinery](./machinery.md) — for the machinery-item base type
- [DI](./di.md) — comes via the cascade

## Notable types

The two DTOs cover lab-specific records — sample identification,
result aggregation. Workflow-specific shapes; see the
[NodeSet2.xml](https://github.com/OPCFoundation/UA-Nodeset/tree/latest/LADS)
source for the field layouts.

## Notable enums

- `DeviceState_LADSEnum` — instrument operational state with
  lab-specific values (e.g. "ReadyToRun", "Aborting").
