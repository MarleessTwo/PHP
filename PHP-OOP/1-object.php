<?php


require_once "data/Person.php";
// Objek marleess
$marleess = new Person("Marli", "Karawng");
// akses prop class person
$marleess->name = "Marleess";
$marleess->address = null;
$marleess->country = "Singapore";
echo "Nama    : {$marleess->name} " . PHP_EOL;
echo "Alamat  : {$marleess->address} " . PHP_EOL;
echo "Negara  : {$marleess->country} " . PHP_EOL;
