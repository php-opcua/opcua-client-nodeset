---
eyebrow: 'Docs · Spec · FDI'
lede:    'Field Device Integration — the FDI Cooperation''s standard for unified field-device handling. Two registrars covering FDI 5 and FDI 7, three enums, six DTOs total.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './fdt.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/FDI', meta: 'external', label: 'UA-Nodeset · FDI' }

prev: { label: 'ECM',  href: './ecm.md' }
next: { label: 'FDT',  href: './fdt.md' }
---

# FDI — Field Device Integration

OPC UA companion specification for FDI — the FDI Cooperation's
device-integration standard for HART / FOUNDATION Fieldbus /
PROFIBUS PA / PROFINET / Ethernet-APL field devices. The package
ships two registrars covering FDI versions 5 and 7 (different
NodeSet2.xml files in upstream).

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 3     |
| DTOs         | 6     |
| Codecs       | 6     |
| Registrars   | 2 (`Fdi5Registrar`, `Fdi7Registrar`) |

## Loading

Choose the registrar matching your target server's FDI version:

<!-- @code-block language="php" label="examples/fdi/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\FDI\Fdi7Registrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new Fdi7Registrar())   // pulls DI
    ->connect('opc.tcp://fdi-host.local:4840');
```
<!-- @endcode-block -->

Most servers implement only one FDI version. If yours implements
both, load both registrars.

## Direct dependencies

- [DI](./di.md) — both Fdi5 and Fdi7 extend DI's device model.

## Notable types

The six DTOs carry device-description metadata and command-result
records — the typed shapes that flow between FDI hosts and device
packages.

For details on the FDI shapes, refer to the
[FDI specification](https://www.fdi-cooperation.com/).
