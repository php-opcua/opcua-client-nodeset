---
eyebrow: 'Docs · Spec · AML'
lede:    'AutomationML — XML-based engineering-data exchange between CAD/CAE tools and OPC UA. Two parallel registrars (AMLBaseTypes, AMLLibraries) covering the spec''s split publication. NodeIds only at the runtime level.'

see_also:
  - { href: '../specifications.md',  meta: '5 min' }
  - { href: 'https://www.automationml.org/', meta: 'external', label: 'AutomationML project' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/AML', meta: 'external', label: 'UA-Nodeset · AML' }

prev: { label: 'AMB',     href: './amb.md' }
next: { label: 'AutoID',  href: './autoid.md' }
---

# AML — AutomationML

OPC UA companion specification for AutomationML — the XML-based
engineering-data exchange used by CAD/CAE tools (Eplan, Siemens
TIA, Beckhoff TwinCAT). The OPC Foundation publishes AML in two
NodeSet2.xml files; the package ships a registrar for each.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | —     |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 2 (`AMLBaseTypesRegistrar`, `AMLLibrariesRegistrar`) |

NodeIds-only. The spec defines hundreds of nodes (object types,
reference types, view nodes) but no custom DataTypes — so no
codecs and no enums at the package level.

## Loading

<!-- @code-block language="php" label="examples/aml/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\AML\AMLBaseTypesRegistrar;
use PhpOpcua\Nodeset\AML\AMLLibrariesRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new AMLBaseTypesRegistrar())
    ->loadGeneratedTypes(new AMLLibrariesRegistrar())
    ->connect('opc.tcp://aml-gateway.local:4840');
```
<!-- @endcode-block -->

Load both unless your application only cares about base types.
Both registrars are no-ops on the runtime registry — they exist
for the dependency-cascade contract.

## Direct dependencies

None — AML is a root spec.

## What the constants give you

The AML node tree mostly mirrors AutomationML's own
`CAEXFile/InstanceHierarchy/RoleClassLibrary/SystemUnitClassLibrary`
structure. Use `AMLBaseTypesNodeIds::*` and
`AMLLibrariesNodeIds::*` to navigate it without string-typing the
NodeIds.

## Used by

No other spec in the package depends on AML directly. AML is the
"top of the stack" for tools — the values flow **into** AML
servers from engineering tools, and downstream applications
consume the AML structure via browse + read.
