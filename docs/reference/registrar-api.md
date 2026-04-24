---
eyebrow: 'Docs · Reference'
lede:    'GeneratedTypeRegistrar is the cross-package contract. Three methods. The interface lives in opcua-client; this package implements it 56 times.'

see_also:
  - { href: './specifications.md',                        meta: '5 min' }
  - { href: '../concepts/codecs-and-registrars.md',       meta: '5 min' }
  - { href: 'https://github.com/php-opcua/opcua-client/blob/master/src/Repository/GeneratedTypeRegistrar.php', meta: 'external', label: 'Interface source' }

prev: { label: 'Specifications', href: './specifications.md' }
next: { label: 'Versioning',     href: './versioning.md' }
---

# Registrar API

The contract every registrar — generated or custom — implements.
The interface is defined in `opcua-client`, lives at
`PhpOpcua\Client\Repository\GeneratedTypeRegistrar`, and has been
stable since v4.0.0 of this package.

## Interface

<!-- @code-block language="php" label="GeneratedTypeRegistrar" -->
```php
namespace PhpOpcua\Client\Repository;

interface GeneratedTypeRegistrar
{
    public function registerCodecs(ExtensionObjectRepository $repository): void;

    /** @return array<string, class-string<\BackedEnum>> */
    public function getEnumMappings(): array;

    /** @return GeneratedTypeRegistrar[] */
    public function dependencyRegistrars(): array;
}
```
<!-- @endcode-block -->

Three methods. None of them are optional.

## The `bool $only` flag (concrete classes only)

<!-- @method name="\$registrar->only" returns="bool" visibility="public" -->

Not part of the interface — but every generated registrar declares
it as a promoted constructor argument:

<!-- @code-block language="php" label="generated declaration" -->
```php
public function __construct(public bool $only = false) {}
```
<!-- @endcode-block -->

When `true`, `ClientBuilder::loadGeneratedTypes()` skips this
registrar's `dependencyRegistrars()` recursion — loading only the
registrar's own codecs and enum mappings. The loader feature-detects
the property on the concrete class; custom registrars that do not
expose `$only` are loaded with dependency recursion always enabled.

See [Usage · Dependency resolution](../usage/dependency-resolution.md).

## `registerCodecs(ExtensionObjectRepository $repository): void`

<!-- @method name="\$registrar->registerCodecs(ExtensionObjectRepository \$repository): void" returns="void" visibility="public" -->

Register every codec the spec needs onto the per-client
`ExtensionObjectRepository`. The repository is passed in — the
implementation does **not** instantiate it.

<!-- @params -->
<!-- @param name="$repository" type="ExtensionObjectRepository" required -->
The per-client codec repository.
[opcua-client's reference](https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md)
covers its API. The standard call is `register(NodeId $typeId,
ExtensionObjectCodec $codec)`.
<!-- @endparam -->
<!-- @endparams -->

Generated implementations are flat lists of `register()` calls:

<!-- @code-block language="php" label="example body" -->
```php
public function registerCodecs(ExtensionObjectRepository $repository): void
{
    $repository->register(
        NodeId::parse(BACnetNodeIds::TimeValueDataType),
        new Codecs\TimeValueDataTypeCodec(),
    );
    $repository->register(
        NodeId::parse(BACnetNodeIds::LogRecordDataType),
        new Codecs\LogRecordDataTypeCodec(),
    );
    // … one register() per codec …
}
```
<!-- @endcode-block -->

Custom implementations follow the same pattern. The codec must
implement `PhpOpcua\Client\Encoding\ExtensionObjectCodec`.

## `getEnumMappings(): array`

<!-- @method name="\$registrar->getEnumMappings(): array" returns="array<string, class-string<\BackedEnum>>" visibility="public" -->

Return a map from **DataType NodeId** (as the canonical string —
`ns=N;i=M`) to PHP `BackedEnum` class name. Consumed by
`opcua-client`'s read path to auto-cast `Variant<Int32>` values.

<!-- @code-block language="php" label="example body" -->
```php
public function getEnumMappings(): array
{
    return [
        AMBNodeIds::MaintenanceMethodEnum => Enums\MaintenanceMethodEnum::class,
        // map continues …
    ];
}
```
<!-- @endcode-block -->

Empty array (`return [];`) is valid — many generated registrars
return one (the spec has no enums but exists for the dependency
cascade).

The PHP enum class must:

- Extend `\BackedEnum` (be a backed enum).
- Use `int` as its backing type — OPC UA enumerations are
  `Int32`-encoded.
- Have one case per spec value (or be tolerant of out-of-range
  ints — `EnumClass::from($n)` will throw on values not in the
  enum, and the client falls back to returning the raw `int`).

## `dependencyRegistrars(): array`

<!-- @method name="\$registrar->dependencyRegistrars(): array" returns="GeneratedTypeRegistrar[]" visibility="public" -->

Return **fresh instances** of every `GeneratedTypeRegistrar` this
spec depends on. The caller (loader) walks the list and loads each
recursively unless the registrar's concrete `$only` flag is `true`.

<!-- @code-block language="php" label="example body" -->
```php
public function dependencyRegistrars(): array
{
    return [
        new \PhpOpcua\Nodeset\DI\DiRegistrar(),
        new \PhpOpcua\Nodeset\IA\IARegistrar(),
    ];
}
```
<!-- @endcode-block -->

Empty array (`return [];`) is valid — a root spec with no
dependencies.

**Return new instances per call.** The caller may invoke
`dependencyRegistrars()` multiple times during the recursive walk
— do not cache the result.

The returned objects do not need to be the package's generated
registrars. Custom registrars can declare dependencies on
generated ones, or on other custom ones, or on a mix — the loader
handles them uniformly.

## Constructor signature

Every generated registrar takes one optional `bool $only`
argument:

<!-- @code-block language="php" label="constructor" -->
```php
public function __construct(public bool $only = false) {}
```
<!-- @endcode-block -->

Custom registrars can extend this:

<!-- @code-block language="php" label="custom constructor" -->
```php
class MyRegistrar implements GeneratedTypeRegistrar
{
    public function __construct(
        public bool $only = false,
        private readonly string $vendorPrefix = 'ACME',
    ) {}

    // …
}
```
<!-- @endcode-block -->

The `only` flag is optional — the interface does not require it.
Including it matches the generated convention and lets the loader
honour the same opt-out behaviour for your class.

## What the contract does *not* require

- **No `loaded` lifecycle hook.** The registrar is consulted at
  load time and never again. There is no "the client is now
  connected" callback.
- **No teardown.** Codecs and enum mappings live for the
  `Client`'s lifetime. Disconnecting and reconnecting reuses the
  same registry.
- **No introspection API.** `GeneratedTypeRegistrar` is a write-
  only contract from the registrar's perspective — it pushes
  codecs and mappings into the client. There is no
  `getRegisteredCodecs()` method on the interface.

If you need to query what is loaded:

<!-- @code-block language="php" label="examples/inspect-state.php" -->
```php
// What enum mappings does the client have?
$mappings = $client->getEnumMappings();

// What codecs does the client know?
$repo = $client->getExtensionObjectRepository();
$repo->has(NodeId::parse(AMBNodeIds::NameNodeIdDataType_3));   // bool
$repo->get(NodeId::parse(AMBNodeIds::NameNodeIdDataType_3));   // ?Codec
```
<!-- @endcode-block -->

That probes the client, not the registrars — which is the right
direction. The registrars are setup-time; the client is
runtime-state.

## Where the interface lives

The interface is in
[`php-opcua/opcua-client`](https://github.com/php-opcua/opcua-client)
at `src/Repository/GeneratedTypeRegistrar.php`. The
[`ExtensionObjectRepository`](https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md)
and [`ExtensionObjectCodec`](https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md)
contracts it depends on live there too.

For implementing a custom registrar, see [Recipes · Extending a
registrar](../recipes/extending-a-registrar.md).
