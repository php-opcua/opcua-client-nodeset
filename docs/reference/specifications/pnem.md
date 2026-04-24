---
eyebrow: 'Docs · Spec · PNEM'
lede:    'PROFINET Energy Management — energy-saving modes for PROFINET-attached devices. Four enums, five structured types. Depends on DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './profinet.md',        meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/PNEM', meta: 'external', label: 'UA-Nodeset · PNEM' }

prev: { label: 'PAEFS',     href: './paefs.md' }
next: { label: 'POWERLINK', href: './powerlink.md' }
---

# PNEM — PROFINET Energy Management

OPC UA companion specification for PROFINET Energy — the
PROFINET-specific extensions for energy-saving modes on the
network. A PROFINET device that supports pause / suspend /
maintenance modes exposes those states through PNEM.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | 5     |
| Codecs       | 5     |
| Registrars   | 1 (`PnEmRegistrar`) |

The registrar's class name is `PnEmRegistrar` — from the spec's
URI casing.

## Loading

<!-- @code-block language="php" label="examples/pnem/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\PNEM\PnEmRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PnEmRegistrar())   // pulls DI
    ->connect('opc.tcp://profinet-device.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)

## Notable types

The five DTOs encode energy-pause-mode descriptors, transition
timing, and power-consumption profiles for the various PROFINET
energy-saving states.

## Notable enums

- Energy-mode classification, transition triggers, mode
  availability.
