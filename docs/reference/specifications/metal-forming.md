---
eyebrow: 'Docs · Spec · MetalForming'
lede:    'Metal Forming — press machines, forming lines, sheet-metal processing. Two structured types, deep cascade through MachineTool, Machinery, PADIM, IA, DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machine-tool.md',    meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MetalForming', meta: 'external', label: 'UA-Nodeset · MetalForming' }

prev: { label: 'MDIS',       href: './mdis.md' }
next: { label: 'MTConnect',  href: './mtconnect.md' }
---

# MetalForming

OPC UA companion specification for metal-forming machines —
hydraulic presses, mechanical presses, sheet-metal lines, deep-
drawing machines. Extends MachineTool with forming-specific
process data.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`MetalFormingRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/metal-forming/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\MetalForming\MetalFormingRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MetalFormingRegistrar())   // pulls MachineTool, Machinery, IA, DI, PADIM
    ->connect('opc.tcp://press-controller.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [MachineTool](./machine-tool.md)
- [Machinery](./machinery.md) — via MachineTool
- [IA](./ia.md) — via Machinery
- [DI](./di.md) — via IA
- [PADIM](./padim.md) — for process-instrument descriptors

The deepest cascade in the package — five registrars come along
with one load.

## Notable types

The two DTOs encode press-cycle records and stroke-curve metadata
specific to forming operations. The spec leans on MachineTool for
identification and on PADIM for measurement-side instrumentation.
