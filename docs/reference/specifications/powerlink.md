---
eyebrow: 'Docs · Spec · POWERLINK'
lede:    'POWERLINK — Ethernet POWERLINK industrial fieldbus, mapped to OPC UA. Four enums, three typed structures.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.ethernet-powerlink.org/', meta: 'external', label: 'EPSG — POWERLINK' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/POWERLINK', meta: 'external', label: 'UA-Nodeset · POWERLINK' }

prev: { label: 'PNEM',       href: './pnem.md' }
next: { label: 'Powertrain', href: './powertrain.md' }
---

# POWERLINK — Ethernet POWERLINK

OPC UA companion specification for Ethernet POWERLINK — the
deterministic industrial Ethernet fieldbus standardised by the
[EPSG](https://www.ethernet-powerlink.org/). Used by automation
vendors (B&R, KEBA, …) in machine and process applications.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 4     |
| DTOs         | 3     |
| Codecs       | 3     |
| Registrars   | 1 (`POWERLINKRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/powerlink/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\POWERLINK\POWERLINKRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new POWERLINKRegistrar())   // pulls DI
    ->connect('opc.tcp://powerlink-master.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)

## Notable types

The three DTOs cover POWERLINK-network metadata — node
configuration, time-slot allocation, network diagnostic counters.

## Notable enums

POWERLINK-node states, NMT (network-management) commands,
PDO-mapping types.
