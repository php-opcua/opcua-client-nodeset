#!/bin/bash

SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
CLI="$SCRIPT_DIR/../opcua-cli/bin/opcua-cli"
SRC_DIR="$SCRIPT_DIR/src"
NODESET_REPO="https://github.com/OPCFoundation/UA-Nodeset.git"
NODESET_DIR="${1:-$SCRIPT_DIR/UA-Nodeset}"

SKIP_DIRS=".github AnsiC DotNet OpenApi XML Schema"

echo "=== OPC UA NodeSet PHP Code Generator ==="
echo ""

# Check CLI exists
if [ ! -f "$CLI" ]; then
    echo "ERROR: opcua-cli not found at $CLI"
    echo "Make sure php-opcua/opcua-cli is installed alongside this repository."
    exit 1
fi

if [ -d "$NODESET_DIR" ]; then
    echo "Using existing UA-Nodeset at: $NODESET_DIR"
else
    echo "Cloning OPC Foundation UA-Nodeset repository into $NODESET_DIR..."
    git clone --depth 1 "$NODESET_REPO" "$NODESET_DIR"
fi
echo ""

if [ -f "$NODESET_DIR/LICENSE" ]; then
    cp "$NODESET_DIR/LICENSE" "$SCRIPT_DIR/LICENSE.OPC-Foundation"
    echo "Copied OPC Foundation license to LICENSE.OPC-Foundation"
fi

rm -rf "$SRC_DIR"
mkdir -p "$SRC_DIR"

# Generate
total=0
errors=0
skipped=0

for dir in "$NODESET_DIR"/*/; do
    dirname=$(basename "$dir")

    if echo "$SKIP_DIRS" | grep -qw "$dirname"; then
        continue
    fi

    found=0
    for xml in "$dir"*NodeSet2.xml "$dir"*NodeSet.xml; do
        [ -f "$xml" ] || continue
        found=1

        ns_name=$(echo "$dirname" | sed 's/[-.]//g')
        namespace="PhpOpcua\\Nodeset\\$ns_name"
        output="$SRC_DIR/$ns_name"

        echo "Generating: $ns_name ($(basename "$xml"))"
        if php "$CLI" generate:nodeset "$xml" --output="$output" --namespace="$namespace" 2>/dev/null; then
            total=$((total + 1))
        else
            echo "  ERROR: Failed to generate $ns_name"
            errors=$((errors + 1))
        fi
    done

    if [ $found -eq 0 ]; then
        skipped=$((skipped + 1))
    fi
done

# Post-process: remove dependency references to non-existent registrars
echo ""
echo "Validating dependency references..."
php "$SCRIPT_DIR/cleanup-deps.php" "$SRC_DIR"

echo ""
echo "=== Done ==="
echo "Generated: $total NodeSet(s)"
echo "Errors:    $errors"
echo "Skipped:   $skipped (no NodeSet2.xml found)"
