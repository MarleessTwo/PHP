<?php

$host = "localhost";
$port = 3306;
$database = "blog_app";
$username = "root";
$password = "marleess771";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySQL" . PHP_EOL;
    // close connection
    $connection = null;
    // 
} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}
