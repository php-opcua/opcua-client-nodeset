---
eyebrow: 'Docs · Spec · Onboarding'
lede:    'Onboarding — adding a new OPC UA server to a fleet via the Global Discovery Server. Six typed structures for the registration / commissioning flow. Depends on GDS.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './gds.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Onboarding', meta: 'external', label: 'UA-Nodeset · Onboarding' }

prev: { label: 'MTConnect', href: './mtconnect.md' }
next: { label: 'PackML',    href: './packml.md' }
---

# Onboarding

OPC UA companion specification for **server onboarding** — the
commissioning flow where a fresh device discovers the network's
Global Discovery Server, registers itself, exchanges certificates,
and joins the trust domain. Targets zero-touch provisioning of
industrial endpoints.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | 6     |
| Codecs       | 6     |
| Registrars   | 1 (`OnboardingRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/onboarding/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Onboarding\OnboardingRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new OnboardingRegistrar())   // pulls GDS
    ->connect('opc.tcp://onboarding-service.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [GDS](./gds.md) — onboarding pivots around the discovery server.

## Notable types

The six DTOs encode the onboarding handshake:

- Registration request / response records
- Certificate-signing-request data
- Trust-domain enrolment records
- Status / progress records for the commissioning flow

These flow between the device and a deploying service during
onboarding. The DTOs are what your application reads from the
device's onboarding status nodes.
