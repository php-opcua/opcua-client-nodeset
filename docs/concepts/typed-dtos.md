---
eyebrow: 'Docs · Concepts'
lede:    'Each structured DataType in a companion spec produces a readonly PHP class. With the registrar loaded, reads that return the corresponding ExtensionObject decode into typed instances automatically.'

see_also:
  - { href: './codecs-and-registrars.md',          meta: '5 min' }
  - { href: '../usage/reading-structured-data.md', meta: '5 min' }
  - { href: 'https://github.com/php-opcua/opcua-client/blob/master/docs/extensibility/extension-object-codecs.md', meta: 'external', label: 'opcua-client — ExtensionObject codecs' }

prev: { label: 'Enums and auto-cast',     href: './enums-and-auto-cast.md' }
next: { label: 'Codecs and registrars',   href: './codecs-and-registrars.md' }
---

# Typed DTOs

Every structured DataType in a companion spec — the kind that wraps
multiple typed fields and travels on the wire as a binary
`ExtensionObject` — produces a `readonly` PHP class under
`Types/`. The matching `Codecs/<Type>Codec.php` decodes the bytes
into an instance.

Together with the registrar, this turns OPC UA structures into
typed PHP objects with property-level access.

## The generated DTO

<!-- @code-block language="php" label="generated DTO" -->
```php
namespace PhpOpcua\Nodeset\AMB\Types;

readonly class NameNodeIdDataType
{
    public function __construct(
        public LocalizedText $Name,
        public NodeId        $NodeId,
    ) {
    }
}
```
<!-- @endcode-block -->

Properties:

- **`readonly`** — once constructed, immutable. Property
  assignment throws.
- **Public typed properties** — direct access, no getters. The
  spec's field name is preserved exactly (`PascalCase` for OPC
  UA, no transformation).
- **Constructor promotion** — every field is a constructor argument
  in declaration order. The codec calls the constructor with
  positional arguments.

The class is intentionally minimal. No factories, no validation,
no behaviour — these are wire-format value objects.

## Type mapping rules

The generator maps the spec's `<Field DataType="...">` to PHP
types as follows:

| OPC UA `DataType`              | PHP type                                              |
| ------------------------------ | ----------------------------------------------------- |
| `Boolean`                      | `bool`                                                |
| `SByte`, `Byte`, `Int16`, `UInt16`, `Int32`, `UInt32`, `Int64`, `UInt64` | `int`              |
| `Float`, `Double`              | `float`                                               |
| `String`, `XmlElement`         | `string`                                              |
| `ByteString`                   | `string` (raw bytes)                                  |
| `DateTime`                     | `\DateTimeImmutable`                                  |
| `Guid`                         | `string` (canonical hex)                              |
| `NodeId`, `ExpandedNodeId`     | `PhpOpcua\Client\Types\NodeId`                        |
| `QualifiedName`                | `PhpOpcua\Client\Types\QualifiedName`                 |
| `LocalizedText`                | `PhpOpcua\Client\Types\LocalizedText`                 |
| `Variant`                      | `PhpOpcua\Client\Types\Variant`                       |
| `DataValue`                    | `PhpOpcua\Client\Types\DataValue`                     |
| Custom enumeration DataType    | The generated `BackedEnum` class                      |
| Custom structure DataType      | The generated DTO class                               |

Modifiers:

- **`Optional` field** (`<Field ... Optional="true">`) → the type
  is nullable (`?T`), default value `null`.
- **Array field** (`ValueRank="1"`) → the field type is `array`,
  documented in PHPDoc.
- **`Variant`-typed field** (`DataType="i=24"`) → the field type is
  `Variant` — the codec leaves the underlying value type untouched.

## How a DTO arrives in your code

The full happy path:

<!-- @steps -->
- **The server returns a `Variant<ExtensionObject>`.**

  The variant's `value` is an `ExtensionObject` whose `typeId` is
  the DataType NodeId of, say, `NameNodeIdDataType`. The `body`
  is the binary-encoded structure payload.

- **The client looks up the codec.**

  The `ExtensionObjectRepository` was populated by the registrar
  via `registerCodecs()`. It finds a codec for that `typeId`.

- **The codec decodes the body.**

  `NameNodeIdDataTypeCodec::decode(BinaryDecoder $decoder)` reads
  the wire bytes and constructs a `NameNodeIdDataType` instance.

- **`DataValue::getValue()` returns the DTO.**

  `getValue()` recognises the decoded `ExtensionObject` and
  unwraps to the codec's return value. Your code receives the
  `NameNodeIdDataType`, not the wrapper.
<!-- @endsteps -->

End result:

<!-- @code-block language="php" label="examples/structured-read.php" -->
```php
use PhpOpcua\Nodeset\AMB\AMBNodeIds;
use PhpOpcua\Nodeset\AMB\Types\NameNodeIdDataType;

$dv = $client->read(AMBNodeIds::SomeNameNodeIdNode);
$value = $dv->getValue();

if ($value instanceof NameNodeIdDataType) {
    echo $value->Name->text . "\n";   // LocalizedText
    echo (string) $value->NodeId;     // NodeId, cast to its canonical string form
}
```
<!-- @endcode-block -->

Without the registrar, `$value` would be an `ExtensionObject` with
`body` set to the raw bytes — you would have to decode them
yourself.

## What happens when a field is nullable

OPC UA's optional fields use a bitmask in the structure body. The
codec reads the bitmask first, then conditionally reads each
optional field:

<!-- @code-block language="php" label="optional-field codec excerpt" -->
```php
public function decode(BinaryDecoder $decoder): SomeOptionalStruct
{
    $optionalMask = $decoder->readUInt32();   // bit 0 = first optional, etc.

    return new SomeOptionalStruct(
        Mandatory: $decoder->readDouble(),
        Optional:  ($optionalMask & 0b1) ? $decoder->readString() : null,
    );
}
```
<!-- @endcode-block -->

The DTO constructor argument is `?string $Optional = null`, so the
caller can also construct it without supplying the optional value:

<!-- @code-block language="php" label="examples/build-by-hand.php" -->
```php
$value = new SomeOptionalStruct(Mandatory: 42.0);
// $value->Optional === null
```
<!-- @endcode-block -->

## Nested structures

A field whose DataType is another structure is typed with the
generated DTO of that structure. The codec recursively delegates
to the nested codec.

<!-- @code-block language="php" label="nested DTO" -->
```php
readonly class OuterDataType
{
    public function __construct(
        public string         $Name,
        public InnerDataType  $Inner,
    ) {
    }
}
```
<!-- @endcode-block -->

The registrar must register **both** codecs — the generator
handles this automatically. Loading the registrar of the
**outermost** spec is sufficient (dependent specs' codecs come
along via `dependencyRegistrars()`).

## Writing a DTO back

Once decoded into a DTO, you can build a new instance, pass it to
`write()`, and the codec handles the encoding:

<!-- @code-block language="php" label="examples/write-structured.php" -->
```php
use PhpOpcua\Client\Types\LocalizedText;
use PhpOpcua\Client\Types\NodeId;
use PhpOpcua\Nodeset\AMB\Types\NameNodeIdDataType;

$newValue = new NameNodeIdDataType(
    Name:   new LocalizedText('en', 'Cooling Pump 1'),
    NodeId: NodeId::numeric(2, 1042),
);

$client->write(AMBNodeIds::SomeNameNodeIdNode, $newValue);
```
<!-- @endcode-block -->

Auto-detect picks `BuiltinType::ExtensionObject`, looks up the
codec for the DTO's DataType, encodes the body. The result is a
`Variant<ExtensionObject>` on the wire.

## Equality

DTOs are PHP objects — `==` does structural equality, `===` is
identity. Two DTOs with identical field values compare equal with
`==` but not with `===`:

<!-- @code-block language="php" label="examples/dto-equality.php" -->
```php
$a = new NameNodeIdDataType(new LocalizedText(null, 'A'), NodeId::numeric(2, 1));
$b = new NameNodeIdDataType(new LocalizedText(null, 'A'), NodeId::numeric(2, 1));

$a == $b;     // true  (value equality)
$a === $b;    // false (different object)
```
<!-- @endcode-block -->

For cache keys, hash a normalised string form
(`serialize($value)` works in-process; for cross-process
serialisation use the codec's encode + base64).

## What the DTOs do not include

- **Validation.** A DTO accepts whatever the constructor type-hints
  allow. Out-of-spec values reach the wire as the codec encodes
  them; the server may reject with `BadInvalidArgument`.
- **Schema metadata.** The DTO does not carry its DataType NodeId
  at runtime. You match by class (`$value instanceof
  NameNodeIdDataType`), not by NodeId.
- **Trait / interface markers.** DTOs do not implement any common
  interface — each stands alone. Use `instanceof` for type
  discrimination.

For applications that need richer modelling on top, wrap the
generated DTOs in your own domain classes.

## Where to look next

- [Codecs and registrars](./codecs-and-registrars.md) — how the
  codec wiring binds DTOs to NodeIds.
- [Usage · Reading structured data](../usage/reading-structured-data.md)
  — patterns for working with returned DTOs.
