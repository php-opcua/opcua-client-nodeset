---
eyebrow: 'Docs · Usage'
lede:    'With a registrar loaded, read() returns typed DTOs and enums automatically. The application code looks like any object-oriented PHP — no manual decoding, no Variant unwrapping.'

see_also:
  - { href: '../concepts/typed-dtos.md',          meta: '5 min' }
  - { href: '../concepts/enums-and-auto-cast.md', meta: '4 min' }
  - { href: '../recipes/robotics-walkthrough.md', meta: '6 min' }

prev: { label: 'Dependency resolution', href: './dependency-resolution.md' }
next: { label: 'Regeneration overview', href: '../regeneration/overview.md' }
---

# Reading structured data

A `read()` on a node whose Value attribute is a structured type
returns a `DataValue<Variant<ExtensionObject>>`. Without a codec,
`getValue()` hands back the raw `ExtensionObject` with binary
bytes in its `body`. With a registrar loaded, the same call
returns a fully-decoded DTO. This page is the patterns reference.

## The happy path

<!-- @code-block language="php" label="examples/structured-read.php" -->
```php
use PhpOpcua\Nodeset\AMB\AMBNodeIds;
use PhpOpcua\Nodeset\AMB\AMBRegistrar;
use PhpOpcua\Nodeset\AMB\Types\NameNodeIdDataType;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new AMBRegistrar())
    ->connect('opc.tcp://amb-server.local:4840');

$dv = $client->read('ns=2;s=SomeNameNodeIdNode');

if (StatusCode::isGood($dv->statusCode)) {
    /** @var NameNodeIdDataType $value */
    $value = $dv->getValue();
    echo $value->Name->text;   // direct property access
    echo (string) $value->NodeId;
}
```
<!-- @endcode-block -->

Two things to internalise:

- **Type the variable with `/** @var ClassName */`** — PHPStan,
  Psalm, and IDE autocomplete benefit. `getValue()` returns
  `mixed`; the variable doc-block tells static analysis what to
  expect.
- **Treat the DTO as the data shape**. Don't probe its internals
  for an OPC UA-flavoured representation — they hold PHP values
  (strings, ints, LocalizedText instances). The OPC UA encoding
  was the codec's problem.

## Defensive reads

Two failure modes worth guarding:

<!-- @code-block language="php" label="examples/defensive-structured-read.php" -->
```php
use PhpOpcua\Client\Types\ExtensionObject;
use PhpOpcua\Client\Types\StatusCode;

$dv = $client->read(AMBNodeIds::SomeNameNodeIdNode);

if (! StatusCode::isGood($dv->statusCode)) {
    // Per-node failure: BadNodeIdUnknown, BadUserAccessDenied, …
    throw new \RuntimeException(
        'Read failed: ' . StatusCode::getName($dv->statusCode)
    );
}

$value = $dv->getValue();

if ($value instanceof ExtensionObject) {
    // Registrar was not loaded, or the typeId did not match a codec.
    // The wire bytes are in $value->body — decode by hand or load
    // the right registrar.
    throw new \LogicException(
        'No codec for ExtensionObject typeId ' . $value->typeId
    );
}

assert($value instanceof NameNodeIdDataType);
```
<!-- @endcode-block -->

When does `$value instanceof ExtensionObject` happen with a
registrar loaded? Three cases:

- The DataType NodeId the server returned does not match the one
  the registrar registered against. Most often: **namespace index
  mismatch** between the source NodeSet2.xml and the server.
  See [NodeId constants — Namespace indices are runtime-dependent](../concepts/node-id-constants.md#section-namespace-indices-are-runtime-dependent).
- The server emits an XML-encoded ExtensionObject (encoding = 2).
  The package only ships binary codecs.
- The server sent a value of a custom DataType outside the loaded
  registrars.

## Reading multiple structures

`readMulti()` works the same way. Each entry's `getValue()`
returns either a DTO or the raw fallback:

<!-- @code-block language="php" label="examples/multi-structured-read.php" -->
```php
$results = $client->readMulti([
    'ns=2;s=PumpA/Status',
    'ns=2;s=PumpB/Status',
    'ns=2;s=PumpC/Status',
]);

foreach ($results as $dv) {
    if (StatusCode::isGood($dv->statusCode)) {
        /** @var \PhpOpcua\Nodeset\Pumps\Types\... $status */
        $status = $dv->getValue();
        process($status);
    }
}
```
<!-- @endcode-block -->

For the per-call mechanics of `read()` and `readMulti()`, see
[`opcua-client` — reading attributes](https://github.com/php-opcua/opcua-client/blob/master/docs/operations/reading-attributes.md).

## Writing a DTO

The same DTO class works both ways. Build an instance, pass it to
`write()`:

<!-- @code-block language="php" label="examples/write-structured.php" -->
```php
use PhpOpcua\Client\Types\LocalizedText;
use PhpOpcua\Client\Types\NodeId;
use PhpOpcua\Client\Types\StatusCode;
use PhpOpcua\Nodeset\AMB\Types\NameNodeIdDataType;

$newValue = new NameNodeIdDataType(
    Name:   new LocalizedText('en', 'Cooling Pump 1'),
    NodeId: NodeId::numeric(2, 1042),
);

$status = $client->write(AMBNodeIds::SomeNameNodeIdNode, $newValue);

if (! StatusCode::isGood($status)) {
    throw new \RuntimeException(
        'Write rejected: ' . StatusCode::getName($status)
    );
}
```
<!-- @endcode-block -->

Auto-detect picks `BuiltinType::ExtensionObject`, looks up the
codec for the DTO's DataType NodeId, encodes the body. The server
sees a `Variant<ExtensionObject>`.

## DTOs in subscriptions

Subscriptions deliver values through `DataChangeReceived` events.
The decoded value is on the event's `dataValue`:

<!-- @code-block language="php" label="examples/subscribe-structured.php" -->
```php
use PhpOpcua\Client\Event\DataChangeReceived;

$dispatcher->addListener(DataChangeReceived::class, function (DataChangeReceived $e) {
    $value = $e->dataValue->getValue();

    if ($value instanceof \PhpOpcua\Nodeset\Pumps\Types\PumpStatus) {
        applyPumpStatus($e->clientHandle, $value);
    }
});

// (the rest of the subscription wiring is opcua-client's responsibility)
```
<!-- @endcode-block -->

The auto-cast happens on the way out of the publish loop, just
like a synchronous `read()`. See [`opcua-client` —
subscriptions](https://github.com/php-opcua/opcua-client/blob/master/docs/operations/subscriptions.md).

## Arrays of structures

A node whose value is an array of structured DataType
(`ValueRank=1`) returns an array of DTOs:

<!-- @code-block language="php" label="examples/array-of-structures.php" -->
```php
$dv = $client->read('ns=2;s=SensorReadings');

/** @var SensorReading[] $readings */
$readings = $dv->getValue();

foreach ($readings as $reading) {
    echo "{$reading->Sensor}: {$reading->Value}\n";
}
```
<!-- @endcode-block -->

The codec decodes each element, the client wraps in a PHP array,
your code iterates. Same shape as scalar reads — just looped.

## Nested DTOs

A DTO field whose type is another DTO arrives fully decoded:

<!-- @code-block language="php" label="examples/nested-dto.php" -->
```php
$config = $dv->getValue();
// Illustrative shape (hypothetical SpecConfigData):
// SpecConfigData {
//   Identification: VendorIdentification { Manufacturer: "ACME", ... }
//   OperationalState: OperationalStateData { ... }
//   ...
// }

echo $config->Identification->Manufacturer;
```
<!-- @endcode-block -->

Property access chains. No manual `getValue()` on the nested
field; it is already a typed object.

## When the DTO is the wrong shape

Specs evolve. A server running an older version of a spec may
emit a structure with fewer fields than the latest NodeSet2.xml
declares. The codec reads them in declaration order — extra fields
in the latest spec, not present on the wire, lead to a
`BinaryDecoder` underflow.

When this surfaces:

<!-- @code-block language="text" label="error from underflow" -->
```text
PhpOpcua\Client\Exception\EncodingException:
Buffer underflow: need 4 bytes, have 0
```
<!-- @endcode-block -->

Three responses, in order of pragmatism:

1. **Regenerate against the older NodeSet2.xml.** If the server is
   the source of truth, the codec needs to match its version.
   See [Regeneration · Overview](../regeneration/overview.md).
2. **Ship a custom codec** for the specific DataType in your
   application. See [Recipes · Extending a
   registrar](../recipes/extending-a-registrar.md).
3. **Drop down to the raw `ExtensionObject`** and decode by hand
   for that specific NodeId. The escape hatch:

<!-- @code-block language="php" label="examples/raw-extension-object.php" -->
```php
$repo = $client->getExtensionObjectRepository();
$repo->unregister(NodeId::parse(AMBNodeIds::NameNodeIdDataType_3));

$dv = $client->read(AMBNodeIds::SomeNameNodeIdNode);
$value = $dv->getValue();   // raw ExtensionObject with body bytes
```
<!-- @endcode-block -->

`unregister()` removes the codec for that one NodeId; future reads
return the raw form. Your application code does the binary
decoding.

This is escape-hatch territory. The first option — regenerate
against the right NodeSet2.xml — is almost always the right one.
