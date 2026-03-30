<?php
$requested_file = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requested_file = ltrim($requested_file, '/');

if ($requested_file !== '' && file_exists($requested_file) && is_file($requested_file)) {
    return false;
}


// Caso contrário, redireciona para index.php
require_once 'index.php';
