---
eyebrow: 'Docs · Spec · AMB'
lede:    'Asset Management — maintenance methods, root-cause records, identification of replaceable equipment. One enum, two structured types, a registrar with two codecs.'

see_also:
  - { href: '../specifications.md',  meta: '5 min' }
  - { href: './lads.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/AMB', meta: 'external', label: 'UA-Nodeset · AMB' }

prev: { label: 'ADI',  href: './adi.md' }
next: { label: 'AML',  href: './aml.md' }
---

# AMB — Asset Management Base

OPC UA companion specification for asset management — recording
maintenance method, root causes for events, name + NodeId pairs
for cross-referencing assets. Used standalone or as a dependency
by domain specs that integrate maintenance flows (LADS, mining,
process industry).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`AMBRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/amb/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\AMB\AMBRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new AMBRegistrar())
    ->connect('opc.tcp://asset-mgmt.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — AMB is a root spec.

## Notable types

- `Types\NameNodeIdDataType` — `(LocalizedText $Name, NodeId $NodeId)`.
  Used wherever the spec needs a human-readable name paired with
  an OPC UA NodeId reference.
- `Types\RootCauseDataType` — root-cause record for maintenance
  events. Cross-references a `MaintenanceMethodEnum` value.

## Notable enums

- `MaintenanceMethodEnum` — kind of maintenance performed
  (preventive, corrective, …). Auto-cast on reads of any
  `MaintenanceMethod`-typed node.

## Used by

- [LADS](./lads.md) — laboratory devices use AMB for maintenance
  records.

Anything that ships with maintenance logs and wants the AMB
shapes can declare AMB as a dependency; few do at the published
spec level, but custom registrars that share AMB's vocabulary fit
naturally here.
