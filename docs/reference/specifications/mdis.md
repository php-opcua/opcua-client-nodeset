---
eyebrow: 'Docs · Spec · MDIS'
lede:    'Marine and Subsea Information Standard — offshore production equipment, subsea wells, intervention vessels. 12 enums, one DTO. No upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.mdis-network.org/', meta: 'external', label: 'MDIS network' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MDIS', meta: 'external', label: 'UA-Nodeset · MDIS' }

prev: { label: 'Machinery',      href: './machinery.md' }
next: { label: 'MetalForming',   href: './metal-forming.md' }
---

# MDIS — Marine and Subsea

OPC UA companion specification for MDIS — the marine and subsea
data interchange standard, used by offshore oil-and-gas production
to map well heads, subsea equipment, intervention vessels onto
OPC UA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 12    |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`OpcMDISRegistrar`) |

The registrar's class name is `OpcMDISRegistrar` — matches the
spec's URI casing.

## Loading

<!-- @code-block language="php" label="examples/mdis/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\MDIS\OpcMDISRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new OpcMDISRegistrar())
    ->connect('opc.tcp://subsea-controller.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — MDIS is a root spec.

## Notable enums

The 12 enums cover subsea-equipment operational states, well
states, valve positions, intervention modes — the specific
vocabulary of offshore production.

For the field-level details of the single DTO and the enum
catalogue, see the
[upstream NodeSet2.xml](https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MDIS).
