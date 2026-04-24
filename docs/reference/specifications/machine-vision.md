---
eyebrow: 'Docs · Spec · MachineVision'
lede:    'Machine Vision — industrial cameras, image-processing systems, vision-guided inspection. Two enums, 14 typed structures covering recipes, results, calibration. No upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/MachineVision', meta: 'external', label: 'UA-Nodeset · MachineVision' }

prev: { label: 'MachineTool',  href: './machine-tool.md' }
next: { label: 'Machinery',    href: './machinery.md' }
---

# MachineVision

OPC UA companion specification for machine-vision systems —
industrial cameras, image-processing engines, vision-guided
inspection. Standardised by the VDMA.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 2     |
| DTOs         | 14    |
| Codecs       | 14    |
| Registrars   | 1 (`MachineVisionRegistrar`) |

DTO-rich — the spec defines structured records for recipes, runs,
calibration, results, image references.

## Loading

<!-- @code-block language="php" label="examples/machine-vision/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\MachineVision\MachineVisionRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineVisionRegistrar())
    ->connect('opc.tcp://vision-station.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — MachineVision is a root spec.

## Notable types

The 14 DTOs cover the vision-system lifecycle:

- **Recipe / configuration** — recipe definitions, calibration
  records, parameter sets
- **Run / result** — typed inspection results, defect records,
  image references
- **Metadata** — environment data, lighting configuration

For a typical inspection-result read, expect a strongly-typed DTO
that aggregates pass/fail status, measurement values, and
optional image references.

## Notable enums

- `RecipeAuthorisationEnum` — recipe-access control
- `CalibrationStateEnum` — calibration validity
