---
eyebrow: 'Docs · Regeneration'
lede:    'generate.php is the regeneration script. It clones UA-Nodeset, runs opcua-cli on every NodeSet2.xml, validates dependencies, and formats. Run it after upstream spec updates; not part of normal application use.'

see_also:
  - { href: './troubleshooting.md',                meta: '5 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset', meta: 'external', label: 'OPC Foundation UA-Nodeset' }
  - { href: 'https://github.com/php-opcua/opcua-cli', meta: 'external', label: 'opcua-cli' }

prev: { label: 'Reading structured data', href: '../usage/reading-structured-data.md' }
next: { label: 'Troubleshooting',         href: './troubleshooting.md' }
---

# Regeneration overview

`generate.php` at the repository root is the regeneration script.
End users of the package **do not run it** — the generated `src/`
ships in the Composer install. Run it when:

- The OPC Foundation publishes a new revision of UA-Nodeset
- A bug in the generator is fixed and you need fresh output
- You are forking the package to ship custom companion specs

## Prerequisites

The script depends on a sibling clone of
[`php-opcua/opcua-cli`](https://github.com/php-opcua/opcua-cli) at
`../opcua-cli/` (relative to this package). If `opcua-cli` is
installed somewhere else, edit the `$cli` path at the top of
`generate.php`.

<!-- @code-block language="bash" label="terminal — layout" -->
```bash
workspace/
├── opcua-cli/                   # sibling clone
└── opcua-client-nodeset/        # this package
    └── generate.php
```
<!-- @endcode-block -->

`php-cs-fixer` must be installed as a dev dependency of this
package (`composer install` brings it in). The script invokes it
at the end to format the generated output.

## Running

<!-- @code-block language="bash" label="terminal — regenerate" -->
```bash
cd opcua-client-nodeset
php generate.php
```
<!-- @endcode-block -->

The script:

<!-- @steps -->
- **Clones UA-Nodeset if missing.**

  Default location: `./UA-Nodeset/`. Pass a path argument to point
  at an existing clone:

  ```bash
  php generate.php /path/to/my/UA-Nodeset
  ```

- **Copies the OPC Foundation LICENSE** from the clone into
  `LICENSE.OPC-Foundation`.

  Required by the OPC Foundation's license terms — the generated
  output incorporates content from their files, so the license
  must travel with it.

- **Wipes `src/` and recreates it empty.**

  Generation is from-scratch every time. No incremental updates.

- **Walks every subdirectory of `UA-Nodeset/`.**

  Skips `\.github`, `AnsiC`, `DotNet`, `OpenApi`, `XML`, `Schema`
  — these are not companion specs. Everything else is a candidate.

- **Looks for `*NodeSet2.xml` or `*NodeSet.xml`** in each
  candidate directory.

  Directories without one are skipped silently. Directories with
  one (or more) trigger generation.

- **Invokes `opcua-cli generate:nodeset`** per XML found.

  The CLI command writes the PHP output into
  `src/<DirNameSanitised>/` with namespace
  `PhpOpcua\Nodeset\<DirNameSanitised>`. The sanitised name strips
  `-` and `.` from the directory name (so `IOLink-IODD` becomes
  `IOLinkIODD`).

- **Validates dependency references.**

  Some specs declare dependencies on other specs whose generation
  fails or whose directory is skipped. The post-processing pass
  scans every `<Spec>Registrar.php`'s `dependencyRegistrars()`
  method and removes references to non-existent registrars.

- **Runs `php-cs-fixer`** over the generated output.

  Applies the package's coding standards. Mostly cosmetic, but
  needed for the repo to pass its own format check.
<!-- @endsteps -->

## Output

A successful run prints a summary:

<!-- @code-block language="text" label="terminal — summary" -->
```text
=== Done ===
Generated: 51 NodeSet(s)
Errors:    0
Skipped:   N (no NodeSet2.xml found)
```

`N` varies with the UA-Nodeset checkout — directories without a
`NodeSet2.xml` are skipped silently.
<!-- @endcode-block -->

`Generated` is the count of XML files turned into PHP. `Skipped`
is candidate directories that had no NodeSet2.xml. `Errors` is the
count of `opcua-cli` failures.

A few errors are expected — some specs in UA-Nodeset are
genuinely malformed, drafts, or have generator bugs upstream. Read
the per-spec error output and decide whether to escalate to
`opcua-cli` or accept the gap.

## Verification

After a successful regeneration, verify that nothing visible
changed semantically by comparing against the previous version's
output:

<!-- @code-block language="bash" label="terminal — diff check" -->
```bash
git diff --stat src/
# Big diff is normal after a real spec update.
# Small diff with no spec update may indicate generator drift —
# investigate before committing.
```
<!-- @endcode-block -->

Then run the package's CI hooks:

<!-- @code-block language="bash" label="terminal — checks" -->
```bash
composer format:check    # php-cs-fixer dry-run
# The package ships only `format`, `format:check`, and `generate`
# scripts — there is no `composer test`. Runtime tests live in
# the runtime packages (opcua-client, opcua-session-manager).
```
<!-- @endcode-block -->

A smoke test against the runtime: load one of the larger
registrars and run it through a real OPC UA test server:

<!-- @code-block language="php" label="examples/smoke-after-regen.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new RoboticsRegistrar())
    ->connect('opc.tcp://test-server.local:4840');

$dv = $client->read('i=2261');
echo $dv->getValue();   // server product name
$client->disconnect();
```
<!-- @endcode-block -->

If this succeeds, the regenerated package is functional. The
deeper validation (every codec round-trips correctly against a
spec-conformant server) is the responsibility of `opcua-cli`'s
test suite — see
[opcua-cli — code generation guide](https://github.com/php-opcua/opcua-cli/blob/master/docs/code-generation/generate-from-xml.md).

## Committing the regenerated output

The output is **part of the package distribution**. Every
regeneration is a commit:

<!-- @code-block language="bash" label="terminal — commit pattern" -->
```bash
git add src/ LICENSE.OPC-Foundation
git commit -m "Regenerate from UA-Nodeset <sha>"
```
<!-- @endcode-block -->

Reference the upstream commit hash from the UA-Nodeset clone so
future maintainers can reproduce. The CHANGELOG note should call
out the upstream source SHA and any noticeable downstream
impact (new specs, dropped specs, renamed registrars).

## What the script does *not* do

- **Tag a release.** Versioning is manual. After regeneration,
  bump the package version per [Reference ·
  Versioning](../reference/versioning.md).
- **Update `composer.json` constraints.** If `opcua-cli` or
  `opcua-client` versions need bumping, do so by hand.
- **Sanity-check spec coverage.** A spec dropped upstream
  silently disappears from `src/`. Detecting this is a diff-review
  job.
- **Detect missing PHP imports.** The generator's output is
  trusted. If a generated DTO references a class with no `use`
  statement, the package format-check catches it, but the
  diagnostic comes from PHP's class loader, not from
  `generate.php`.

## Custom output

`generate.php` is a script — fork it for custom needs:

- **Subset of specs.** Replace the `glob(...)` loop with an
  explicit allowlist.
- **Custom namespace.** Change the `$namespace = "PhpOpcua\\Nodeset\\$nsName"`
  line.
- **Different `opcua-cli` flags.** Add `--namespace-uri-list=`,
  `--include-deprecated`, etc., per the
  [opcua-cli generate:nodeset reference](https://github.com/php-opcua/opcua-cli/blob/master/docs/code-generation/generate-from-xml.md).

For most users, the shipped `generate.php` is the right balance —
it regenerates the package as-distributed.

## Failure modes

See [Troubleshooting](./troubleshooting.md) for the common failure
modes (CLI not found, dependency cleanup leaving orphans, format
failures).
