<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$root = __DIR__;
echo "PHP=" . phpversion() . "\n";
echo "public/index.php: " . (file_exists("$root/public/index.php") ? 'OK' : 'MISSING') . "\n";
echo "vendor/autoload.php: " . (file_exists("$root/vendor/autoload.php") ? 'OK' : 'MISSING') . "\n";
echo ".env: " . (file_exists("$root/.env") ? 'OK' : 'MISSING') . "\n";
echo "bootstrap/app.php: " . (file_exists("$root/bootstrap/app.php") ? 'OK' : 'MISSING') . "\n";
echo "storage/logs: " . (is_writable("$root/storage/logs") ? 'WRITABLE' : 'NOT WRITABLE') . "\n";
echo "database: " . (is_writable("$root/database") ? 'WRITABLE' : 'NOT WRITABLE') . "\n";
echo "APP_KEY: " . (getenv('APP_KEY') ? 'SET' : 'NOT SET') . "\n";
try {
    require "$root/vendor/autoload.php";
    echo "autoload: OK\n";
    require "$root/bootstrap/app.php";
    echo "bootstrap: OK\n";
} catch (Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . ":" . $e->getLine() . "\n";
}
