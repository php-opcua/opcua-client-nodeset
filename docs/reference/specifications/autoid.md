---
eyebrow: 'Docs · Spec · AutoID'
lede:    'AutoID — RFID readers, barcode scanners, optical readers. Codec-heavy: 19 structured types for scan results, tag programming, antenna control.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './di.md',              meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/AutoID', meta: 'external', label: 'UA-Nodeset · AutoID' }

prev: { label: 'AML',     href: './aml.md' }
next: { label: 'BACnet',  href: './bacnet.md' }
---

# AutoID — Automatic Identification

OPC UA companion specification for automatic-identification
devices — RFID readers, barcode scanners, 2D code readers,
optical character readers. Defines the on-the-wire shape for tag
data, scan results, antenna configuration.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 6     |
| DTOs         | 19    |
| Codecs       | 19    |
| Registrars   | 1 (`AutoIDRegistrar`) |

DTO-heavy — anything an AutoID device returns from a scan is a
typed structure.

## Loading

<!-- @code-block language="php" label="examples/autoid/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\AutoID\AutoIDRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new AutoIDRegistrar())   // pulls DI
    ->connect('opc.tcp://rfid-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [DI](./di.md) — AutoID devices extend `DeviceType`.

## Notable types

The 19 DTOs cluster around:

- **Scan results** — `ScanData`, `ScanResult`, `RfidScanResult`,
  `OcrScanResult`, `OpticalScanResult`. Each carries a strongly-
  typed payload variant for the matching reader class.
- **Configuration** — `ScanSettings`, `AntennaNameIdPair`,
  `RfidAccessRequest`, `RfidPasswordTypes`.
- **Status** — `AutoIDOperationStatusEnumeration`,
  `RfidTransponderStatusEnumeration`.

For a scan event that returns a tag:

<!-- @code-block language="php" label="examples/autoid/read-scan.php" -->
```php
use PhpOpcua\Nodeset\AutoID\Types\ScanData;

$dv = $client->read('ns=N;s=Reader1.LastScanData');
$scan = $dv->getValue();

if ($scan instanceof ScanData) {
    foreach ($scan->ScanData as $tag) {
        // typed tag record
    }
}
```
<!-- @endcode-block -->

## Notable enums

- `AutoIDOperationStatusEnumeration` — per-operation result
- `RfidTransponderStatusEnumeration` — tag-level status
- `OcrFontEnumeration`, `OcrTraceabilityCodeEnumeration` — OCR
  variants
- `OpcUaDataTypeEnumeration` — payload type discriminator
