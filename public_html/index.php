<?php

$page = $_SERVER['REQUEST_URI'] === '/' ? '/index' : $_SERVER['REQUEST_URI'];
$base = realpath(__DIR__ . '/../application/pages');
$path = $base . '/' . ltrim($page, '/') . '.php';

if (is_file($path)) {
    $path = realpath($path);

    if (substr($path, 0, strlen($base)) !== $base) {
        $path = null;
    }
} else {
    $path = null;
}

include $path;
