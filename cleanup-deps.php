<?php

declare(strict_types=1);

/**
 * Post-process: removes dependency references to non-existent registrars.
 *
 * Usage: php cleanup-deps.php <src-dir>
 */
$srcDir = $argv[1] ?? 'src';
if (! is_dir($srcDir)) {
    echo "Directory not found: {$srcDir}\n";
    exit(1);
}

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
        echo "  Fixed: {$name}\n";
        $fixed++;
    }
}

echo "Cleaned {$fixed} registrar(s) with missing dependencies.\n";
