<?php


require_once "Data/Manager.php";

$hrd = new Manager();
$hrd->name = "Sumarli";
$hrd->sayHello("Anjay");

$svp = new Supervisor();
$hrd->name = "Reni";
$hrd->sayHello("Anjay");
