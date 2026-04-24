---
eyebrow: 'Docs · Spec · BACnet'
lede:    'BACnet — building automation interop. The largest spec in the package by codec count: 44 typed structures, 36 enums, covering devices, objects, alarms, schedules, trend logs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://www.ashrae.org/technical-resources/bookstore/bacnet', meta: 'external', label: 'ASHRAE BACnet' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/BACnet', meta: 'external', label: 'UA-Nodeset · BACnet' }

prev: { label: 'AutoID', href: './autoid.md' }
next: { label: 'CAS',    href: './cas.md' }
---

# BACnet — Building Automation

OPC UA companion specification for BACnet — the building-
automation protocol covering HVAC, lighting, access control, fire
alarms. The OPC UA side surfaces BACnet's object model, alarm
acknowledgements, schedules, trend logs through OPC UA reads /
writes / subscriptions.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 36    |
| DTOs         | 44    |
| Codecs       | 44    |
| Registrars   | 1 (`BACnetRegistrar`) |

The largest spec in the package — by codec count, by enum count,
by file count. Loading it brings in a substantial amount.

## Loading

<!-- @code-block language="php" label="examples/bacnet/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\BACnet\BACnetRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new BACnetRegistrar())
    ->connect('opc.tcp://bms-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — BACnet is a root spec. The package consciously does not
hook BACnet to DI; BACnet's identification model differs enough
that overlaying DI would be misleading.

## Notable types

The 44 DTOs cover BACnet's "primitive" structured values:

- **Scheduling** — `TimeValueDataType`, `DateValueDataType`,
  `DailyScheduleDataType`, `WeeklyScheduleDataType`,
  `CalendarEntryDataType`.
- **Alarms** — `LogRecordDataType`, `LogDataDataType`,
  `EventTransitionBitsDataType`, `EventNotificationSubscriptionDataType`.
- **Object addressing** — `ObjectIdentifierDataType`,
  `DeviceObjectReferenceDataType`, `DeviceObjectPropertyReferenceDataType`.
- **Network configuration** — `RouterEntryDataType`,
  `AddressBindingDataType`, `BACnetIPModeDataType`.

For a trend-log read:

<!-- @code-block language="php" label="examples/bacnet/read-trend.php" -->
```php
use PhpOpcua\Nodeset\BACnet\Types\LogRecordDataType;

$records = $client->read('ns=N;s=Building.Trends.AHU1.SupplyTemp')->getValue();

foreach ($records as $record) {
    if ($record instanceof LogRecordDataType) {
        // $record->Timestamp, $record->Sequence, $record->LogDatum
    }
}
```
<!-- @endcode-block -->

## Notable enums

36 enums — too many to list. The categories:

- **Object types** — `BACnetObjectTypeEnumeration` (catalog of
  every standard BACnet object class)
- **Service types** — `BACnetConfirmedServiceChoiceEnumeration`,
  `BACnetUnconfirmedServiceChoiceEnumeration`
- **Engineering units** — `BACnetEngineeringUnitsEnumeration` (the
  full BACnet unit catalogue — Pa, °C, kWh, …)
- **Event / alarm state** — `BACnetEventStateEnumeration`,
  `BACnetEventTypeEnumeration`, `BACnetEventTransitionBitsEnumeration`
- **Operational** — `BACnetReliabilityEnumeration`,
  `BACnetSilencedStateEnumeration`, `BACnetServiceSupportedEnumeration`

Use the namespace `PhpOpcua\Nodeset\BACnet\Enums\*` to autocomplete
through the set.
