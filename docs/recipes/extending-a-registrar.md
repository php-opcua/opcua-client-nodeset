---
eyebrow: 'Docs · Recipes'
lede:    'Register your own codec alongside the generated ones — for a vendor-specific structure no companion spec defines. The generated files stay @generated; the custom code lives in your application.'

see_also:
  - { href: '../concepts/codecs-and-registrars.md',  meta: '5 min' }
  - { href: '../reference/registrar-api.md',         meta: '4 min' }
  - { href: 'https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md', meta: 'external', label: 'opcua-client — ExtensionObject codecs' }

prev: { label: 'Robotics walkthrough',  href: './robotics-walkthrough.md' }
next: { label: 'No further page',       href: '#' }
---

# Extending a registrar

The 51 companion specs cover most servers, but real deployments
often add vendor-specific structures the spec doesn't define.
`MyVendorCustomStatus`, an ACME-extended Argument shape, an
internal diagnostic record — these need their own
`ExtensionObjectCodec` registered.

The pattern this page covers: **register a custom codec alongside
the generated ones**, without modifying anything under `src/`.
The generated files stay `@generated`; the custom code lives in
your application.

## The shape

Three things to write in your application code:

1. The **DTO** — readonly PHP class for the structure.
2. The **codec** — `ExtensionObjectCodec` that decodes / encodes
   the binary body.
3. A **registration call** — your own `loadGeneratedTypes()`
   chain or a custom registrar implementing
   `GeneratedTypeRegistrar`.

Two registration strategies depending on volume:

| Strategy                          | When                                              |
| --------------------------------- | ------------------------------------------------- |
| Direct registration on the repository | One or two custom codecs                       |
| Custom `GeneratedTypeRegistrar`   | Several codecs, your own dependency policy        |

## Strategy 1 — direct registration

For one or two extras, register directly on the
ExtensionObjectRepository before connecting:

<!-- @code-block language="php" label="examples/direct-registration.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Client\Types\NodeId;
use PhpOpcua\Nodeset\Machinery\MachineryRegistrar;

$builder = ClientBuilder::create()
    ->loadGeneratedTypes(new MachineryRegistrar());

// Register the custom codec on the same per-client repository
$builder->getExtensionObjectRepository()->register(
    NodeId::parse('ns=10;i=5001'),    // your vendor DataType NodeId
    new App\Opcua\VendorCustomStatusCodec(),
);

$client = $builder->connect('opc.tcp://vendor-plc.local:4840');
```
<!-- @endcode-block -->

Generated codecs land via `loadGeneratedTypes()`; the custom codec
lands via the explicit `register()` call. The repository doesn't
care where a codec came from — both run on the same reads.

## Strategy 2 — custom GeneratedTypeRegistrar

For more than a couple of codecs, or to centralise the wiring, write
your own registrar:

<!-- @code-block language="php" label="examples/CustomVendorRegistrar.php" -->
```php
namespace App\Opcua;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;
use PhpOpcua\Client\Types\NodeId;
use PhpOpcua\Nodeset\Machinery\MachineryRegistrar;

final class CustomVendorRegistrar implements GeneratedTypeRegistrar
{
    public function __construct(public bool $only = false) {}

    public function registerCodecs(ExtensionObjectRepository $repository): void
    {
        $repository->register(NodeId::parse('ns=10;i=5001'), new VendorCustomStatusCodec());
        $repository->register(NodeId::parse('ns=10;i=5002'), new VendorDiagnosticRecordCodec());
        $repository->register(NodeId::parse('ns=10;i=5003'), new VendorAlarmRecordCodec());
    }

    public function getEnumMappings(): array
    {
        return [
            'ns=10;i=4010' => VendorOperatingStateEnum::class,
            'ns=10;i=4011' => VendorAlarmCategoryEnum::class,
        ];
    }

    public function dependencyRegistrars(): array
    {
        return [
            new MachineryRegistrar(),   // your vendor spec extends Machinery
        ];
    }
}
```
<!-- @endcode-block -->

The custom registrar implements the same interface as the
generated ones. Loading it goes through the same `loadGeneratedTypes()`
path — your dependencies cascade like any other:

<!-- @code-block language="php" label="examples/load-custom-registrar.php" -->
```php
$client = ClientBuilder::create()
    ->loadGeneratedTypes(new App\Opcua\CustomVendorRegistrar())
    ->connect('opc.tcp://vendor-plc.local:4840');
```
<!-- @endcode-block -->

This is the **recommended** path for any non-trivial vendor extension —
it keeps the wiring in one place and makes the registrar
testable.

## Writing the DTO

The DTO is a readonly PHP class with one constructor argument per
field. Follow the same conventions as the generated ones:

<!-- @code-block language="php" label="examples/VendorCustomStatus.php" -->
```php
namespace App\Opcua;

use PhpOpcua\Client\Types\LocalizedText;
use PhpOpcua\Client\Types\NodeId;

final readonly class VendorCustomStatus
{
    public function __construct(
        public string                $DeviceId,
        public LocalizedText         $Status,
        public ?VendorOperatingStateEnum $Mode,    // optional → nullable
        public int                   $Severity,
        /** @var float[] */
        public array                 $RawValues,
    ) {}
}
```
<!-- @endcode-block -->

Field types:

- Built-in OPC UA types → the PHP equivalent (`string`, `int`,
  `float`, `bool`, `LocalizedText`, `NodeId`, `DateTimeImmutable`,
  …)
- Custom enum → your `BackedEnum` class
- Optional fields → nullable (`?T`) with default `null`
- Arrays → `array`, with PHPDoc `@var T[]`

## Writing the codec

The codec reads/writes the binary body in **the same field order
the server uses**. Build from the binary spec:

<!-- @code-block language="php" label="examples/VendorCustomStatusCodec.php" -->
```php
namespace App\Opcua;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;

final class VendorCustomStatusCodec implements ExtensionObjectCodec
{
    public function decode(BinaryDecoder $decoder): VendorCustomStatus
    {
        // For structures with optional fields, the spec defines an
        // encoding mask. Read it first.
        $optionalMask = $decoder->readUInt32();

        return new VendorCustomStatus(
            DeviceId: $decoder->readString(),
            Status:   $decoder->readLocalizedText(),
            Mode:     ($optionalMask & 0b1)
                ? VendorOperatingStateEnum::from($decoder->readInt32())
                : null,
            Severity: $decoder->readInt32(),
            RawValues: $this->decodeFloatArray($decoder),
        );
    }

    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        assert($value instanceof VendorCustomStatus);

        $optionalMask = $value->Mode !== null ? 0b1 : 0;
        $encoder->writeUInt32($optionalMask);

        $encoder->writeString($value->DeviceId);
        $encoder->writeLocalizedText($value->Status);
        if ($value->Mode !== null) {
            $encoder->writeInt32($value->Mode->value);
        }
        $encoder->writeInt32($value->Severity);
        $this->encodeFloatArray($encoder, $value->RawValues);
    }

    private function decodeFloatArray(BinaryDecoder $decoder): array
    {
        $length = $decoder->readInt32();
        if ($length < 0) {   // -1 = null array per the OPC UA spec
            return [];
        }
        $out = [];
        for ($i = 0; $i < $length; $i++) {
            $out[] = $decoder->readDouble();
        }
        return $out;
    }

    private function encodeFloatArray(BinaryEncoder $encoder, array $values): void
    {
        $encoder->writeInt32(count($values));
        foreach ($values as $v) {
            $encoder->writeDouble($v);
        }
    }
}
```
<!-- @endcode-block -->

The encoder/decoder API is `opcua-client`'s — see the
[BinaryEncoder reference](https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md)
for every read/write method.

Key points:

- **Field order matches the OPC UA spec.** Off-by-one in field
  order makes the codec hand back garbage values silently. Test
  with a known wire payload.
- **Optional fields use a mask.** OPC UA structures with optional
  fields prefix the body with a `UInt32` mask, one bit per
  optional field in declaration order.
- **Array fields are length-prefixed `Int32`.** `-1` means null
  array (different from empty); the codec above flattens null to
  an empty array as a simplification — keep null distinct if your
  application needs that.
- **Enums encode as `Int32`.** Use `$enum->value` on encode,
  `EnumClass::from($int)` on decode (or `tryFrom()` for tolerance
  to out-of-spec values).

## Using the custom DTO

Once registered, `read()` on a vendor node returns the typed DTO:

<!-- @code-block language="php" label="examples/use-vendor-dto.php" -->
```php
use App\Opcua\VendorCustomStatus;

$dv = $client->read('ns=10;s=Devices/PLC1/Status');

if ($dv->getValue() instanceof VendorCustomStatus) {
    /** @var VendorCustomStatus $status */
    $status = $dv->getValue();
    echo "{$status->DeviceId}: {$status->Status->text}, severity {$status->Severity}\n";
}
```
<!-- @endcode-block -->

Same pattern as the generated DTOs — see [Usage · Reading
structured data](../usage/reading-structured-data.md).

## Testing the codec

A round-trip test against the codec alone catches most bugs:

<!-- @code-block language="php" label="examples/test-codec.php" -->
```php
use App\Opcua\VendorCustomStatusCodec;
use App\Opcua\VendorCustomStatus;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\BinaryDecoder;

it('round-trips a VendorCustomStatus', function () {
    $codec = new VendorCustomStatusCodec();
    $original = new VendorCustomStatus(
        DeviceId: 'PLC-1',
        Status: new LocalizedText('en', 'OK'),
        Mode: VendorOperatingStateEnum::RUNNING,
        Severity: 0,
        RawValues: [1.0, 2.0, 3.0],
    );

    $encoder = new BinaryEncoder();
    $codec->encode($encoder, $original);
    $bytes = $encoder->getBuffer();

    $decoder = new BinaryDecoder($bytes);
    $decoded = $codec->decode($decoder);

    expect($decoded)->toEqual($original);   // value equality
});
```
<!-- @endcode-block -->

Run that test in CI — your custom codec is application code, no
generator behind it. The discipline is yours.

## What this does not let you do

- **Modify the generated output.** Files under `src/` are
  `@generated` and will be overwritten on the next `generate.php`
  run. The custom DTO and codec must live in your application
  code, not in this package.
- **Hook into the generator.** If many custom structures share a
  pattern your spec could express, the right fix is to upstream a
  NodeSet2.xml change to the OPC Foundation — your custom codec
  becomes a generated codec a few months later.
- **Override the binary format.** The codec controls how a single
  DataType encodes; it cannot change the OPC UA framing, signing,
  or encryption. Those belong to the transport / secure channel.

For codecs that need to live alongside generated ones long-term,
the pattern is stable — write the DTO and codec once, register
them in your application's bootstrap, never touch the package's
files.
