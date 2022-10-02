<?php

require_once __DIR__ . "../Direktur.php";

use F_Parent\Direktur;
use F_Parent\Manager;

$direktur = new Direktur("Marli", 20, "Cilalung Tamelang");
$direktur->showData();
$manager = new Manager("Marleess", 20, "Pancawati");
$manager->showData();
$manager->showParentPhoneNumber();
