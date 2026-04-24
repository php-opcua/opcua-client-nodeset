---
eyebrow: 'Docs · Spec · ISA95'
lede:    'ISA-95 — the enterprise/control-system integration standard (ERP ↔ MES ↔ shop floor). One enum, four structured types, no upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.isa.org/standards-and-publications/isa-standards/isa-standards-committees/isa95', meta: 'external', label: 'ISA-95 standard' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/ISA95', meta: 'external', label: 'UA-Nodeset · ISA95' }

prev: { label: 'IREDES',  href: './iredes.md' }
next: { label: 'LADS',    href: './lads.md' }
---

# ISA-95

OPC UA companion specification mapping ISA-95 — the
[ANSI/ISA-95](https://www.isa.org/standards-and-publications/isa-standards/isa-standards-committees/isa95)
standard for enterprise / control-system integration. Covers
production-order definitions, material lots, personnel,
equipment classes — the vocabulary that flows between ERP / MES
/ shop floor.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | 4     |
| Codecs       | 4     |
| Registrars   | 1 (`OpcISA95Registrar`) |

The registrar's class name is `OpcISA95Registrar`, matching the
spec's URI casing.

## Loading

<!-- @code-block language="php" label="examples/isa95/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\ISA95\OpcISA95Registrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new OpcISA95Registrar())
    ->connect('opc.tcp://mes-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — ISA-95 is a root spec.

## Notable types

The four DTOs are at the heart of ISA-95 integrations:

- Production-request and production-schedule records
- Material lot records
- Personnel and equipment associations

The shapes mirror the ISA-95 B2MML XML vocabulary, mapped to OPC
UA structures.
