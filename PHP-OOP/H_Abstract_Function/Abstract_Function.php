<?php

require_once __DIR__ . "../Product.php";

use H_Abstract_Function\Food;

$food = new Food();
$food->name = "Bakso";
$food->quantity = 4;
$food->price = 18000;
$food->total = $food->quantity * $food->price;
$food->showInfo();
