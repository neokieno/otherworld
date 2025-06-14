<?php
// build.php

$rootDir = __DIR__;
$outputDir = "$rootDir/dist";

// Clean output directory
if (is_dir($outputDir)) {
    shell_exec("rm -rf " . escapeshellarg($outputDir));
}
mkdir($outputDir, 0755, true);

// Discover all .php files in the root (excluding inc/, build.php, and layout.php)
$phpFiles = glob("$rootDir/*.php");
$excluded = ['build.php', 'layout.php'];

foreach ($phpFiles as $filePath) {
    $filename = basename($filePath);

    if (in_array($filename, $excluded)) {
        continue;
    }

    // Determine route and output path
    $route = ($filename === 'index.php') ? '/' : '/' . basename($filename, '.php');
    ob_start();
    include $filePath;
    $html = ob_get_clean();

    if ($route === '/') {
        $outPath = "$outputDir/index.html";
    } else {
        $routePath = trim($route, '/');
        $dir = "$outputDir/$routePath";
        mkdir($dir, 0755, true);
        $outPath = "$dir/index.html";
    }

    file_put_contents($outPath, $html);
    echo "✔ Built: $filename → $outPath\n";
}

// Copy static asset directories
$assetDirs = ['css', 'js', 'images', 'assets']; // Add other folders as needed
foreach ($assetDirs as $dir) {
    $src = "$rootDir/$dir";
    $dest = "$outputDir/$dir";
    if (is_dir($src)) {
        shell_exec("cp -r " . escapeshellarg($src) . ' ' . escapeshellarg($dest));
        echo "✔ Copied: $dir → $dest\n";
    }
}

echo "\n✅ Static site built in /dist\n";
