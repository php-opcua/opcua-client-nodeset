---
eyebrow: 'Docs · Spec · GDS'
lede:    'Global Discovery Server — central registry of OPC UA servers in a plant. One typed structure (ApplicationRecord), no enums, no dependencies.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './onboarding.md',      meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/GDS', meta: 'external', label: 'UA-Nodeset · GDS' }

prev: { label: 'FDT',   href: './fdt.md' }
next: { label: 'GPOS',  href: './gpos.md' }
---

# GDS — Global Discovery Server

OPC UA companion specification for the Global Discovery Server —
a centralised registry where every OPC UA server in a network
registers itself, exposing endpoint URLs, certificates,
capabilities. Clients query GDS to discover servers without
hardcoding addresses.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`GdsRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/gds/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\GDS\GdsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new GdsRegistrar())
    ->connect('opc.tcp://gds.plant.local:4840');
```
<!-- @endcode-block -->

`GdsRegistrar` is lowercase-`d` — not `GDSRegistrar`.

## Direct dependencies

None — GDS is a root spec.

## Notable types

- `Types\ApplicationRecordDataType` — server registration record.
  Carries application URI, product URI, application type, server
  capabilities, discovery URLs. Returned by `FindApplications` and
  related GDS calls.

## Loaded by

- [Onboarding](./onboarding.md) — the onboarding flow registers
  new servers via GDS, so the onboarding spec depends on GDS.
