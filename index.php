<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$publicPath = __DIR__ . '/public' . $uri;

if ($uri !== '/' && file_exists($publicPath) && !is_dir($publicPath)) {
    $extToMime = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'webp' => 'image/webp',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject',
        'ico' => 'image/x-icon',
        'map' => 'application/json',
    ];
    $ext = strtolower(pathinfo($uri, PATHINFO_EXTENSION));
    if (isset($extToMime[$ext])) {
        header('Content-Type: ' . $extToMime[$ext]);
    }
    readfile($publicPath);
    return;
}

require __DIR__ . '/public/index.php';
