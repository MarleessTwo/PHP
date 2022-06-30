<?php


require_once "data/Person.php";

// objek Marleess
$marleess = new Person("Marleess", "Karawang");
$marleess->name = "Marleess";
$marleess->sayHello("Je");
$marleess->info();

// objek Anjay
$anjay = new Person("Anjay", "Gatau");
$anjay->name = "Anjay";
$anjay->sayHello("Je");
$anjay->info();
