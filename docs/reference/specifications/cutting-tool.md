---
eyebrow: 'Docs · Spec · CuttingTool'
lede:    'Cutting Tool — drills, end mills, inserts, tool holders for machining. One structured type, no enums. Sits at the top of the MachineTool → Machinery → IA → DI chain.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machine-tool.md',    meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CuttingTool', meta: 'external', label: 'UA-Nodeset · CuttingTool' }

prev: { label: 'CSPPlusForMachine', href: './csp-plus-for-machine.md' }
next: { label: 'DEXPI',             href: './dexpi.md' }
---

# CuttingTool

OPC UA companion specification for cutting tools — drills, end
mills, inserts, holders. Standardised by the VDMA. Used by tool
catalogues, ERP integrations, and machine-side tool-life
tracking.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`CuttingToolRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/cutting-tool/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CuttingTool\CuttingToolRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CuttingToolRegistrar())   // pulls MachineTool, Machinery, IA, DI
    ->connect('opc.tcp://tool-manager.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [MachineTool](./machine-tool.md) — for the machine-side context
- [Machinery](./machinery.md) — via MachineTool
- [IA](./ia.md) — via Machinery
- [DI](./di.md) — via IA

A deep cascade. Loading one registrar pulls four others.

## Notable types

The single DTO holds tool-life and identification data — usually
read after a tool change to confirm the tool the machine is now
using matches the catalogue entry. See the spec's source
[NodeSet2.xml](https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CuttingTool)
for the precise field layout.

The interesting access patterns are through the MachineTool
hierarchy — `MachineTool.Tools.Tool1.CuttingToolData` is a typical
shape.
