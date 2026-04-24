---
eyebrow: 'Docs · Getting started'
lede:    'Install with Composer. Zero configuration; the package is a static set of PHP classes loaded through the autoloader.'

see_also:
  - { href: './quick-start.md',              meta: '4 min' }
  - { href: './what-gets-generated.md',      meta: '5 min' }
  - { href: '../reference/versioning.md',    meta: '4 min' }

prev: { label: 'Overview',    href: '../overview.md' }
next: { label: 'Quick start', href: './quick-start.md' }
---

# Installation

`php-opcua/opcua-client-nodeset` is distributed through Packagist.
It is a pure-PHP code package — no extensions, no runtime
configuration, no service provider to register.

## Requirements

- **PHP** ≥ 8.2
- **`php-opcua/opcua-client`** ≥ 4.3 (pulled in automatically)

Cross-platform: Linux, macOS, Windows. Same support matrix as
`opcua-client`.

## Install

<!-- @code-block language="bash" label="terminal" -->
```bash
composer require php-opcua/opcua-client-nodeset
```
<!-- @endcode-block -->

That installs the package, pulls in `opcua-client`, and makes every
`PhpOpcua\Nodeset\*` class autoloadable. No further setup.

## Verify

A trivial smoke test — load any registrar class without connecting
anywhere:

<!-- @code-block language="php" label="examples/verify.php" -->
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use PhpOpcua\Nodeset\Robotics\RoboticsRegistrar;

$registrar = new RoboticsRegistrar();

echo "Registrar loaded: " . $registrar::class . "\n";
echo "Depends on " . count($registrar->dependencyRegistrars()) . " other registrars\n";
echo "Has " . count($registrar->getEnumMappings()) . " enum mappings\n";
```
<!-- @endcode-block -->

Running this prints something like:

<!-- @code-block language="text" label="output" -->
```text
Registrar loaded: PhpOpcua\Nodeset\Robotics\RoboticsRegistrar
Depends on 2 other registrars
Has 4 enum mappings
```
<!-- @endcode-block -->

If you see autoload errors, your Composer setup is the issue — not
the package. Run `composer dump-autoload` and try again.

## Versioning constraint

The package's major and minor versions track `opcua-client`. The
Composer constraint is `^4.3.0`; same-line patches are picked up
automatically. See [Reference ·
Versioning](../reference/versioning.md) for the compatibility
policy across major bumps.

For applications that pin `opcua-client` tightly, mirror the same
constraint here:

<!-- @code-block language="bash" label="terminal — pinning" -->
```bash
composer require php-opcua/opcua-client:^4.3 php-opcua/opcua-client-nodeset:^4.3
```
<!-- @endcode-block -->

## What this package does not require

- **`opcua-cli`** — needed only when regenerating from a fresh
  UA-Nodeset checkout. End users `composer require` the package
  and use the pre-built `src/`. See [Regeneration ·
  Overview](../regeneration/overview.md) for the rare cases that
  need it.
- **`opcua-session-manager`** — completely orthogonal. You can use
  this package with the direct client, the managed client, or the
  mock; it works the same way against all three.

## Memory and autoload cost

The package is **807 PHP files** at v4.3.0 (309 enums, 193 DTOs,
193 codecs, 56 registrars, 56 NodeIds classes). They are loaded
**lazily** via Composer's PSR-4 autoloader — a class is read from
disk only when first referenced. Using one specification's
registrar (e.g. `RoboticsRegistrar`) loads its handful of files
plus the dependency chain (typically 2-4 files). The rest stay on
disk.

For containerised deployments, the package adds ~1.5 MiB to the
vendor directory. Autoload classmap dumps
(`composer dump-autoload --optimize`) bring boot-time autoload
cost into the microseconds range.

## Next step

[Quick start](./quick-start.md) wires a real session against an
OPC UA server.
