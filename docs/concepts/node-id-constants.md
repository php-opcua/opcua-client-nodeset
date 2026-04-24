---
eyebrow: 'Docs · Concepts'
lede:    'Every node in every companion spec has a string constant on the <Spec>NodeIds class. Use them like any string — they pass through opcua-client''s NodeId|string dispatcher and survive refactoring.'

see_also:
  - { href: './enums-and-auto-cast.md',      meta: '4 min' }
  - { href: '../usage/loading-registrars.md', meta: '5 min' }
  - { href: 'https://github.com/php-opcua/opcua-client/blob/master/docs/types/overview.md', meta: 'external', label: 'opcua-client — NodeId' }

prev: { label: 'What gets generated', href: '../getting-started/what-gets-generated.md' }
next: { label: 'Enums and auto-cast', href: './enums-and-auto-cast.md' }
---

# NodeId constants

The first artefact every companion spec ships is a NodeIds class —
a plain PHP class whose public constants are the canonical string
encodings of every node the spec defines.

<!-- @code-block language="php" label="generated NodeIds excerpt" -->
```php
namespace PhpOpcua\Nodeset\Robotics;

class RoboticsNodeIds
{
    public const MotionDeviceSystemType        = 'ns=3;i=1002';
    public const OperationalMode               = 'ns=3;i=18961';
    public const MotionDeviceCategory          = 'ns=3;i=18998';
    public const ParameterSet                  = 'ns=3;i=16602';
    public const Manufacturer                  = 'ns=3;i=18985';
    // …
}
```
<!-- @endcode-block -->

## The constants are strings

`RoboticsNodeIds::OperationalMode` is `string`. Not a `NodeId`
instance. Not an enum. Just a string in the OPC UA NodeId
encoding (`ns=N;i=M` for numeric IDs, `ns=N;s=...` for strings).

This is deliberate. Every API on `opcua-client` that takes a node
accepts `NodeId|string` — the string dispatcher turns it into a
`NodeId` internally. Strings round-trip through configuration
files and JSON; `NodeId` objects do not.

<!-- @code-block language="php" label="examples/using-constants.php" -->
```php
use PhpOpcua\Nodeset\Robotics\RoboticsNodeIds;
use PhpOpcua\Client\Types\NodeId;

$client->read(RoboticsNodeIds::OperationalMode);           // accepted as string
$client->browse(RoboticsNodeIds::ParameterSet);            // same
$client->write(RoboticsNodeIds::Manufacturer, 'ACME');     // same

// If you need a NodeId instance, parse it explicitly:
$nodeId = NodeId::parse(RoboticsNodeIds::OperationalMode);
// → NodeId(ns=3;i=18961)
```
<!-- @endcode-block -->

## Naming rules

Constants are named after the spec's BrowseName, sanitised to a
PHP identifier. A handful of cases produce decorated names:

| Convention                | Example                                | When                                                |
| ------------------------- | -------------------------------------- | --------------------------------------------------- |
| Plain name                | `OperationalMode`                      | The default — single occurrence of the BrowseName  |
| `_Name_` (with underscores) | `_CommIfSection_`, `_ControlChannel_`  | Some type-definition nodes (ObjectType, VariableType, …) — not all; many type definitions like `MotionDeviceSystemType` and `MachineToolType` keep the plain name |
| `Name_N` (numeric suffix) | `NameNodeIdDataType_3`                 | Disambiguator when the same BrowseName appears multiple times in the spec |
| `FromXToY`                | `FromExecutingToOutOfService`          | State-machine transition nodes — the spec's own naming convention |

The `_Type_` decoration on type-definition NodeIds is the
generator flagging "this is a class node, not an instance". The
numeric suffix on duplicates is the generator's way of keeping
constant names unique inside the class — different occurrences map
to different NodeIds, so the suffix matters.

## Working with paths

The constants are **NodeIds**, not browse paths. If your code
walks the address space by name (`/Objects/Server/ServerStatus`),
that resolution happens in `opcua-client` and does not use these
constants.

To resolve a browse path **starting from** a constant:

<!-- @code-block language="php" label="examples/path-from-constant.php" -->
```php
use PhpOpcua\Nodeset\MachineTool\MachineToolNodeIds;

$nodeId = $client->resolveNodeId(
    '/Manufacturer',
    startingNodeId: MachineToolNodeIds::MachineToolType,
);
```
<!-- @endcode-block -->

The constant is the entry point; the slash-path is the relative
walk from there.

## Namespace indices are runtime-dependent

Look closer at the constants:

<!-- @code-block language="text" label="ns values" -->
```text
RoboticsNodeIds::OperationalMode  = 'ns=3;i=18961'
DiNodeIds::DeviceType             = 'ns=1;i=1002'
```
<!-- @endcode-block -->

The `ns=3` / `ns=1` you see is the namespace index **the source
NodeSet2.xml file declared at generation time**. A real OPC UA
server publishes its own namespace table; the index for the
Robotics namespace URI on **your** server may not be `4`.

Two consequences:

<!-- @callout variant="warning" -->
The NodeId constants will work against any server whose namespace
table assigns the **same** index to the Robotics URI as the
NodeSet2.xml did. Many servers do — they import the official
NodeSet2.xml as-is, preserving the index order. Servers that
reshuffle namespaces (manual configuration, multi-vendor mixes,
some PLCs) need a remap. See below.
<!-- @endcallout -->

### Detecting an index mismatch

A read against the wrong index returns `BadNodeIdUnknown`. If your
otherwise correct code fails with that status against a specific
server, namespace indices are the first thing to check:

<!-- @code-block language="php" label="examples/check-namespaces.php" -->
```php
// Browse the standard namespace-array node.
$dv = $client->read('i=2255');   // Server.NamespaceArray
$namespaces = $dv->getValue();   // string[]

foreach ($namespaces as $idx => $uri) {
    echo "ns=$idx → $uri\n";
}
```
<!-- @endcode-block -->

Compare the index for the spec's URI (e.g.
`http://opcfoundation.org/UA/Robotics/`) with the `ns=N;` in the
constants. If they differ, the constants need to be remapped.

### Remapping at runtime

The package does not currently ship a remapper — the constants
are static strings. The pragmatic options:

1. **Use the constants only against servers with the canonical
   namespace ordering.** Most production deployments fall here.
2. **Write a small helper** that rewrites `ns=N;` based on a
   lookup table built at startup. The helper takes the constant and
   the server's namespace-array, returns a string with the right
   index.
3. **Use `resolveNodeId()` from a known stable root.** For nodes
   reachable by a stable browse path, resolve at startup and cache
   the result. The cached `NodeId` survives namespace reshuffling
   on the server side.

For the canonical namespace-import workflow on OPC UA servers, the
spec's URI is fixed — the index is the only variable. Worth
documenting in your deployment notes when this affects you.

## Specs that ship multiple NodeIds classes

Most specs ship one NodeIds class. A few split:

| Spec     | Classes                                                          |
| -------- | ---------------------------------------------------------------- |
| `DI`     | `DiNodeIds`, `DiPackageMetadataNodeIds`                          |
| `FDI`    | `Fdi5NodeIds`, `Fdi7NodeIds`                                     |
| `IOLink` | `IOLinkNodeIds`, `IOLinkIODDNodeIds`                             |
| `PADIM`  | `PADIMNodeIds`, `IRDINodeIds`                                    |
| `AML`    | `AMLBaseTypesNodeIds`, `AMLLibrariesNodeIds` (no single `AMLNodeIds`) |

The split mirrors how the OPC Foundation publishes the spec — two
distinct NodeSet2.xml files. Pick the one matching the version
your server implements.

## Searching for a constant

`grep` your IDE for the BrowseName you have in mind. For example:

<!-- @code-block language="bash" label="terminal — find a constant" -->
```bash
grep -r "OperationalMode" vendor/php-opcua/opcua-client-nodeset/src/
# → vendor/php-opcua/opcua-client-nodeset/src/Robotics/RoboticsNodeIds.php
```
<!-- @endcode-block -->

The constant lives wherever the spec defined the node. If a spec
inherits a node from a parent spec (typical for `MachineTool`
inheriting from `Machinery` / `DI` / `IA`), the constant is in the
**parent** spec's NodeIds, not the child's.
