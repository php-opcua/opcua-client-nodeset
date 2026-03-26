#!/usr/bin/env php
<?php

$scriptDir = __DIR__;
$cli = $scriptDir . '/../opcua-cli/bin/opcua-cli';
$srcDir = $scriptDir . '/src';
$nodesetRepo = 'https://github.com/OPCFoundation/UA-Nodeset.git';
$nodesetDir = $argv[1] ?? $scriptDir . '/UA-Nodeset';

$skipDirs = ['\.github', 'AnsiC', 'DotNet', 'OpenApi', 'XML', 'Schema'];

echo "=== OPC UA NodeSet PHP Code Generator ===" . PHP_EOL;
echo PHP_EOL;

// Check CLI exists
if (!file_exists($cli)) {
    echo "ERROR: opcua-cli not found at $cli" . PHP_EOL;
    echo "Make sure php-opcua/opcua-cli is installed alongside this repository." . PHP_EOL;
    exit(1);
}

if (is_dir($nodesetDir)) {
    echo "Using existing UA-Nodeset at: $nodesetDir" . PHP_EOL;
} else {
    echo "Cloning OPC Foundation UA-Nodeset repository into $nodesetDir..." . PHP_EOL;
    passthru("git clone --depth 1 " . escapeshellarg($nodesetRepo) . " " . escapeshellarg($nodesetDir), $ret);
    if ($ret !== 0) {
        echo "ERROR: git clone failed" . PHP_EOL;
        exit(1);
    }
}
echo PHP_EOL;

if (file_exists($nodesetDir . '/LICENSE')) {
    copy($nodesetDir . '/LICENSE', $scriptDir . '/LICENSE.OPC-Foundation');
    echo "Copied OPC Foundation license to LICENSE.OPC-Foundation" . PHP_EOL;
}

// Clean and recreate src directory
if (is_dir($srcDir)) {
    passthru("rm -rf " . escapeshellarg($srcDir));
}
mkdir($srcDir, 0755, true);

// Generate
$total = 0;
$errors = 0;
$skipped = 0;

$dirs = glob($nodesetDir . '/*', GLOB_ONLYDIR);
foreach ($dirs as $dir) {
    $dirname = basename($dir);

    if (in_array($dirname, $skipDirs)) {
        continue;
    }

    $found = false;
    $xmlFiles = array_merge(
        glob($dir . '/*NodeSet2.xml'),
        glob($dir . '/*NodeSet.xml')
    );

    foreach ($xmlFiles as $xml) {
        if (!is_file($xml)) {
            continue;
        }
        $found = true;

        $nsName = str_replace(['-', '.'], '', $dirname);
        $namespace = "PhpOpcua\\Nodeset\\$nsName";
        $output = $srcDir . '/' . $nsName;

        echo "Generating: $nsName (" . basename($xml) . ")" . PHP_EOL;

        $cmd = sprintf(
            'php %s generate:nodeset %s --output=%s --namespace=%s 2>/dev/null',
            escapeshellarg($cli),
            escapeshellarg($xml),
            escapeshellarg($output),
            escapeshellarg($namespace)
        );

        passthru($cmd, $ret);
        if ($ret === 0) {
            $total++;
        } else {
            echo "  ERROR: Failed to generate $nsName" . PHP_EOL;
            $errors++;
        }
    }

    if (!$found) {
        $skipped++;
    }
}

// Post-process: remove dependency references to non-existent registrars
echo PHP_EOL;
echo "Validating dependency references..." . PHP_EOL;

$fixed = 0;
foreach (glob("{$srcDir}/*/*Registrar.php") as $file) {
    $content = file_get_contents($file);
    $original = $content;

    $content = preg_replace_callback(
        '/^\s*new \\\\PhpOpcua\\\\Nodeset\\\\([^\\\\]+)\\\\[^(]+Registrar\(\),?\n/m',
        function (array $match) use ($srcDir): string {
            $depDir = $match[1];
            if (is_dir("{$srcDir}/{$depDir}")) {
                return $match[0];
            }
            return '';
        },
        $content,
    );

    if ($content !== $original) {
        file_put_contents($file, $content);
        $name = basename(dirname($file)) . '/' . basename($file);
        echo "  Fixed: {$name}" . PHP_EOL;
        $fixed++;
    }
}
echo "Cleaned {$fixed} registrar(s) with missing dependencies." . PHP_EOL;

// Format generated code
echo PHP_EOL;
echo "Formatting generated code..." . PHP_EOL;
passthru("php " . escapeshellarg($scriptDir . '/vendor/bin/php-cs-fixer') . " fix --config=" . escapeshellarg($scriptDir . '/.php-cs-fixer.php') . " --allow-risky=yes --quiet", $ret);
if ($ret === 0) {
    echo "Formatting complete." . PHP_EOL;
} else {
    echo "WARNING: Formatting failed (exit code $ret). Is php-cs-fixer installed?" . PHP_EOL;
}

echo PHP_EOL;
echo "=== Done ===" . PHP_EOL;
echo "Generated: $total NodeSet(s)" . PHP_EOL;
echo "Errors:    $errors" . PHP_EOL;
echo "Skipped:   $skipped (no NodeSet2.xml found)" . PHP_EOL;
