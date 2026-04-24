---
eyebrow: 'Docs · Spec · IOLink'
lede:    'IO-Link — point-to-point serial communication with sensors and actuators. Two registrars (core + IODD), one enum, no DTOs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/IOLink', meta: 'external', label: 'UA-Nodeset · IOLink' }

prev: { label: 'IA',      href: './ia.md' }
next: { label: 'IREDES',  href: './iredes.md' }
---

# IOLink

OPC UA companion specification for IO-Link — the IEC 61131-9 point-
to-point serial protocol used by sensors and actuators in
industrial automation. The OPC UA side exposes IO-Link masters,
their ports, and the connected devices.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 2 (`IOLinkRegistrar`, `IOLinkIODDRegistrar`) |

Two registrars:

- `IOLinkRegistrar` — the core IO-Link spec
- `IOLinkIODDRegistrar` — the IODD (IO Device Description)
  metadata extension

Most applications need only `IOLinkRegistrar`. Load IODD when
you also need access to device-description metadata exposed by
the server.

## Loading

<!-- @code-block language="php" label="examples/iolink/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\IOLink\IOLinkRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new IOLinkRegistrar())   // pulls DI
    ->connect('opc.tcp://iolink-master.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)

## Notable enums

- `PortMode_IOLinkEnum` — port operating mode (digital input,
  IO-Link, deactivated, etc.)

The spec's runtime surface is mostly nodes inherited from DI —
identification, parameters — with IO-Link-specific extension
points on top.
