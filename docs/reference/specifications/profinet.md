---
eyebrow: 'Docs · Spec · PROFINET'
lede:    'PROFINET — the industrial Ethernet fieldbus, mapped to OPC UA. 18 enums for device/network state, 2 typed structures. Root spec, no upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './pnem.md',            meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/PROFINET', meta: 'external', label: 'UA-Nodeset · PROFINET' }

prev: { label: 'Powertrain', href: './powertrain.md' }
next: { label: 'Pumps',      href: './pumps.md' }
---

# PROFINET

OPC UA companion specification for PROFINET — the
[PROFIBUS & PROFINET International](https://www.profibus.com/)
industrial Ethernet fieldbus. Maps PROFINET device, IO, network
diagnostics, alarms onto OPC UA reads / subscribes.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 18    |
| DTOs         | 2     |
| Codecs       | 2     |
| Registrars   | 1 (`PnRegistrar`) |

The registrar's class name is `PnRegistrar` — matches the spec's
URI casing.

## Loading

<!-- @code-block language="php" label="examples/profinet/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\PROFINET\PnRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PnRegistrar())
    ->connect('opc.tcp://profinet-controller.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — PROFINET is a root spec.

## Notable enums

The 18 enums catalogue PROFINET's network and device taxonomy:

- Network-state, link-state, port-mode, role classification
- Device-state, AR (application-relation) state, alarm severity
- Diagnostic-channel classifications

## Notable types

The two DTOs carry PROFINET-specific diagnostic and identification
records.

## Related

- [PNEM](./pnem.md) — PROFINET energy management, a separate spec
- [POWERLINK](./powerlink.md) — another deterministic industrial
  Ethernet, separate spec
