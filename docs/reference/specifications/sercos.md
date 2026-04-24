---
eyebrow: 'Docs · Spec · Sercos'
lede:    'Sercos — the deterministic motion-control fieldbus. NodeIds only; depends on DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.sercos.org/', meta: 'external', label: 'Sercos International' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Sercos', meta: 'external', label: 'UA-Nodeset · Sercos' }

prev: { label: 'Scheduler',     href: './scheduler.md' }
next: { label: 'Shotblasting',  href: './shotblasting.md' }
---

# Sercos

OPC UA companion specification for Sercos — the deterministic
motion-control fieldbus standardised by
[Sercos International](https://www.sercos.org/). Used in CNC,
robotics, packaging, printing.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`SercosRegistrar`) |

NodeIds-only at the runtime level. The address-space hierarchy
exposes drives and their parameters; identification and operational
state come from DI.

## Loading

<!-- @code-block language="php" label="examples/sercos/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Sercos\SercosRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new SercosRegistrar())   // pulls DI
    ->connect('opc.tcp://sercos-master.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)

## What you typically use

`SercosNodeIds::*` for navigating Sercos-specific type definitions,
S/P parameter identifiers, and reference types.
