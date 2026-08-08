<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0 || strpos($line, '=') === false) continue;
        list($name, $val) = explode('=', $line, 2);
        putenv(trim($name) . '=' . trim($val));
    }
}

$db_host = getenv('DB_HOST') ?: "localhost";
$db_user = getenv('DB_USER') ?: "root";
$db_pass = getenv('DB_PASS') !== false ? getenv('DB_PASS') : "";
$db_name = getenv('DB_NAME') ?: "myhmsdb";
$db_port = getenv('DB_PORT') ?: 3306;

if (!isset($con) || !$con) {
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name, (int)$db_port);
    if (!$con) {
        die("Database connection error: " . mysqli_connect_error());
    }
}
