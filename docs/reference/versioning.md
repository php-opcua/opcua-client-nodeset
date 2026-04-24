---
eyebrow: 'Docs · Reference'
lede:    'Major and minor versions track opcua-client one-for-one. Patches are independent. Regeneration sometimes lags upstream by a release; the runtime contract stays stable.'

see_also:
  - { href: './specifications.md',                  meta: '5 min' }
  - { href: '../regeneration/overview.md',          meta: '5 min' }
  - { href: 'https://github.com/php-opcua/opcua-client-nodeset/blob/master/CHANGELOG.md', meta: 'external', label: 'CHANGELOG' }

prev: { label: 'Registrar API', href: './registrar-api.md' }
next: { label: 'Robotics walkthrough', href: '../recipes/robotics-walkthrough.md' }
---

# Versioning

`opcua-client-nodeset`'s version tracks `opcua-client`. The
relationship is simple, the consequences for downstream
applications are too.

## The rule

For any release of `opcua-client-nodeset`, the major and minor
match the latest `opcua-client` release at the time:

| `opcua-client` | `opcua-client-nodeset` |
| -------------- | ---------------------- |
| `4.0.x`        | `4.0.x`                |
| `4.1.x`        | `4.1.x`                |
| `4.2.x`        | `4.2.x`                |
| `4.3.x`        | `4.3.x`                |

Patch versions are independent — a `4.3.1` of either package does
not require a `4.3.1` of the other. The Composer constraint
`^4.3` accepts any patch.

## Why the lockstep

The contract between the two packages is narrow:

- `GeneratedTypeRegistrar` (interface — defined in `opcua-client`)
- `ExtensionObjectRepository` (class — defined in `opcua-client`,
  consumed by every generated registrar's `registerCodecs()`)
- `ExtensionObjectCodec` (interface — defined in `opcua-client`,
  implemented by every generated codec)
- `BinaryDecoder` / `BinaryEncoder` (classes — defined in
  `opcua-client`, used inside every generated codec)
- `ClientBuilder::loadGeneratedTypes()` (method — defined in
  `opcua-client`, the application's entry point)

A breaking change to any of these breaks every generated file in
this package. The lockstep guarantees: if you upgrade
`opcua-client` to a new major/minor, you also need a new
major/minor of `opcua-client-nodeset` for compatibility.

## What stays the same across versions

The generated **output** is determined by:

- The UA-Nodeset XML source (changes infrequently — OPC Foundation
  publishes minor revisions a few times a year)
- The `opcua-cli` generator (changes occasionally — bug fixes, new
  features)

Most minor releases of this package are **no-op regenerations**:
the upstream contract changed, the generator works the same, the
output is byte-identical. The v4.2.0 release was an example:

> "No regeneration required — all 807 generated files pass
> `composer format:check` unchanged, smoke test of the Robotics
> registrar confirms codec + enum loading works end-to-end against
> v4.2.0."

The v4.3.0 release was similar — bump dependencies, regenerate
defensively, observe no diff.

## When the output does change

A few categories of upstream change produce visible diffs in
`src/`:

| Upstream change                                              | Visible in this package as                                    |
| ------------------------------------------------------------ | ------------------------------------------------------------- |
| OPC Foundation publishes a new spec                          | New `src/<NewSpec>/` directory + new registrar               |
| OPC Foundation revises an existing spec                      | New / changed NodeIds, enums, DTOs, codecs in that spec dir   |
| OPC Foundation deprecates a spec                             | Spec directory removed                                        |
| `opcua-cli` adds a generator capability                       | All specs may show formatting / metadata changes              |
| `opcua-client` renames an `Encoding\*` method                | All codecs change                                             |

The CHANGELOG tags each release with the upstream cause. When the
diff is "no change", the CHANGELOG says so explicitly.

## How to constrain in your application

For an application using one of `4.3.x`:

<!-- @code-block language="text" label="composer.json" -->
```text
{
    "require": {
        "php-opcua/opcua-client": "^4.3",
        "php-opcua/opcua-client-nodeset": "^4.3"
    }
}
```
<!-- @endcode-block -->

The two `^4.3` constraints stay in sync — every patch ships
together. Allowing `^4` on both would technically work but loses
the lockstep guarantee; pin to the same major+minor explicitly.

For applications that need a specific spec revision (because they
depend on the OPC Foundation's version-N of a NodeSet2.xml), see
[Regeneration · Overview](../regeneration/overview.md) for the
workflow of regenerating against an older UA-Nodeset checkout.
The result is a package with custom generation — not
distribution-compatible with the published version.

## What an upgrade looks like

Upgrading from `4.2.x` to `4.3.x` (the most recent transition):

<!-- @steps -->
- **Bump both packages in `composer.json`.**

  `composer require php-opcua/opcua-client:^4.3 php-opcua/opcua-client-nodeset:^4.3`.

- **Run `composer update`.**

  Pulls both new versions. Composer's solver handles the
  transitive constraints.

- **Read the CHANGELOG of `opcua-client`.**

  Any new features in `opcua-client` (new module, new API on
  `OpcUaClientInterface`) are independent of this package; you
  may want to adopt them in your code.

- **Read the CHANGELOG of `opcua-client-nodeset`.**

  Usually short. If it mentions regeneration with a new
  UA-Nodeset SHA, expect potential changes in NodeIds / DTOs /
  enums of the specs you load.

- **Re-run your test suite.**

  Smoke-tests against your target server catch any incompatibility.
<!-- @endsteps -->

In practice, `opcua-client-nodeset` upgrades are uneventful — the
runtime contract is stable, and most patches are dependency bumps
without spec changes.

## Versioning of regenerated forks

If you fork the package to regenerate against a custom UA-Nodeset
or with custom `opcua-cli` flags, the version policy is yours.
Suggested convention: keep `<major>.<minor>` aligned with
`opcua-client` and use the `<patch>` for your own iteration.

For example, an internal fork at `4.3.0-acme.1` clearly signals
"v4.3.0-compatible upstream, ACME's first internal iteration".

## What is *not* in the version

- **OPC Foundation UA-Nodeset commit SHA.** Recorded in the
  CHANGELOG for each regeneration, but not in the package version.
  If the upstream SHA matters to your application, pin it via
  your fork.
- **`opcua-cli` version used at generation time.** Same — in the
  CHANGELOG, not the version.

For complete reproducibility, the CHANGELOG plus the
`composer.lock` of the generator-side environment is the source
of truth.
