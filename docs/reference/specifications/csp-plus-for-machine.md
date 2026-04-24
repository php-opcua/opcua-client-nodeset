---
eyebrow: 'Docs · Spec · CSPPlusForMachine'
lede:    'CSP+ for Machine — Control & Communication Standard Plus for Machine, the Japanese industrial-network standard mapping CC-Link IE field machines to OPC UA. NodeIds only.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/CSPPlusForMachine', meta: 'external', label: 'UA-Nodeset · CSPPlusForMachine' }

prev: { label: 'CranesHoists', href: './cranes-hoists.md' }
next: { label: 'CuttingTool',  href: './cutting-tool.md' }
---

# CSPPlusForMachine

OPC UA companion specification for CSP+ for Machine — the CC-Link
Partner Association's standard for mapping industrial network
devices (predominantly Japanese-vendor PLCs) to OPC UA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`CSPPlusForMachineRegistrar`) |

NodeIds-only. The spec defines a hierarchy of object and reference
types but no custom DataTypes — runtime values come through DI's
codecs.

## Loading

<!-- @code-block language="php" label="examples/csp-plus/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\CSPPlusForMachine\CSPPlusForMachineRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new CSPPlusForMachineRegistrar())   // pulls DI
    ->connect('opc.tcp://cclink-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md) — devices extend `DeviceType`.

## What you typically use

`CSPPlusForMachineNodeIds::*` for the spec's type and reference
NodeIds. Most application code interacts with the DI-side
identification, parameter, and process variables — the CSP+
contribution is the address-space hierarchy.
