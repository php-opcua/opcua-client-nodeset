---
eyebrow: 'Docs · Reference'
lede:    'The 51 companion specifications shipped at v4.3.0 — counts, dependencies, registrar class names. Click through to a spec for the details and the load snippet.'

see_also:
  - { href: './registrar-api.md',                       meta: '4 min' }
  - { href: '../usage/dependency-resolution.md',        meta: '5 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset', meta: 'external', label: 'OPC Foundation UA-Nodeset' }

prev: { label: 'Troubleshooting',  href: '../regeneration/troubleshooting.md' }
next: { label: 'Registrar API',    href: './registrar-api.md' }
---

# Specifications

Fifty-one companion specifications. The table below shows for
each: namespace, enum count, DTO count, codec count, registrar
class names, and direct (non-transitive) dependencies.

| Spec | Enums | DTOs | Codecs | Registrar(s) | Depends on |
| ---- | ----- | ---- | ------ | ------------ | ---------- |
| [ADI](./specifications/adi.md) | 3 | — | — | `AdiRegistrar` | DI |
| [AMB](./specifications/amb.md) | 1 | 2 | 2 | `AMBRegistrar` | — |
| [AML](./specifications/aml.md) | — | — | — | `AMLBaseTypesRegistrar`, `AMLLibrariesRegistrar` | — |
| [AutoID](./specifications/autoid.md) | 6 | 19 | 19 | `AutoIDRegistrar` | DI |
| [BACnet](./specifications/bacnet.md) | 36 | 44 | 44 | `BACnetRegistrar` | — |
| [CAS](./specifications/cas.md) | 23 | 1 | 1 | `CASRegistrar` | DI, IA, Machinery |
| [CNC](./specifications/cnc.md) | 6 | 1 | 1 | `CNCNodeSetRegistrar` | — |
| [CommercialKitchenEquipment](./specifications/commercial-kitchen-equipment.md) | 24 | — | — | `CommercialKitchenEquipmentRegistrar` | DI |
| [CranesHoists](./specifications/cranes-hoists.md) | 4 | — | — | `CranesHoistsRegistrar` | DI, Machinery, Robotics |
| [CSPPlusForMachine](./specifications/csp-plus-for-machine.md) | — | — | — | `CSPPlusForMachineRegistrar` | DI |
| [CuttingTool](./specifications/cutting-tool.md) | — | 1 | 1 | `CuttingToolRegistrar` | DI, IA, Machinery, MachineTool |
| [DEXPI](./specifications/dexpi.md) | 29 | — | — | `DEXPIRegistrar` | — |
| [DI](./specifications/di.md) | 8 | 11 | 11 | `DiRegistrar`, `DiPackageMetadataRegistrar` | — |
| [ECM](./specifications/ecm.md) | 1 | 5 | 5 | `ECMRegistrar` | DI, IA |
| [FDI](./specifications/fdi.md) | 3 | 6 | 6 | `Fdi5Registrar`, `Fdi7Registrar` | DI |
| [FDT](./specifications/fdt.md) | 11 | 3 | 3 | `FDTNodeSetRegistrar` | DI |
| [GDS](./specifications/gds.md) | — | 1 | 1 | `GdsRegistrar` | — |
| [GPOS](./specifications/gpos.md) | — | 4 | 4 | `GPOSRegistrar` | RSL |
| [I4AAS](./specifications/i4aas.md) | 10 | 1 | 1 | `I4AASRegistrar` | — |
| [IA](./specifications/ia.md) | 4 | 1 | 1 | `IARegistrar` | DI |
| [IOLink](./specifications/iolink.md) | 1 | — | — | `IOLinkRegistrar`, `IOLinkIODDRegistrar` | DI |
| [IREDES](./specifications/iredes.md) | 5 | 2 | 2 | `IREDESRegistrar` | — |
| [ISA95](./specifications/isa95.md) | 1 | 4 | 4 | `OpcISA95Registrar` | — |
| [LADS](./specifications/lads.md) | 1 | 2 | 2 | `LADSRegistrar` | AMB, DI, Machinery |
| [LaserSystems](./specifications/laser-systems.md) | — | — | — | `LaserSystemsRegistrar` | DI, IA, Machinery, MachineTool |
| [Machinery](./specifications/machinery.md) | — | — | — | `MachineryRegistrar` | DI, IA |
| [MachineTool](./specifications/machine-tool.md) | 10 | — | — | `MachineToolRegistrar` | DI, IA, Machinery |
| [MachineVision](./specifications/machine-vision.md) | 2 | 14 | 14 | `MachineVisionRegistrar` | — |
| [MDIS](./specifications/mdis.md) | 12 | 1 | 1 | `OpcMDISRegistrar` | — |
| [MetalForming](./specifications/metal-forming.md) | — | 2 | 2 | `MetalFormingRegistrar` | DI, IA, Machinery, MachineTool, PADIM |
| [MTConnect](./specifications/mtconnect.md) | 25 | 3 | 3 | `MTConnectRegistrar` | — |
| [Onboarding](./specifications/onboarding.md) | — | 6 | 6 | `OnboardingRegistrar` | GDS |
| [PackML](./specifications/packml.md) | 1 | 6 | 6 | `PackMLRegistrar` | — |
| [PADIM](./specifications/padim.md) | 3 | 1 | 1 | `PADIMRegistrar`, `IRDIRegistrar` | DI |
| [PAEFS](./specifications/paefs.md) | 4 | — | — | `PAEFSRegistrar` | DI, Machinery, PADIM |
| [PNEM](./specifications/pnem.md) | 4 | 5 | 5 | `PnEmRegistrar` | DI |
| [POWERLINK](./specifications/powerlink.md) | 4 | 3 | 3 | `POWERLINKRegistrar` | DI |
| [Powertrain](./specifications/powertrain.md) | — | — | — | `PowertrainRegistrar` | DI, Machinery |
| [PROFINET](./specifications/profinet.md) | 18 | 2 | 2 | `PnRegistrar` | — |
| [Pumps](./specifications/pumps.md) | 18 | 1 | 1 | `PumpsRegistrar` | DI, Machinery |
| [Robotics](./specifications/robotics.md) | 4 | — | — | `RoboticsRegistrar` | DI, IA |
| [RSL](./specifications/rsl.md) | — | — | — | `RSLRegistrar` | — |
| [Safety](./specifications/safety.md) | 2 | 3 | 3 | `SafetyRegistrar` | — |
| [Scales](./specifications/scales.md) | 6 | 5 | 5 | `ScalesRegistrar` | DI, IA, Machinery, PackML |
| [Scheduler](./specifications/scheduler.md) | 3 | 11 | 11 | `SchedulerRegistrar` | — |
| [Sercos](./specifications/sercos.md) | — | — | — | `SercosRegistrar` | DI |
| [Shotblasting](./specifications/shotblasting.md) | — | — | — | `ShotblastingRegistrar` | DI, Machinery |
| [TMC](./specifications/tmc.md) | 11 | 20 | 20 | `TMCRegistrar` | DI, PackML |
| [Weihenstephan](./specifications/weihenstephan.md) | 2 | — | — | `WeihenstephanRegistrar` | DI, Machinery, PackML |
| [Woodworking](./specifications/woodworking.md) | 3 | 2 | 2 | `WoodworkingRegistrar` | DI, Machinery |
| [WoT](./specifications/wot.md) | — | — | — | `WotConRegistrar` | — |

**Totals at v4.3.0**: 309 enums, 193 DTOs, 193 codecs, 56 registrars (some specs ship two), 51 specs.

## Reading the table

- **Enums / DTOs / Codecs** — counts of files in each category for
  that spec. `—` means none.
- **Registrar(s)** — the class name(s) under
  `PhpOpcua\Nodeset\<Spec>\`. The directory name is always the
  spec name in PascalCase; the registrar class may differ. See
  [What gets generated — naming inconsistencies](../getting-started/what-gets-generated.md#section-naming-inconsistencies-you-may-see).
- **Depends on** — direct (non-transitive) dependencies declared
  by the registrar's `dependencyRegistrars()`. Loading the spec
  via `loadGeneratedTypes()` pulls these in (and recursively
  their own dependencies) unless `only: true` is passed. See
  [Dependency resolution](../usage/dependency-resolution.md).

## The dependency root specs

A handful of specs sit at the root of the dependency graph — they
do not depend on anything else and are pulled in by many
downstream specs.

| Root spec | Pulled in by                                                                                                                                                            |
| --------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `DI`      | Most of the operational specs: ADI, AutoID, CAS, CommercialKitchenEquipment, CranesHoists, CSPPlusForMachine, CuttingTool, ECM, FDI, FDT, IA, IOLink, LADS, LaserSystems, Machinery, MachineTool, MetalForming, PAEFS, PADIM, Pumps, PNEM, POWERLINK, Powertrain, Robotics, Scales, Sercos, Shotblasting, TMC, Weihenstephan, Woodworking. (`Onboarding` depends on `GDS`, but `GDS` has no upstream dependencies, so the `Onboarding → GDS` chain does **not** pull DI in.) |
| `IA`      | Operational specs that extend it: CAS, CuttingTool, ECM, LaserSystems, Machinery, MachineTool, MetalForming, Robotics, Scales       |
| `Machinery` | CAS, CranesHoists, CuttingTool, LADS, LaserSystems, MachineTool, MetalForming, PAEFS, Powertrain, Pumps, Scales, Shotblasting, Weihenstephan, Woodworking |
| `MachineTool` | CuttingTool, LaserSystems, MetalForming                                                                                                                          |
| `PackML`  | Scales, TMC, Weihenstephan                                                                                                                                              |
| `PADIM`   | MetalForming, PAEFS                                                                                                                                                     |

If your application loads several "downstream" specs, the cascade
brings the roots in transitively. You almost never load `DI`
explicitly — but it is in the loaded set for nearly every real
deployment.

## Picking specs for your deployment

Start from what the **server** publishes:

<!-- @code-block language="php" label="examples/discover-namespaces.php" -->
```php
$client = ClientBuilder::create()->connect('opc.tcp://your-server:4840');

foreach ($client->read('i=2255')->getValue() as $idx => $uri) {
    echo "ns=$idx → $uri\n";
}
```
<!-- @endcode-block -->

Match the URIs the server lists against the OPC Foundation's
companion-spec URIs (the [UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset)
directory naming is a strong hint — `Robotics/` → `http://opcfoundation.org/UA/Robotics/`).
Load the registrars for those specs only.

## The non-standard registrar names

For convenience, the registrar class names that **do not** follow
`<Spec>Registrar` in PascalCase:

| Spec           | Class name                |
| -------------- | ------------------------- |
| `DI`           | `DiRegistrar` (also `DiPackageMetadataRegistrar`) |
| `ISA95`        | `OpcISA95Registrar`       |
| `MDIS`         | `OpcMDISRegistrar`        |
| `PROFINET`     | `PnRegistrar`             |
| `PNEM`         | `PnEmRegistrar`           |
| `PADIM`        | `PADIMRegistrar` + `IRDIRegistrar` |
| `CNC`          | `CNCNodeSetRegistrar`     |
| `WoT`          | `WotConRegistrar`         |

Bookmark this table; IDE autocomplete handles the rest.
