---
eyebrow: 'Docs · Spec · Woodworking'
lede:    'Woodworking — panel saws, edge banders, CNC routers, presses for the wood industry. Three enums, two structured types. Pulls Machinery and DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Woodworking', meta: 'external', label: 'UA-Nodeset · Woodworking' }

prev: { label: 'Weihenstephan', href: './weihenstephan.md' }
next: { label: 'WoT',           href: './wot.md' }
---

# Woodworking

OPC UA companion specification for woodworking machines — panel
saws, edge banders, CNC routers, presses, sanding machines. Used
in furniture manufacturing, construction-component lines.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 3     |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`WoodworkingRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/woodworking/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Woodworking\WoodworkingRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new WoodworkingRegistrar())   // pulls Machinery, DI, IA
    ->connect('opc.tcp://woodworking-line.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [DI](./di.md) — via Machinery
- [IA](./ia.md) — via Machinery

## Notable types

The two DTOs encode woodworking-specific job and quality records
— work-piece metadata, tool-wear summaries, sheet-yield rollups.

## Notable enums

Operational states and job classifications specific to woodworking
machines.
