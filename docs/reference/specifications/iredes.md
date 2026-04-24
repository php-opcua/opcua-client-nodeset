---
eyebrow: 'Docs · Spec · IREDES'
lede:    'International Rock Excavation Data Exchange Standard — mining equipment data flow. Five enums for equipment state, two structured types, no upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.iredes.org/', meta: 'external', label: 'IREDES.org' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/IREDES', meta: 'external', label: 'UA-Nodeset · IREDES' }

prev: { label: 'IOLink',  href: './iolink.md' }
next: { label: 'ISA95',   href: './isa95.md' }
---

# IREDES — International Rock Excavation Data Exchange Standard

OPC UA companion specification for IREDES — the mining industry's
data-exchange standard. Covers drill rigs, loaders, trucks,
excavators, and the production data that flows between them and
fleet-management systems.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 5     |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`IREDESRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/iredes/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\IREDES\IREDESRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new IREDESRegistrar())
    ->connect('opc.tcp://mining-asset.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — IREDES is a root spec.

## Notable types

The two DTOs encode production and shift data records that mining
equipment streams to fleet-management systems.

## Notable enums

- Equipment-state enums covering operating, idle, faulted,
  maintenance for the various mining-machine classes.
