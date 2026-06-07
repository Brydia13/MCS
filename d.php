<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
try {
    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo get_class($e) . " in " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString();
}
