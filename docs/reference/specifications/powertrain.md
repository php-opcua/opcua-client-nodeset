---
eyebrow: 'Docs · Spec · Powertrain'
lede:    'Powertrain — motors, drives, gearboxes in industrial machinery. NodeIds only; the spec sits on top of Machinery and DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './machinery.md',       meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Powertrain', meta: 'external', label: 'UA-Nodeset · Powertrain' }

prev: { label: 'POWERLINK', href: './powerlink.md' }
next: { label: 'PROFINET',  href: './profinet.md' }
---

# Powertrain

OPC UA companion specification for industrial powertrains —
motors, variable-speed drives, gearboxes, couplings. Defines the
shared identification and operational nodes every powertrain
asset class extends.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`PowertrainRegistrar`) |

NodeIds-only. Operational vocabulary lives in DI and Machinery
(reachable via the cascade).

## Loading

<!-- @code-block language="php" label="examples/powertrain/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Powertrain\PowertrainRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PowertrainRegistrar())   // pulls Machinery, DI, IA
    ->connect('opc.tcp://drive.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [Machinery](./machinery.md)
- [DI](./di.md) — via Machinery
- [IA](./ia.md) — via Machinery

## What you typically use

`PowertrainNodeIds::*` for the spec's type-definition nodes —
useful when navigating a server that publishes typed motor /
drive instances rooted at Powertrain-defined parents.
