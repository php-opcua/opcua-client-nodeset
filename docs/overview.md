---
eyebrow: 'Docs · Overview'
lede:    'Pre-generated PHP classes from the OPC Foundation companion specifications — 807 files, 51 specs, ready to load. Add a registrar to ClientBuilder, get typed enums and DTOs back from every read.'

see_also:
  - { href: './getting-started/installation.md', meta: '2 min' }
  - { href: './getting-started/quick-start.md',  meta: '4 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset', meta: 'external', label: 'OPC Foundation UA-Nodeset' }

prev: { label: 'No previous page', href: '#' }
next: { label: 'Installation',     href: './getting-started/installation.md' }
---

# Overview

`php-opcua/opcua-client-nodeset` ships pre-generated PHP classes for
51 OPC Foundation companion specifications — Machinery, Robotics,
DI, AutoID, BACnet, MachineTool, and the rest. Each specification
becomes a namespace with NodeId constants, PHP enums, typed DTOs,
binary codecs, and a registrar.

For an application using `php-opcua/opcua-client`, the integration
is one builder call:

<!-- @code-block language="php" label="examples/quick.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;
use PhpOpcua\Nodeset\Robotics\RoboticsNodeIds;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())
    ->connect('opc.tcp://192.168.1.100:4840');

$mode = $client->read(RoboticsNodeIds::OperationalMode)->getValue();
// → OperationalModeEnumeration::MANUAL_REDUCED_SPEED (typed PHP enum)
```
<!-- @endcode-block -->

## What this is, in one paragraph

A **generated-code library**. Every file under `src/` is the output
of [`opcua-cli generate:nodeset`](https://github.com/php-opcua/opcua-cli)
applied to a NodeSet2.xml from the
[OPC Foundation UA-Nodeset repository](https://github.com/OPCFoundation/UA-Nodeset).
The package is a thin distribution layer: it carries the generator
output so applications can `composer require` instead of running the
generator themselves.

## What is in the box

<!-- @code-block language="text" label="structure" -->
```text
src/<Spec>/
  ├── <Spec>NodeIds.php           string constants for every node in the spec
  ├── <Spec>Registrar.php         GeneratedTypeRegistrar — codecs + enum mappings
  ├── Enums/                      BackedEnum classes for OPC UA enumerations
  │     └── <Enum>.php
  ├── Types/                      readonly DTOs for structured data types
  │     └── <Type>.php
  └── Codecs/                     ExtensionObjectCodec for binary encode/decode
        └── <Type>Codec.php
```
<!-- @endcode-block -->

Counts at v4.3.0:

| Artefact         | Total |
| ---------------- | ----- |
| Specifications   | 51    |
| NodeIds classes  | 56 (some specs ship two — see [Reference · Specifications](./reference/specifications.md)) |
| Registrars       | 56    |
| PHP enums        | 309   |
| Typed DTOs       | 193   |
| Binary codecs    | 193   |

## What this is not

- **Not a code generator.** The generator lives in
  [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli)
  (`generate:nodeset` command). This package is the distribution.
- **Not a runtime client.** The actual OPC UA stack is in
  [`php-opcua/opcua-client`](https://github.com/php-opcua/opcua-client).
  This package provides types that plug into it.
- **Not test coverage for the generator.** Tests for the generator
  live with the generator — see
  [ROADMAP "Won't Do"](https://github.com/php-opcua/opcua-client-nodeset/blob/master/ROADMAP.md#wont-do-by-design).

## When to use it

Reach for `opcua-client-nodeset` when:

- **Your target server implements a standard companion spec.**
  Robotics PLCs, Machine Tool CNCs, BACnet gateways, AutoID
  readers — they expose the spec's NodeIds. The generated
  constants save you from string-typing them.
- **You want type-safe enum handling.** Reading an `OperationalMode`
  node returns a PHP `BackedEnum` instead of a raw `int`.
- **You exchange structured data with the server.** Companion specs
  define structures (Argument lists, time-series points, custom
  records). The generated codecs decode them into readonly DTOs
  automatically.

Skip it when:

- **Your server uses only vendor-specific NodeIds.** Companion-spec
  types are irrelevant; hand-craft `NodeId` constants in your
  application.
- **You need only built-in OPC UA types** (`Boolean`, `Int32`,
  `String`, …). No companion spec needed.

## Loading is opt-in

Without `loadGeneratedTypes()`, your application sees raw `int`
values for enums and array-shaped data for structures — exactly the
same behaviour as not depending on this package. Loading a
registrar is the **only** thing that turns the generated types on.

## Versioning

This package's major and minor versions track `opcua-client`. When
`opcua-client` ships a v4.4, this package ships a v4.4 — usually
without regeneration, because the runtime contract
(`Repository\ExtensionObjectRepository`, `Encoding\ExtensionObjectCodec`,
`Repository\GeneratedTypeRegistrar`) is stable. See
[Reference · Versioning](./reference/versioning.md).

## Reading order

This documentation is organised around the small public surface:

- **Getting started** — install, first connect, what the 5 file
  types are.
- **Concepts** — NodeIds, enums, DTOs, codecs/registrars. One page
  per artefact type.
- **Usage** — how to wire one or many registrars, how dependencies
  resolve, how to consume structured data.
- **Regeneration** — for maintainers who need to update the
  package after a new UA-Nodeset release.
- **Reference** — the 51-specification catalogue, the registrar
  interface, the versioning policy.
- **Recipes** — end-to-end walkthroughs.

## Ecosystem

| Package                                                       | Role                                                          |
| ------------------------------------------------------------- | ------------------------------------------------------------- |
| [`php-opcua/opcua-client`](https://github.com/php-opcua/opcua-client)         | The OPC UA client this package extends                |
| [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli)               | The code generator that produced `src/`               |
| **`php-opcua/opcua-client-nodeset`** (this package)            | Pre-generated companion-spec types                            |
| [`php-opcua/opcua-session-manager`](https://github.com/php-opcua/opcua-session-manager) | Daemon-based session persistence; orthogonal |
| [OPC Foundation UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset)      | Source NodeSet2.xml files                             |
