---
eyebrow: 'Docs · Spec · TMC'
lede:    'Tobacco Machinery — primary processing, cigarette making, packing for the tobacco industry. 11 enums, 20 typed structures. Depends on PackML and DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './packml.md',          meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/TMC', meta: 'external', label: 'UA-Nodeset · TMC' }

prev: { label: 'Shotblasting',  href: './shotblasting.md' }
next: { label: 'Weihenstephan', href: './weihenstephan.md' }
---

# TMC — Tobacco Machinery

OPC UA companion specification for the tobacco industry —
primary-processing equipment, cigarette-making machines, packaging
lines. Standardised by [CECCM](https://www.ceccm.eu/).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 11    |
| DTOs         | 20    |
| Codecs       | 20    |
| Registrars   | 1 (`TMCRegistrar`) |

DTO-rich — one of the larger specs by structured-type count.

## Loading

<!-- @code-block language="php" label="examples/tmc/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\TMC\TMCRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new TMCRegistrar())   // pulls PackML, DI
    ->connect('opc.tcp://tobacco-line.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [PackML](./packml.md) — TMC extends the PackML state model
- [DI](./di.md)

## Notable types

The 20 DTOs cover the breadth of tobacco-line reporting:

- **Production** — batch records, brand changeovers, recipe
  switches
- **Quality** — sampling records, reject statistics
- **Performance** — OEE rollups, downtime classification
- **Maintenance** — scheduled service, asset utilisation

For the field-level shapes, see the
[upstream NodeSet2.xml](https://github.com/OPCFoundation/UA-Nodeset/tree/latest/TMC).

## Notable enums

- TMC-specific machine states, brand classes, defect categories,
  PackML-mode extensions.
