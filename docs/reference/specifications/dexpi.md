---
eyebrow: 'Docs · Spec · DEXPI'
lede:    'DEXPI — Data Exchange in the Process Industry. Plant-design metadata for chemical, petrochemical, pharma. 29 enums covering piping, instrumentation, equipment classifications. No DTOs, no codecs.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://dexpi.org/',   meta: 'external', label: 'DEXPI initiative' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/DEXPI', meta: 'external', label: 'UA-Nodeset · DEXPI' }

prev: { label: 'CuttingTool', href: './cutting-tool.md' }
next: { label: 'DI',          href: './di.md' }
---

# DEXPI — Process Industry Data Exchange

OPC UA companion specification for DEXPI — the chemical and
petrochemical industries' standard for plant-design data exchange.
The OPC UA side exposes P&ID (piping and instrumentation
diagrams) metadata, equipment classifications, and process-stream
identifiers.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 29    |
| DTOs         | —     |
| Codecs       | —     |
| Registrars   | 1 (`DEXPIRegistrar`) |

Enum-rich, codec-free. The 29 enumerations cover plant-design
taxonomy.

## Loading

<!-- @code-block language="php" label="examples/dexpi/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\DEXPI\DEXPIRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new DEXPIRegistrar())
    ->connect('opc.tcp://plant-design.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — DEXPI is a root spec.

## Notable enums

The 29 enums classify plant equipment and instrumentation:

- **Equipment classes** — `PumpTypeEnum`, `HeatExchangerTypeEnum`,
  `VesselTypeEnum`, `ColumnTypeEnum`
- **Piping** — `PipeMaterialEnum`, `InsulationTypeEnum`,
  `ConnectionEnum`
- **Instrumentation** — `InstrumentSignalEnum`,
  `MeasuringPrincipleEnum`, `ControllerActionEnum`

Use them when navigating P&ID metadata exposed through the OPC UA
server. The package's contribution is type-safe naming; the OPC
UA server is the source of truth for the actual plant graph.
