---
eyebrow: 'Docs · Getting started'
lede:    'Connect, load Robotics, read OperationalMode — the auto-cast turns the raw integer the server sent into a typed PHP enum. Three lines past connect().'

see_also:
  - { href: './what-gets-generated.md',            meta: '5 min' }
  - { href: '../usage/loading-registrars.md',      meta: '5 min' }
  - { href: '../recipes/robotics-walkthrough.md',  meta: '6 min' }

prev: { label: 'Installation',          href: './installation.md' }
next: { label: 'What gets generated',   href: './what-gets-generated.md' }
---

# Quick start

This page wires a complete integration: install the package,
connect through the OPC UA client, load the Robotics registrar,
read a value that the auto-cast turns into a typed PHP enum.

## The whole thing

<!-- @code-block language="php" label="examples/quick-start.php" -->
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Client\Types\StatusCode;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;
use PhpOpcua\Nodeset\Robotics\RoboticsNodeIds;
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())   // Robotics + DI + IA
    ->connect('opc.tcp://192.168.1.100:4840');

$dv = $client->read(RoboticsNodeIds::OperationalMode);

if (StatusCode::isGood($dv->statusCode)) {
    /** @var OperationalModeEnumeration $mode */
    $mode = $dv->getValue();   // typed enum, not int

    if ($mode === OperationalModeEnumeration::MANUAL_HIGH_SPEED) {
        echo "Robot in manual high speed mode\n";
    }
}

$client->disconnect();
```
<!-- @endcode-block -->

Three things happened that the package made possible:

<!-- @steps -->
- **`new RoboticsRegistrar()` plus `loadGeneratedTypes()`**
  registered the Robotics enum mappings and (in other specs)
  codecs onto the client. The client knows about Robotics types
  from this point onward.

- **`RoboticsRegistrar` dependencies loaded automatically.**
  Robotics depends on DI and IA — both registered as part of the
  call. No need to wire them explicitly.

- **`RoboticsNodeIds::OperationalMode` is a string constant.** The
  client accepts it as a `NodeId|string` argument and resolves it
  internally. Same effect as
  `read('ns=N;i=...')` but with a name that survives refactoring.

- **`$dv->getValue()` returned a `BackedEnum`, not an `int`.**
  Without the registrar, the same call would have returned
  `1` (the raw integer the server sent). With the registrar's
  `getEnumMappings()` table loaded, the client looks up the DataType
  NodeId and casts the value to the matching PHP enum.
<!-- @endsteps -->

## Without the registrar — what changes

Drop `loadGeneratedTypes()` and the same code returns a raw `int`:

<!-- @code-block language="php" label="examples/without-registrar.php" -->
```php
$client = ClientBuilder::create()
    ->connect('opc.tcp://192.168.1.100:4840');

$dv = $client->read('ns=N;i=...');   // string NodeId, by hand
$mode = $dv->getValue();             // → 2 (int)

if ($mode === 2) {                   // magic number, no autocomplete
    echo "Manual high speed\n";
}
```
<!-- @endcode-block -->

It works — the application functions. But:

- `'ns=N;i=...'` is a magic string; typos surface at runtime.
- `1` is a magic number; downstream code has no autocomplete or
  type info.
- A future enum value change in the spec breaks code silently.

`loadGeneratedTypes()` exchanges those for compile-time names and
typed enums. The runtime cost is one-time at boot — see
[Concepts · Codecs and registrars](../concepts/codecs-and-registrars.md).

## NodeIds are strings, not NodeId objects

Every constant on `<Spec>NodeIds` is a **string** — the canonical
NodeId encoding (`ns=N;i=...` or `ns=N;s=...`):

<!-- @code-block language="php" label="examples/nodeids-are-strings.php" -->
```php
use PhpOpcua\Nodeset\Robotics\RoboticsNodeIds;

var_dump(RoboticsNodeIds::OperationalMode);
// → string(11) "ns=3;i=18961"
```
<!-- @endcode-block -->

`opcua-client`'s `read()`, `write()`, `browse()` all accept
`NodeId|string`, so the string form works directly. Wrap with
`NodeId::parse()` if you need a `NodeId` instance for further
manipulation. See [Concepts · NodeId constants](../concepts/node-id-constants.md).

## What about codecs?

`Robotics` is **enum-only** — no `Codecs/` directory, no `Types/`
directory. The auto-cast you saw above is the enum mappings doing
their job; codecs are not involved.

For specs that include structured data — AutoID, BACnet,
MachineVision, TMC, Scheduler — the registrar also installs
`ExtensionObjectCodec` implementations that decode binary
structures into readonly DTOs. See
[Concepts · Typed DTOs](../concepts/typed-dtos.md) and
[Concepts · Codecs and registrars](../concepts/codecs-and-registrars.md).

## Where to go next

- [What gets generated](./what-gets-generated.md) — the five
  artefact types you may encounter.
- [Usage · Loading registrars](../usage/loading-registrars.md) —
  loading multiple specs, deduplication, opting out of
  dependencies.
- [Recipes · Robotics walkthrough](../recipes/robotics-walkthrough.md)
  — the same example fleshed out with browse, write, structured
  data.

<!-- @callout variant="tip" -->
The Robotics example above assumes a robot exposed on
`opc.tcp://192.168.1.100:4840`. For local development, the
[UA-.NETStandard test suite](https://github.com/php-opcua/uanetstandard-test-suite)
ships a Docker image with several companion specs loaded.
<!-- @endcallout -->
