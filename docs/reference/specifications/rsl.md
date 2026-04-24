---
eyebrow: 'Docs · Spec · RSL'
lede:    'Result Standard Library — generic result and statistics shapes reusable across companion specs. NodeIds only at the package level.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './gpos.md',            meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/RSL', meta: 'external', label: 'UA-Nodeset · RSL' }

prev: { label: 'Robotics', href: './robotics.md' }
next: { label: 'Safety',   href: './safety.md' }
---

# RSL — Result Standard Library

OPC UA companion specification defining reusable result and
statistics shapes — averages, ranges, distributions, classifications.
Designed as a shared vocabulary for the result-reporting shape
across domain-specific specs (inspection, geographic positioning,
measurement).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`RSLRegistrar`) |

NodeIds-only at the runtime level — the spec ships type
definitions and reference types but no custom DataTypes at this
generation.

## Loading

<!-- @code-block language="php" label="examples/rsl/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\RSL\RSLRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RSLRegistrar())
    ->connect('opc.tcp://measurement-station.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — RSL is a root spec.

## Loaded by

- [GPOS](./gpos.md) — geographic-positioning specs use RSL for
  result aggregation
