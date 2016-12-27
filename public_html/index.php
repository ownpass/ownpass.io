<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$page = $_SERVER['REQUEST_URI'] === '/' ? '/index' : $_SERVER['REQUEST_URI'];
$base = realpath(__DIR__ . '/../applications/www.ownpass.io/pages');
$path = $base . '/' . ltrim($page, '/') . '.php';

if (is_file($path)) {
    $path = realpath($path);

    if (substr($path, 0, strlen($base)) !== $base) {
        $path = null;
    }
} else {
    $path = null;
}

if (!$path) {
    $path = $base . '/404.php';
}

include $path;
