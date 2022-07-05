<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';


$connection = getConnection();

$sql = "SELECT * FROM users";
$statement = $connection->query($sql);

$users = $statement->fetchAll();

// foreach ($users as $user => $value) {
//   // echo "{$user} : $value" . PHP_EOL;
//   echo ($user + 1) . " : {$value["username"]}" . PHP_EOL;
// }

var_dump($users);
// echo $customers;

$connection = null;
