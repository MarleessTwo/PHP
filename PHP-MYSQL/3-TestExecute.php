<?php
require_once __DIR__ . '/Helper/GetConnectionHelper.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customer(id, name, email)
    VALUES ('marleess', 'MarleeSs', 'smarleess@mss.com');
SQL;

$connection->exec($sql);

$connection = null;
