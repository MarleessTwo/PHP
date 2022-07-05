<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';


$connection = getConnection();

$username = "budi";
$password = "rahasia";

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if ($row = $statement->fetch()) {
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$connection = null;
