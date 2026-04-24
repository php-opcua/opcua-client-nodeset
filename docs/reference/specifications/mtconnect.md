---
eyebrow: 'Docs · Spec · MTConnect'
lede:    'MTConnect — the manufacturing-industry data-exchange standard, mapped onto OPC UA. 25 enums, 3 typed structures, no upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.mtconnect.org/', meta: 'external', label: 'MTConnect Institute' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MTConnect', meta: 'external', label: 'UA-Nodeset · MTConnect' }

prev: { label: 'MetalForming', href: './metal-forming.md' }
next: { label: 'Onboarding',   href: './onboarding.md' }
---

# MTConnect

OPC UA companion specification mapping
[MTConnect](https://www.mtconnect.org/) onto OPC UA — the
manufacturing data-exchange standard widely adopted in the US
machine-tool industry. The OPC UA side exposes MTConnect agents
as OPC UA servers.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 25    |
| DTOs         | 3     |
| Codecs       | 3     |
| Registrars   | 1 (`MTConnectRegistrar`) |

Enum-heavy: 25 enums cover MTConnect's extensive data-item
taxonomy.

## Loading

<!-- @code-block language="php" label="examples/mtconnect/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\MTConnect\MTConnectRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MTConnectRegistrar())
    ->connect('opc.tcp://mtconnect-agent.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — MTConnect is a root spec.

## Notable enums

The 25 enums map MTConnect's data-item taxonomy: availability
states, execution states, controller modes, event categories,
sample units. Each MTConnect data-item type that has an
enumerated range gets a PHP enum.

## Notable types

The three DTOs encode MTConnect's structured data-item samples
and events — typed wrappers around the value + unit + qualifier
trio MTConnect carries on every reported data-item.
