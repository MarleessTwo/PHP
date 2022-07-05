<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';


$connection = getConnection();

$username = "marleess";
$password = "MarleeSs123123";

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukse login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;
