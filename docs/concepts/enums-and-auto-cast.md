---
eyebrow: 'Docs · Concepts'
lede:    'PHP BackedEnums per OPC UA enumeration type. When the registrar''s getEnumMappings() is loaded, opcua-client casts every read of those nodes to the matching enum automatically.'

see_also:
  - { href: './typed-dtos.md',                meta: '4 min' }
  - { href: './codecs-and-registrars.md',     meta: '5 min' }
  - { href: '../usage/loading-registrars.md', meta: '5 min' }

prev: { label: 'NodeId constants', href: './node-id-constants.md' }
next: { label: 'Typed DTOs',       href: './typed-dtos.md' }
---

# Enums and auto-cast

OPC UA enumeration types — `Int32`-backed value sets with named
members — show up everywhere in companion specs. The generator
emits a PHP `BackedEnum` per OPC UA enumeration; the registrar's
`getEnumMappings()` table tells the client which DataType NodeId
maps to which enum class.

When the table is loaded, `read()`s of those nodes return the
typed enum directly. When it isn't, you see the raw `int` the
server sent.

## The generated enum

<!-- @code-block language="php" label="generated enum" -->
```php
namespace PhpOpcua\Nodeset\Robotics\Enums;

enum OperationalModeEnumeration: int
{
    case OTHER                  = 0;
    case MANUAL_REDUCED_SPEED   = 1;
    case MANUAL_HIGH_SPEED      = 2;
    case AUTOMATIC              = 3;
    case AUTOMATIC_EXTERNAL     = 4;
}
```
<!-- @endcode-block -->

- The class name matches the spec's DataType name.
- Each case's integer value matches the spec's `Value` attribute.
- Case names use `SCREAMING_SNAKE_CASE` (sanitised from the spec's
  `Name`).
- The backing type is always `int` — the OPC UA spec requires
  enumerations to be `Int32`-encoded on the wire.

Use it like any PHP enum:

<!-- @code-block language="php" label="examples/using-enum.php" -->
```php
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

$mode = OperationalModeEnumeration::MANUAL_HIGH_SPEED;

echo $mode->value;  // 2
echo $mode->name;   // "MANUAL_HIGH_SPEED"

if ($mode === OperationalModeEnumeration::AUTOMATIC) { … }

OperationalModeEnumeration::from(1);
// → OperationalModeEnumeration::MANUAL_REDUCED_SPEED
```
<!-- @endcode-block -->

## Auto-cast — how it works

The mechanism is a three-step handshake at client boot:

<!-- @steps -->
- **The registrar exposes a mapping table.**

  `getEnumMappings()` returns
  `[$dataTypeNodeId => $enumClass]`. For Robotics, the
  `OperationalModeEnumeration` DataType NodeId
  (`RoboticsNodeIds::OperationalModeEnumeration`) maps to the
  generated PHP enum.

- **`loadGeneratedTypes()` walks every registrar.**

  Calls `getEnumMappings()` on each, accumulates the tables, and
  pushes them into the client's internal enum registry.

- **Every `read()` consults the registry.**

  When the response is a `Variant<Int32>` and the read target's
  DataType matches a registered enum mapping, the client wraps the
  `int` value with `EnumClass::from($value)` before returning the
  `DataValue`. `$dv->getValue()` returns the enum instance.
<!-- @endsteps -->

The auto-cast happens **inside `opcua-client`** — the nodeset
package only provides the mapping table. The client's
`ClientBuilder::loadGeneratedTypes()` is the entry point that
wires it.

## What triggers auto-cast — and what does not

The cast runs only when:

- The read returns a `Variant<Int32>` (the standard enum encoding).
- The DataType attribute of the node matches one in the loaded
  enum registry.
- The integer value is a valid case for the enum
  (`EnumClass::from()` returns).

If any of those conditions fails, the read returns the raw
`int` and your code falls back to the pre-auto-cast world. Three
common cases:

- **You forgot `loadGeneratedTypes()`.** The registry is empty;
  reads return `int`. Add the registrar to the builder.
- **The server returned an out-of-spec value.** `EnumClass::from(99)`
  on a 0-4 enum throws `ValueError`. The client catches this and
  falls back to returning the raw `int` (a deliberate choice —
  surfacing a typed exception per read would be hostile to broken
  servers).
- **The DataType on the wire does not match the mapping.** Servers
  sometimes return the parent `Enumeration` DataType instead of
  the specific one. The client cannot match — the cast is skipped.

## Reading "without" knowing the enum

The cast is transparent. Your code receives a typed enum without
changing the call shape:

<!-- @do-dont -->
<!-- @do -->
```php
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

$mode = $client->read(RoboticsNodeIds::OperationalMode)->getValue();

if ($mode === OperationalModeEnumeration::MANUAL_HIGH_SPEED) {
    // …
}
```
<!-- @enddo -->
<!-- @dont -->
```php
$mode = $client->read(RoboticsNodeIds::OperationalMode)->getValue();

// Don't assume int. With the registrar loaded, this becomes
// brittle — and the comparison fails silently when $mode is
// a typed enum equal to integer 2.
if ($mode === 2) {
    // …
}
```
<!-- @enddont -->
<!-- @enddo-dont -->

If your application code must support both modes (the registrar
loaded **or** not), normalise to the integer:

<!-- @code-block language="php" label="dual-mode normalising" -->
```php
$mode = $client->read(RoboticsNodeIds::OperationalMode)->getValue();
$value = $mode instanceof OperationalModeEnumeration ? $mode->value : $mode;
```
<!-- @endcode-block -->

But the cleaner path is to commit to one mode — load the registrar
once, type your code against the enum.

## Writing back

Writes don't auto-cast the **other** direction. To write an enum
value, write its integer:

<!-- @code-block language="php" label="examples/writing-enum.php" -->
```php
use PhpOpcua\Client\Types\BuiltinType;
use PhpOpcua\Nodeset\Robotics\Enums\OperationalModeEnumeration;

$client->write(
    RoboticsNodeIds::OperationalMode,
    OperationalModeEnumeration::MANUAL_REDUCED_SPEED->value,   // 1
    BuiltinType::Int32,
);
```
<!-- @endcode-block -->

The OPC UA spec encodes enums as `Int32`; the explicit
`BuiltinType::Int32` here is for clarity — `setAutoDetectWriteType(true)`
(the builder default) would have picked it up automatically.

## Enums inside DTOs

When a `Types/<Type>.php` DTO has an enum field, the field is
typed with the generated enum class — not with `int`. The
generator emits the property using the spec's case (e.g.
`ScreeningTaskStatus` below). Conceptually:

<!-- @code-block language="php" label="DTO with enum field — illustrative" -->
```php
namespace PhpOpcua\Nodeset\Example\Types;

use PhpOpcua\Nodeset\Example\Enums\ScreeningTaskStatusEnum;

readonly class ScreeningTaskResultDataType
{
    public function __construct(
        public string                  $TaskName,
        public ScreeningTaskStatusEnum $Status,
    ) {
    }
}
```
<!-- @endcode-block -->

The codec for such a DTO decodes the integer field on the wire and
constructs the DTO with the enum instance. No application-side
intervention.

(`AMB`'s actual `RootCauseDataType` has fields `NodeId $RootCauseId`
and `LocalizedText $RootCause` — no enum field. The example above
is illustrative only.)

See [Typed DTOs](./typed-dtos.md).

## Specs that ship only enums

`Robotics`, `ADI`, `CommercialKitchenEquipment`, `CranesHoists`,
`DEXPI`, `MachineTool`, `MTConnect`, `PAEFS`, `PROFINET`, `Pumps`,
`Weihenstephan` — these ship enums and no DTOs / codecs. Loading
their registrars gives you the auto-cast and nothing else, which
is exactly what enum-heavy specs need.

The Robotics example in [Quick start](../getting-started/quick-start.md)
is one of these.

## Enums without a registrar

You can use the generated enum classes **directly** — without
loading the registrar — for compile-time names and pattern
matching:

<!-- @code-block language="php" label="examples/manual-enum-use.php" -->
```php
$rawValue = $client->read(/* … */)->getValue();   // int

$mode = OperationalModeEnumeration::from($rawValue);
// → typed enum

match ($mode) {
    OperationalModeEnumeration::AUTOMATIC           => handleAuto(),
    OperationalModeEnumeration::MANUAL_HIGH_SPEED   => handleManual(),
    default                                          => handleOther(),
};
```
<!-- @endcode-block -->

This is the no-registrar path for specs you do not want to fully
wire — autocomplete and type safety without touching the client
configuration. The cost is one explicit `::from()` per value.
