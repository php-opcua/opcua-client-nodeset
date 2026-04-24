---
eyebrow: 'Docs · Spec · GPOS'
lede:    'Global Positioning — geographic and geodetic coordinates over OPC UA. Four structured types (3-D point, 2-D point, ECEF, geodetic), no enums. Depends on RSL.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: './rsl.md',             meta: '2 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/GPOS', meta: 'external', label: 'UA-Nodeset · GPOS' }

prev: { label: 'GDS',    href: './gds.md' }
next: { label: 'I4AAS',  href: './i4aas.md' }
---

# GPOS — Global Positioning

OPC UA companion specification for geographic and geodetic
positioning data — anywhere a server needs to report a point on
or near Earth's surface. Common in mobile equipment (cranes,
agricultural machines), survey instruments, geographic-asset
inventories.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | 4     |
| Codecs       | 4     |
| Registrars   | 1 (`GPOSRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/gpos/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\GPOS\GPOSRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new GPOSRegistrar())   // pulls RSL
    ->connect('opc.tcp://gps-asset.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

- [RSL](./rsl.md) — Result Standard Library.

## Notable types

The four DTOs encode coordinate systems:

- `_3DGeographicCoordinateDataType` — latitude, longitude, height
  in a geographic CRS
- `_2DGeographicCoordinateDataType` — same minus height
- `EcefCoordinateDataType` — Earth-Centered, Earth-Fixed
  Cartesian
- `GeodeticCoordinateDataType` — geodetic latitude / longitude

The leading-underscore class names (`_3D...`, `_2D...`) reflect
the spec's own naming — PHP class names cannot start with a
digit, the underscore is the workaround.
