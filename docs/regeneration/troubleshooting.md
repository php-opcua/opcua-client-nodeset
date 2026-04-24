---
eyebrow: 'Docs · Regeneration'
lede:    'opcua-cli missing, dependency cleanup leaving orphans, format failures, partial generation. The recurring stumbling blocks and how to recover.'

see_also:
  - { href: './overview.md',                       meta: '5 min' }
  - { href: 'https://github.com/php-opcua/opcua-cli/issues', meta: 'external', label: 'opcua-cli issues' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/issues', meta: 'external', label: 'UA-Nodeset issues' }

prev: { label: 'Regeneration overview', href: './overview.md' }
next: { label: 'Specifications',        href: '../reference/specifications.md' }
---

# Troubleshooting

`generate.php` is small and mostly deterministic, but it depends
on `opcua-cli`, `php-cs-fixer`, a clean Composer install, and a
well-formed UA-Nodeset checkout. When one of those is wrong, the
script fails in a recognisable way. This page catalogues the
common cases.

## `opcua-cli not found`

<!-- @code-block language="text" label="error" -->
```text
ERROR: opcua-cli not found at ../opcua-cli/bin/opcua-cli
Make sure php-opcua/opcua-cli is installed alongside this repository.
```
<!-- @endcode-block -->

The script assumes the `opcua-cli` repository is cloned as a
sibling of `opcua-client-nodeset`. Clone it:

<!-- @code-block language="bash" label="terminal — clone sibling" -->
```bash
cd ..
git clone https://github.com/php-opcua/opcua-cli.git
cd opcua-cli
composer install
```
<!-- @endcode-block -->

Or edit the `$cli` path at the top of `generate.php` to point at
wherever your `opcua-cli` lives. The script's relative-path
default is a convention, not a hard requirement.

## `git clone failed` on UA-Nodeset

If the UA-Nodeset clone step fails (network, SSH config,
github.com unreachable):

<!-- @code-block language="text" label="error" -->
```text
ERROR: git clone failed
```
<!-- @endcode-block -->

The script does not retry. Two options:

1. **Clone by hand and point the script at it:**

   ```bash
   git clone https://github.com/OPCFoundation/UA-Nodeset.git /tmp/ua-nodeset
   php generate.php /tmp/ua-nodeset
   ```

2. **Use an existing UA-Nodeset clone:**

   If `./UA-Nodeset/` already exists from a previous run, the
   script reuses it. Verify it is up-to-date:

   ```bash
   cd UA-Nodeset
   git pull --ff-only
   cd ..
   php generate.php
   ```

## Errors during generation

<!-- @code-block language="text" label="terminal — per-spec error" -->
```text
Generating: SomeSpec (SomeSpec.NodeSet2.xml)
  ERROR: Failed to generate SomeSpec
```
<!-- @endcode-block -->

`opcua-cli generate:nodeset` failed on that particular XML. The
script suppresses the CLI's stderr (`2>/dev/null`) — to see what
went wrong, rerun the command by hand:

<!-- @code-block language="bash" label="terminal — debug" -->
```bash
../opcua-cli/bin/opcua-cli generate:nodeset \
    UA-Nodeset/SomeSpec/SomeSpec.NodeSet2.xml \
    --output=src/SomeSpec \
    --namespace="PhpOpcua\\Nodeset\\SomeSpec"
```
<!-- @endcode-block -->

The error category determines the fix:

| Error                                            | Cause                                                   | Fix                                             |
| ------------------------------------------------ | ------------------------------------------------------- | ----------------------------------------------- |
| `Unable to parse XML`                            | Malformed source XML                                    | Report to upstream OPC Foundation              |
| `Unknown DataType: ns=N;i=M`                     | XML references a DataType from another spec not yet loaded | Run after generating the dependency           |
| `Class name conflict`                            | Two structures in the same namespace have identical names | Generator bug — file with `opcua-cli`         |
| `Cannot create directory`                        | Filesystem permission                                    | `chmod` `src/` and rerun                       |

Errors in one spec do not block the rest — the script logs the
error and continues. Errors do not block the post-processing
steps either.

## Orphan dependency references

The script's post-processing pass scans every generated
`<Spec>Registrar.php` for `dependencyRegistrars()` entries that
point at non-existent registrars, and removes them.

If the cleanup is incorrect — it removes a reference you wanted
or fails to remove one you didn't — read the regex in
`generate.php`:

<!-- @code-block language="text" label="cleanup regex" -->
```text
/^\s*new \\PhpOpcua\\Nodeset\\([^\\]+)\\[^(]+Registrar\(\),?\n/m
```
<!-- @endcode-block -->

The regex assumes:

- One `new` per line
- A leading backslash on the FQCN
- The form `Registrar(),` at the end

Generated registrars match this. Hand-edited registrars may not —
re-run the generator instead of editing by hand.

## Format failures

<!-- @code-block language="text" label="format failure" -->
```text
WARNING: Formatting failed (exit code 1). Is php-cs-fixer installed?
```
<!-- @endcode-block -->

`php-cs-fixer` is the package's dev dependency. The script invokes
`vendor/bin/php-cs-fixer`. If that path doesn't exist:

<!-- @code-block language="bash" label="terminal — install" -->
```bash
composer install --dev
```
<!-- @endcode-block -->

If `php-cs-fixer` exists but exits non-zero, it found code it
couldn't format — usually a PHP syntax error in the generated
output. Look for the first error in `php-cs-fixer`'s stderr:

<!-- @code-block language="bash" label="terminal — debug format" -->
```bash
vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php --allow-risky=yes --verbose
```
<!-- @endcode-block -->

A syntax error in generated code is a generator bug — file with
`opcua-cli`, regenerate after the fix.

## Partial output

The script runs sequentially. A failure mid-run leaves `src/` in
a partial state: some specs generated, others not. **Do not
commit partial output.** Always rerun until the summary line shows
`Errors: 0` (or until the remaining errors are documented and
acceptable).

To force a from-scratch rerun, simply rerun the script —
`generate.php` wipes `src/` at the start. No manual cleanup
required.

## Enum-only specs still ship a registrar

In older drafts of the ROADMAP the policy was that specs with
only enums and no structured data types would not produce a
registrar. The current behaviour at v4.3.0 is different: every
spec generates a registrar, even when its registrar is
effectively a no-op for codecs.

The reason: many enum-only specs declare enum **mappings** via
`getEnumMappings()`, which require a registrar to surface to the
client. Stripping the registrar would strip the mapping table,
which would strip the auto-cast.

If you fork the package and want to drop registrars from
enum-only specs as the ROADMAP suggests, expect to also drop the
auto-cast for those specs' enums. Trade-off.

## Naming inconsistencies

The generator names registrars after the spec's URI pattern, with
sanitisation. Some specs produce non-PascalCase names:

| Directory      | Registrar class       |
| -------------- | --------------------- |
| `DI/`          | `DiRegistrar`         |
| `ISA95/`       | `OpcISA95Registrar`   |
| `MDIS/`        | `OpcMDISRegistrar`    |
| `PROFINET/`    | `PnRegistrar`         |
| `PNEM/`        | `PnEmRegistrar`       |
| `PADIM/`       | `IRDIRegistrar` (also) |
| `CNC/`         | `CNCNodeSetRegistrar` |
| `WoT/`         | `WotConRegistrar`     |

The exact derivation comes from the NodeSet2.xml's prefix
attribute as parsed by `opcua-cli`; do not assume any single
rule. **Do not rename them** — the next regeneration would
overwrite the rename. PHP resolves class names case-insensitively
at runtime, so legacy code that referenced (e.g.) `DIRegistrar`
keeps working without an alias; introduce one only if a
PSR-4-strict autoloader is enforced in your environment.

## Where to file issues

| Class of issue                              | Repository                                              |
| ------------------------------------------- | ------------------------------------------------------- |
| Generator behaviour, output shape           | [`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli/issues) |
| Generated runtime API, `GeneratedTypeRegistrar` contract | [`php-opcua/opcua-client`](https://github.com/php-opcua/opcua-client/issues) |
| The shipped pre-generated output            | [`php-opcua/opcua-client-nodeset`](https://github.com/php-opcua/opcua-client-nodeset/issues) |
| Source NodeSet2.xml errors                  | [OPCFoundation/UA-Nodeset](https://github.com/OPCFoundation/UA-Nodeset/issues) |

This repository's issue tracker is for distribution and
regeneration. Generator bugs go upstream.
