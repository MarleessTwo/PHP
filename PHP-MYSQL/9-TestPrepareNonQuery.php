<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';


$connection = getConnection();

$username = "budi";
$password = "rahasia";

$sql = "INSERT INTO users(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;
