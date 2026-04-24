---
eyebrow: 'Docs · Recipes'
lede:    'A full Robotics integration in 100 lines. Connect, list motion devices, read mode + category, write a setpoint, subscribe to changes. End to end.'

see_also:
  - { href: '../reference/specifications/robotics.md',     meta: '3 min' }
  - { href: '../getting-started/quick-start.md',           meta: '4 min' }
  - { href: '../usage/reading-structured-data.md',         meta: '6 min' }

prev: { label: 'Versioning',                   href: '../reference/versioning.md' }
next: { label: 'Extending a registrar',        href: './extending-a-registrar.md' }
---

# Robotics walkthrough

A complete example that uses every artefact the Robotics
registrar provides — NodeId constants, enums, dependency cascade
— against a real OPC UA Robotics server.

Robotics is **enum-only**: no DTOs, no codecs. The interesting
mechanic is the auto-cast on `OperationalMode` and
`MotionDeviceCategory` reads, plus the dependency pull-in of DI
and IA.

## Setup

A working OPC UA Robotics server reachable at
`opc.tcp://robot.local:4840`. The
[uanetstandard-test-suite](https://github.com/php-opcua/uanetstandard-test-suite)
ships one as a Docker container if you don't have hardware.

<!-- @code-block language="bash" label="terminal" -->
```bash
composer require php-opcua/opcua-client-nodeset
```
<!-- @endcode-block -->

## 1 — Connect with Robotics loaded

<!-- @code-block language="php" label="examples/robotics/connect.php" -->
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())   // pulls DI + IA
    ->connect('opc.tcp://robot.local:4840');
```
<!-- @endcode-block -->

After this, the client knows:

- Robotics enum mappings (4 of them — `OperationalModeEnumeration`,
  `MotionDeviceCategoryEnumeration`, `AxisMotionProfileEnumeration`,
  `ExecutionModeEnumeration`)
- DI enum mappings + codecs (8 enums and 11 codecs from DI — e.g.
  `PackageMetadata`, `FileDescriptor`, `UpdateTarget`)
- IA enum mappings + codecs (4 enums and 1 codec — `RGBWDataType`)

None of this required explicit wiring — `RoboticsRegistrar`
declared DI and IA as dependencies, the loader walked them.

## 2 — Read the motion device system

`MotionDeviceSystem` is the top-level object every Robotics
server publishes. Its components are the motion devices —
typically one per robot arm.

<!-- @code-block language="php" label="examples/robotics/list-devices.php" -->
```php
use PhpOpcua\Client\Types\NodeClass;
use PhpOpcua\Nodeset\Robotics\RoboticsNodeIds;

$devices = $client->browse(
    RoboticsNodeIds::MotionDeviceSystemType,
    nodeClasses: [NodeClass::Object],
);

foreach ($devices as $ref) {
    echo "{$ref->displayName->text}  ({$ref->nodeId})\n";
}
```
<!-- @endcode-block -->

`MotionDeviceSystemType` is a type-definition node, not an
instance. To list **instances**, browse from the `Objects` folder
(`i=85`) and filter by TypeDefinition.

## 3 — Read OperationalMode (auto-cast)

Assume your robot's `MotionDevice` lives at
`ns=4;s=Robot1`. The `OperationalMode` property is on it
somewhere — typically at `ns=4;s=Robot1.OperationalMode`.

<!-- @code-block language="php" label="examples/robotics/read-mode.php" -->
```php
use PhpOpcua\Client\Types\StatusCode;
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

$dv = $client->read('ns=4;s=Robot1.OperationalMode');

if (! StatusCode::isGood($dv->statusCode)) {
    throw new RuntimeException(
        'Cannot read mode: ' . StatusCode::getName($dv->statusCode)
    );
}

/** @var OperationalModeEnumeration $mode */
$mode = $dv->getValue();

echo "Current mode: {$mode->name}  (value {$mode->value})\n";
```
<!-- @endcode-block -->

`$dv->getValue()` returns the typed enum because:

- The Robotics registrar registered the mapping
  `OperationalModeEnumeration DataType → OperationalModeEnumeration::class`.
- The server returned a `Variant<Int32>` whose DataType matches
  the registered mapping.
- `OperationalModeEnumeration::from($int)` succeeded.

Without the registrar, `$mode` would be `int`.

## 4 — Pattern-match the mode

PHP's `match` reads cleanly with typed enums:

<!-- @code-block language="php" label="examples/robotics/match-mode.php" -->
```php
$action = match ($mode) {
    OperationalModeEnumeration::OTHER                => null,
    OperationalModeEnumeration::AUTOMATIC            => 'pause production briefly',
    OperationalModeEnumeration::MANUAL_REDUCED_SPEED => 'allow operator near robot',
    OperationalModeEnumeration::MANUAL_HIGH_SPEED    => 'clear the cell',
    OperationalModeEnumeration::AUTOMATIC_EXTERNAL   => 'wait for external trigger',
};
```
<!-- @endcode-block -->

Adding a new mode to the spec breaks the `match` at compile time
(PHPStan / Psalm flag the unhandled case). Compare with the
integer version where a new mode silently lands in the `default`
branch.

## 5 — Read the motion device category

Same shape, different enum:

<!-- @code-block language="php" label="examples/robotics/read-category.php" -->
```php
use PhpOpcua\Nodeset\Robotics\Enums\MotionDeviceCategoryEnumeration;

$dv = $client->read('ns=4;s=Robot1.MotionDeviceCategory');

/** @var MotionDeviceCategoryEnumeration $category */
$category = $dv->getValue();

if ($category === MotionDeviceCategoryEnumeration::ARTICULATED_ROBOT) {
    echo "Six-axis articulated arm\n";
}
```
<!-- @endcode-block -->

## 6 — Read identification (via DI)

`MotionDevice` extends DI's `TopologyElementType` — every robot
exposes an `Identification` object inheriting from
`DI.DeviceType.Identification`. The constant lives in DI:

<!-- @code-block language="php" label="examples/robotics/read-identification.php" -->
```php
use PhpOpcua\Nodeset\DI\DiNodeIds;

$manufacturer = $client->read('ns=4;s=Robot1.Identification.Manufacturer')->getValue();
$serialNumber = $client->read('ns=4;s=Robot1.Identification.SerialNumber')->getValue();
$model        = $client->read('ns=4;s=Robot1.Identification.Model')->getValue();

echo "{$manufacturer->text} {$model->text}  S/N: {$serialNumber}\n";
```
<!-- @endcode-block -->

`Manufacturer` is a `LocalizedText` — its `text` property is what
you display. `SerialNumber` is a plain string. The DI codecs (or
their absence) do not enter the picture — these are basic types,
not ExtensionObjects.

## 7 — Write a setpoint

Setpoints on Robotics nodes are typed — speed override is a
`Double` in `[0, 1]`:

<!-- @code-block language="php" label="examples/robotics/write-speed.php" -->
```php
use PhpOpcua\Client\Types\BuiltinType;

$status = $client->write(
    'ns=4;s=Robot1.SpeedOverride',
    0.85,                    // 85% of nominal speed
    BuiltinType::Double,
);

if (! StatusCode::isGood($status)) {
    throw new RuntimeException(
        'Write rejected: ' . StatusCode::getName($status)
    );
}
```
<!-- @endcode-block -->

The auto-detect would have picked `Double` from the node's
DataType, but the explicit form documents intent.

## 8 — Subscribe to mode changes

For continuous monitoring, a subscription beats polling:

<!-- @code-block language="php" label="examples/robotics/subscribe-mode.php" -->
```php
use PhpOpcua\Client\Event\DataChangeReceived;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher();
$dispatcher->addListener(DataChangeReceived::class, function (DataChangeReceived $e) {
    $value = $e->dataValue->getValue();

    // Correlate by $e->clientHandle if you registered several items.
    if ($value instanceof OperationalModeEnumeration) {
        echo "Mode changed → {$value->name}\n";
    }
});

// The dispatcher belongs on the builder, before connect().
$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())
    ->setEventDispatcher($dispatcher)
    ->connect('opc.tcp://robot.local:4840');

$sub = $client->createSubscription(publishingInterval: 500.0);
$client->createMonitoredItems($sub->subscriptionId, [
    ['nodeId' => 'ns=4;s=Robot1.OperationalMode', 'clientHandle' => 1],
]);

// Drive the publish loop yourself, or use opcua-session-manager's auto-publish.
while (true) {
    $client->publish();
    usleep(10_000);
}
```
<!-- @endcode-block -->

The `instanceof` check guards against a future change where the
enum mapping might not match — the listener handles both the
typed and the raw-int cases gracefully. `clientHandle` is the
correlation key the server echoes back on every notification.

## What you exercised

| Feature                                | Where                                                |
| -------------------------------------- | ---------------------------------------------------- |
| Single-call dependency cascade         | Step 1 (Robotics → DI + IA)                          |
| NodeId constants                       | Steps 2-3, used as strings against `read()`           |
| Enum auto-cast on `read()`             | Steps 3, 5 (`OperationalMode`, `MotionDeviceCategory`) |
| Cross-spec constant use                | Step 6 (`DiNodeIds` reached transitively)            |
| Typed `match`                          | Step 4                                               |
| Write with `BuiltinType` from `opcua-client` | Step 7                                          |
| Enum auto-cast in subscription event   | Step 8                                               |

Total package surface used: one builder call, one registrar,
typed reads and writes. No codecs in this walkthrough — Robotics
has none. For a codec-heavy walkthrough, swap `RoboticsRegistrar`
with `BACnetRegistrar`, `AutoIDRegistrar`, or `TMCRegistrar` and
the structured `DataValue::getValue()` calls return typed DTOs
instead of enums.
