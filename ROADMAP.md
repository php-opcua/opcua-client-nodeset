# Roadmap

## v4.0.0 - 2026-03-29

### Features
- [x] Pre-generated PHP types for 51 OPC UA companion specifications from [UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset)
- [x] Typed NodeId constants — string constants for every node in each specification
- [x] PHP BackedEnum generation — type-safe enums for all OPC UA enumeration types (309 enums across all specs)
- [x] Readonly DTOs — strictly typed readonly classes for all structured data types (193 types)
- [x] Binary codecs — `ExtensionObjectCodec` implementations for binary encode/decode (193 codecs)
- [x] Registrar system — `GeneratedTypeRegistrar` with automatic dependency resolution, optional `only: true` mode
- [x] PHP generation script — `generate.php` with integrated dependency cleanup, clone-on-demand of UA-Nodeset repo

---

## Won't Do (by design)

### Tests in This Repository
This is a generated code library — the code is output of `opcua-cli generate:nodeset`. Testing the generator and its output belongs in [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli) and [`php-opcua/opcua-client`](https://github.com/php-opcua/opcua-client), not here. Adding tests to generated code would create maintenance burden with no additional confidence.

### Manual Edits to Generated Files
All files under `src/` are marked `@generated` and will be overwritten on the next generation run. Any manual fix should be applied to the generator in `opcua-cli`, not to the output here.

### Registrars for Enum-Only Specifications
Specifications that contain only enums and no structured data types (e.g. ADI, AML, CNC, FDT) intentionally have no registrar. A registrar with empty codec/enum mappings would add boilerplate without value — enums are usable directly without registration.

---

Have a suggestion? Open an [issue](https://github.com/php-opcua/opcua-client-nodeset/issues) or check the [contributing guide](CONTRIBUTING.md).
