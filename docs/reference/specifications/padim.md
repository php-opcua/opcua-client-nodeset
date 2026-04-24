---
eyebrow: 'Docs · Spec · PADIM'
lede:    'Process Automation Device Information Model — process-industry instrumentation (transmitters, valves, positioners). Two registrars (PADIM + IRDI), three enums, one DTO.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/PADIM', meta: 'external', label: 'UA-Nodeset · PADIM' }

prev: { label: 'PackML', href: './packml.md' }
next: { label: 'PAEFS',  href: './paefs.md' }
---

# PADIM — Process Automation Device Information Model

OPC UA companion specification for process-automation
instrumentation — pressure transmitters, level sensors, control
valves, positioners. Defines the device-side information model
that process-industry IIoT integrations need.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 3     |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 2 (`PADIMRegistrar`, `IRDIRegistrar`) |

Two registrars:

- `PADIMRegistrar` — the core PADIM spec
- `IRDIRegistrar` — IRDI (International Registration Data
  Identifier) metadata, used by PADIM for semantic identifiers

## Loading

<!-- @code-block language="php" label="examples/padim/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\PADIM\PADIMRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PADIMRegistrar())   // pulls DI
    ->connect('opc.tcp://transmitter.local:4840');
```
<!-- @endcode-block -->

Most applications load `PADIMRegistrar` only. Add
`IRDIRegistrar` when the server publishes IRDI-keyed metadata
your code consumes:

<!-- @code-block language="php" label="examples/padim/with-irdi.php" -->
```php
use PhpOpcua\Nodeset\PADIM\IRDIRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PADIMRegistrar())
    ->loadGeneratedTypes(new IRDIRegistrar())
    ->connect(/* … */);
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md)

## Notable types

- `Types\PADimDataType` — the spec's central process-instrument
  descriptor record.

## Notable enums

- Device-state, signal-status, and operational-mode enums
  specific to process instrumentation.

## Loaded by

- [MetalForming](./metal-forming.md) — uses PADIM for press-side
  instrumentation
- [PAEFS](./paefs.md) — extends PADIM for energy + factory
  systems
