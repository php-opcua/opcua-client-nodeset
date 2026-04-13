# Changelog

## [v4.1.0] - 2026-04-13

### Changed

- Bumped minimum `php-opcua/opcua-client` dependency from `^4.0` to `^4.1` and `php-opcua/opcua-cli` dev dependency from `^4.0` to `^4.1` to align with the ECC security policies (`ECC_nistP256`, `ECC_nistP384`, `ECC_brainpoolP256r1`, `ECC_brainpoolP384r1`) introduced in `opcua-client` v4.1.0. No code changes or regeneration required — this package contains only pre-generated types that are unaffected by security layer changes.
- Updated ecosystem table in README to reference `uanetstandard-test-suite` instead of `opcua-test-suite`.

## [v4.0.0] - 2026-03-29

### Added

- **Pre-generated PHP types for 51 OPC UA companion specifications.** 807 PHP files generated from the [OPC Foundation UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset) repository, covering industrial protocols from Robotics to BACnet. Zero configuration — just `composer require` and use.
- **NodeId constants.** One class per specification with all node IDs as string constants, usable directly with `read()`, `write()`, `browse()` on the OPC UA client. Example: `RoboticsNodeIds::OperationalMode`.
- **PHP BackedEnum generation.** 309 enum classes across all specifications. When loaded via the registrar, `read()` returns typed enum instances instead of raw integers. Example: `OperationalModeEnumeration::MANUAL_REDUCED_SPEED`.
- **Readonly DTOs.** 193 strictly typed `readonly` classes for structured OPC UA data types. Enum fields are typed with the corresponding generated enum class. Array fields and optional (nullable) fields are fully supported.
- **Binary codecs.** 193 `ExtensionObjectCodec` implementations for binary encode/decode of structured data types. Automatically registered via the registrar system.
- **Registrar system with automatic dependency resolution.** Each specification provides a `GeneratedTypeRegistrar` with `registerCodecs()`, `getEnumMappings()`, and `dependencyRegistrars()`. Loading one specification automatically loads its dependencies recursively — e.g. loading `MachineToolRegistrar` automatically loads Machinery, DI, and IA. Use `new MachineToolRegistrar(only: true)` to skip dependency loading.
- **PHP generation script.** `generate.php` handles the full pipeline: clones UA-Nodeset if not present, iterates all specifications, calls `opcua-cli generate:nodeset` for each XML, and runs integrated dependency cleanup to remove references to non-generated registrars.

### Specifications included

AMB, ADI, AML, AutoID, BACnet, CAS, CNC, CommercialKitchenEquipment, CranesHoists, CSPPlusForMachine, CuttingTool, DEXPI, DI, ECM, FDI, FDT, GDS, GPOS, I4AAS, IA, IOLink, IREDES, ISA95, LADS, LaserSystems, Machinery, MachineTool, MachineVision, MDIS, MetalForming, MTConnect, Onboarding, PackML, PADIM, PAEFS, PNEM, POWERLINK, PROFINET, Pumps, Robotics, RSL, Safety, Scales, Scheduler, Sercos, Shotblasting, TMC, Weihenstephan, Woodworking, WoT.

[v4.0.0]: https://github.com/php-opcua/opcua-client-nodeset/releases/tag/v4.0.0
