---
eyebrow: 'Docs · Spec · FDT'
lede:    'FDT — Field Device Tool. The older device-integration standard, predominantly DTM (Device Type Manager) integration. 11 enums, 3 typed structures.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './fdi.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/FDT', meta: 'external', label: 'UA-Nodeset · FDT' }

prev: { label: 'FDI',  href: './fdi.md' }
next: { label: 'GDS',  href: './gds.md' }
---

# FDT — Field Device Tool

OPC UA companion specification for FDT — the field-device
integration standard built on Device Type Managers (DTMs).
Predates FDI; many existing process-industry installations still
use FDT.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 11    |
| DTOs         | 3     |
| Codecs       | 3     |
| Registrars   | 1 (`FDTNodeSetRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/fdt/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\FDT\FDTNodeSetRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new FDTNodeSetRegistrar())   // pulls DI
    ->connect('opc.tcp://fdt-frame.local:4840');
```
<!-- @endcode-block -->

The registrar's class name is `FDTNodeSetRegistrar` (matches the
XML root element), not `FDTRegistrar`.

## Direct dependencies

- [DI](./di.md)

## Notable enums

The 11 enums cover DTM lifecycle states, connection states,
session types — the operational vocabulary of FDT frames.

For FDI as the modern alternative, see [FDI](./fdi.md).
