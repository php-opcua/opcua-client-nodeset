---
eyebrow: 'Docs · Spec · WoT'
lede:    'Web of Things connector — exposes Things from the W3C WoT initiative over OPC UA. NodeIds only; the registrar is named WotConRegistrar.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.w3.org/WoT/',    meta: 'external', label: 'W3C Web of Things' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/WoT', meta: 'external', label: 'UA-Nodeset · WoT' }

prev: { label: 'Woodworking', href: './woodworking.md' }
next: { label: 'No further',  href: '#' }
---

# WoT — Web of Things Connector

OPC UA companion specification mapping the
[W3C Web of Things](https://www.w3.org/WoT/) standard onto OPC
UA. The "WotCon" name reflects that the spec is a **connector** —
it lets a WoT Thing's Thing Description be addressed and
manipulated through OPC UA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`WotConRegistrar`) |

NodeIds-only. The registrar's name (`WotConRegistrar`) reflects
the spec's URI casing — "WoT Connector".

## Loading

<!-- @code-block language="php" label="examples/wot/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\WoT\WotConRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new WotConRegistrar())
    ->connect('opc.tcp://wot-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — WoT is a root spec.

## What you typically use

`WoTNodeIds::*` for the spec's type-definition NodeIds. The
typical interaction is: a WoT gateway exposes Things over OPC
UA; your application browses the WoT-defined structure to discover
exposed Properties, Actions, Events; reads / calls each via the
standard OPC UA primitives.
