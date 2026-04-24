---
eyebrow: 'Docs · Spec · I4AAS'
lede:    'Industry 4.0 Asset Administration Shell — the German Industry 4.0 initiative''s standard for digital asset twins. 10 enums, 1 structured type, no upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://industrialdigitaltwin.org/', meta: 'external', label: 'IDTA — Asset Administration Shell' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/I4AAS', meta: 'external', label: 'UA-Nodeset · I4AAS' }

prev: { label: 'GPOS',  href: './gpos.md' }
next: { label: 'IA',    href: './ia.md' }
---

# I4AAS — Industry 4.0 Asset Administration Shell

OPC UA companion specification mapping the Industry 4.0 Asset
Administration Shell (AAS) onto OPC UA. AAS itself is the
[IDTA](https://industrialdigitaltwin.org/)'s digital-twin
container for industrial assets — submodels, properties,
references. This spec lets a server expose its assets in AAS
shape over OPC UA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 10    |
| DTOs         | 1     |
| Codecs       | 1     |
| Registrars   | 1 (`I4AASRegistrar`) |

## Loading

<!-- @code-block language="php" label="examples/i4aas/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\I4AAS\I4AASRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new I4AASRegistrar())
    ->connect('opc.tcp://aas-gateway.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — I4AAS is a root spec.

## Notable enums

The generator preserves the spec's `AAS<…>DataType` naming —
every enum is prefixed `AAS` and suffixed `DataType` (not the
PHP-idiomatic `Enum` suffix). All 10 live under
`src/I4AAS/Enums/`:

- `AASAssetKindDataType` — `Type` vs `Instance`
- `AASModelingKindDataType` — `Template` vs `Instance`
- `AASIdentifierTypeDataType`, `AASKeyTypeDataType`,
  `AASKeyElementsDataType` — reference vocabulary
- `AASEntityTypeDataType`, `AASDataTypeIEC61360DataType`,
  `AASCategoryDataType` — type taxonomy
- `AASLevelTypeDataType`, `AASValueTypeDataType` — scalar value
  classification

These match the AAS metamodel one-to-one.
