---
eyebrow: 'Docs · Spec · LaserSystems'
lede:    'Laser Systems — industrial laser welders, cutters, markers. NodeIds-only; the spec''s contribution is the address-space hierarchy, not custom DataTypes.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machine-tool.md',    meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/LaserSystems', meta: 'external', label: 'UA-Nodeset · LaserSystems' }

prev: { label: 'LADS',         href: './lads.md' }
next: { label: 'MachineTool',  href: './machine-tool.md' }
---

# LaserSystems

OPC UA companion specification for industrial laser systems —
welding lasers, cutting lasers, marking lasers, beam-delivery
systems. Extends MachineTool with laser-specific node types.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`LaserSystemsRegistrar`) |

NodeIds-only at the runtime level. All operational vocabulary is
inherited from MachineTool / Machinery / IA / DI.

## Loading

<!-- @code-block language="php" label="examples/laser-systems/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\LaserSystems\LaserSystemsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new LaserSystemsRegistrar())   // pulls MachineTool, Machinery, IA, DI
    ->connect('opc.tcp://laser.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [MachineTool](./machine-tool.md)
- [Machinery](./machinery.md)
- [IA](./ia.md)
- [DI](./di.md)

A deep cascade. The single load brings four registrars in.

## What you typically use

`LaserSystemsNodeIds::*` for the spec's type definitions and
reference types. The operational reads — laser power, focus
position, pulse parameters — go through MachineTool-defined
property types.
