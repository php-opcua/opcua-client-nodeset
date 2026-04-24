---
eyebrow: 'Docs · Spec · PackML'
lede:    'PackML — packaging-machine language, the OMAC standard for state machines on packaging lines. One enum (the famous PackML state model), six structured types.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.omac.org/packml', meta: 'external', label: 'OMAC PackML' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/PackML', meta: 'external', label: 'UA-Nodeset · PackML' }

prev: { label: 'Onboarding', href: './onboarding.md' }
next: { label: 'PADIM',      href: './padim.md' }
---

# PackML — Packaging Machine Language

OPC UA companion specification for PackML — the
[OMAC](https://www.omac.org/) packaging-machine state-machine
standard. Defines the 17-state PackML state model and the
counters / parameters every packaging machine reports.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 1     |
| DTOs         | 6     |
| Codecs       | 6     |
| Registrars   | 1 (`PackMLRegistrar`) |

The one enum is the canonical PackML state model — used
everywhere PackML is referenced.

## Loading

<!-- @code-block language="php" label="examples/packml/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\PackML\PackMLRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new PackMLRegistrar())
    ->connect('opc.tcp://packer.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — PackML is a root spec.

## Notable types

The six DTOs cover PackML's reporting structures:

- Performance counters (good / bad / waste / total counts)
- Alarm / warning / status records
- Recipe descriptors
- Equipment / instance configuration records

## Notable enums

- `PackMLStateEnum` — the 17-state PackML model (Idle, Starting,
  Execute, Stopping, Suspended, Aborted, …). Auto-cast on any
  PackML state read.

## Loaded by

- [Scales](./scales.md) — scales adopt PackML's state model
- [TMC](./tmc.md) — tobacco-machinery line uses PackML
- [Weihenstephan](./weihenstephan.md) — beverage-line spec extends
  PackML
