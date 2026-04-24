---
eyebrow: 'Docs · Spec · Weihenstephan'
lede:    'Weihenstephan Standards for beverage and brewing equipment. Two enums, no DTOs. Pulls PackML, Machinery, DI.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './packml.md',          meta: '2 min' }
  - { href: 'https://www.weihenstephaner-standards.de/', meta: 'external', label: 'Weihenstephan Standards' }

prev: { label: 'TMC',         href: './tmc.md' }
next: { label: 'Woodworking', href: './woodworking.md' }
---

# Weihenstephan

OPC UA companion specification for beverage and brewing equipment
— filling lines, pasteurisers, cleaning systems, brewhouses.
Maps the [Weihenstephan Standards](https://www.weihenstephaner-standards.de/)
(WS Pack, WS Beverage) onto OPC UA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 2     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`WeihenstephanRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/weihenstephan/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Weihenstephan\WeihenstephanRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new WeihenstephanRegistrar())   // pulls PackML, Machinery, DI, IA
    ->connect('opc.tcp://brewery.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [PackML](./packml.md) — for state-model alignment
- [Machinery](./machinery.md) — for the machinery-item base
- [DI](./di.md) — via Machinery

## Notable enums

The two enums classify beverage-equipment-specific operational
modes and product / package types. The 2 enums are small; most
operational vocabulary inherits from PackML and Machinery.
