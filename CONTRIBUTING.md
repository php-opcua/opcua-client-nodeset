# Contributing to OPC UA NodeSet Types

## Welcome!

Thank you for considering contributing to this project! Every contribution matters, whether it's a bug report, a feature suggestion, a documentation fix, or a code change. This project is open to everyone, you're welcome here.

If you have any questions or need help getting started, don't hesitate to open an issue. We're happy to help.

## Important: This is a Generated Code Library

All PHP files under `src/` are **auto-generated** by the `generate:nodeset` command in [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli). **Do not edit them manually** — your changes will be overwritten on the next generation run.

If you find a bug in the generated code, the fix belongs in `opcua-cli`, not here. Open an issue there instead.

Contributions to this repository should focus on:

- The generation script (`generate.php`)
- Documentation (`README.md`, `ROADMAP.md`, etc.)
- Package configuration (`composer.json`)

## Development Setup

### Requirements

- PHP >= 8.2
- Composer
- Git
- [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli) installed alongside this repository

### Installation

```bash
git clone https://github.com/php-opcua/opcua-client-nodeset.git
cd opcua-client-nodeset
composer install
```

### Regenerating Types

```bash
# Clone UA-Nodeset and generate all types
php generate.php

# Or use an existing local copy
php generate.php /path/to/UA-Nodeset
```

## Project Structure

```
├── generate.php               # Generation script (includes dependency cleanup)
├── composer.json               # Package configuration
├── src/                        # Generated code (DO NOT EDIT)
│   ├── <Spec>/                 # One directory per companion specification
│   │   ├── <Spec>NodeIds.php   # NodeId string constants
│   │   ├── <Spec>Registrar.php # Type registrar with dependency resolution
│   │   ├── Enums/              # PHP BackedEnum classes
│   │   ├── Types/              # Readonly DTO classes
│   │   └── Codecs/             # Binary ExtensionObjectCodec classes
│   └── ...                     # 51 specifications total
```

## Guidelines

### Code Style

The project follows a Laravel-style coding standard (PSR-12 + opinionated rules). Key rules for non-generated files:

- `declare(strict_types=1)` required
- Single quotes for strings
- Trailing commas in multiline arrays, arguments, and parameters
- Type declarations for parameters, return types, and properties

### Documentation & Comments

- Update `CHANGELOG.md` with your changes
- Update `README.md` if adding or changing features
- Update `ROADMAP.md` if applicable

### Commits

- Use descriptive commit messages
- Prefix with `[ADD]`, `[UPD]`, `[PATCH]`, `[REF]`, `[DOC]` as appropriate

## Pull Request Process

1. Fork the repository and create a feature branch
2. Make your changes (remember: don't edit `src/` manually)
3. If modifying `generate.php`, verify by running a full regeneration
4. Update documentation and changelog
5. Submit a pull request
6. Wait for review — a maintainer will review your PR, may request changes or ask questions
7. Once approved, your PR will be merged

## Reporting Issues

- **Bug in generated code?** Open an issue on [`opcua-cli`](https://github.com/php-opcua/opcua-cli/issues) — that's where the generator lives.
- **Bug in `generate.php`, docs, or packaging?** Open an issue [here](https://github.com/php-opcua/opcua-client-nodeset/issues).
- **Missing companion specification?** Open an issue here — we'll add it to the next generation run if the XML is available in [UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset).
