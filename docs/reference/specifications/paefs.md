---
eyebrow: 'Docs · Spec · PAEFS'
lede:    'Process Automation Energy and Factory Systems — bridges PADIM''s process-instrumentation model with Machinery''s factory model. Four enums, no DTOs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './padim.md',           meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/PAEFS', meta: 'external', label: 'UA-Nodeset · PAEFS' }

prev: { label: 'PADIM', href: './padim.md' }
next: { label: 'PNEM',  href: './pnem.md' }
---

# PAEFS — Process Automation, Energy and Factory Systems

OPC UA companion specification bridging PADIM (process-side
instrumentation) and Machinery (factory-side equipment). PAEFS
provides the cross-cutting vocabulary needed when a single asset
is both a "process instrument" (PADIM) and a "machinery item"
(Machinery) — common in pharmaceutical, food and beverage,
specialty chemical lines.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`PAEFSRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/paefs/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\PAEFS\PAEFSRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PAEFSRegistrar())   // pulls PADIM, Machinery, DI
    ->connect('opc.tcp://hybrid-plant.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [PADIM](./padim.md)
- [Machinery](./machinery.md)
- [DI](./di.md) — via both

## Notable enums

The four enums classify cross-cutting attributes — equipment
suitability for energy / process / factory contexts.
