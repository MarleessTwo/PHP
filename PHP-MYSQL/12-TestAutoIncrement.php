<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';


$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('marleess@mss.com', 'hallo bangg...')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;
