---
eyebrow: 'Docs · Spec · Safety'
lede:    'Functional Safety — safety-rated controllers, light curtains, e-stops. Two enums (safety state, fault category), three structured types for safety-relevant records.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Safety', meta: 'external', label: 'UA-Nodeset · Safety' }

prev: { label: 'RSL',     href: './rsl.md' }
next: { label: 'Scales',  href: './scales.md' }
---

# Safety — Functional Safety

OPC UA companion specification for safety-rated industrial
equipment — safety controllers, light curtains, emergency stops,
two-hand controls. Distinct from general device monitoring; safety
data has strict reporting requirements per IEC 61508 / 62061.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 2     |
| DTOs         | 3     |
| Codecs       | 3     |
| Registrars   | 1 (`SafetyRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/safety/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Safety\SafetyRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new SafetyRegistrar())
    ->connect('opc.tcp://safety-plc.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — Safety is a root spec.

## Notable types

The three DTOs cover the safety-event reporting shape — safety
function state, fault classification, and acknowledgement
records.

## Notable enums

- `SafetyStateEnum` — safe / unsafe / unknown
- `SafetyFaultCategoryEnum` — fault-category classification

<!-- @callout variant="warning" -->
The OPC UA channel is **not** a safety-rated communication path.
Safety data exposed over OPC UA is for monitoring and visibility
— not for safety-function execution. Real safety logic runs on
the safety-rated controller; OPC UA reports its outcome.
<!-- @endcallout -->
