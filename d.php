<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$root = __DIR__;
$files = [
    'public/index.php',
    'vendor/autoload.php',
    '.env',
    'bootstrap/app.php',
];
echo "<pre>";
echo "Root: $root\n\n";
foreach ($files as $f) {
    $p = "$root/$f";
    echo "$f: " . (file_exists($p) ? 'YES' : 'NO') . " (" . (file_exists($p) ? filesize($p) . ' bytes' : 'N/A') . ")\n";
}
echo "\n-- public/index.php (first 5 lines) --\n";
$lines = file("$root/public/index.php");
for ($i = 0; $i < min(5, count($lines)); $i++) {
    echo ($i+1) . ": " . $lines[$i];
}
echo "\n\n-- Trying vendor/autoload --\n";
require "$root/vendor/autoload.php";
echo "autoload OK\n";
echo "\nAPP_KEY: " . (getenv('APP_KEY') ?: 'NOT SET') . "\n";
echo "APP_ENV: " . (getenv('APP_ENV') ?: 'NOT SET') . "\n";
echo "DB_CONNECTION: " . (getenv('DB_CONNECTION') ?: 'NOT SET') . "\n";
echo "</pre>";
