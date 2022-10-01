<?php

require_once __DIR__ . "../Product.php";

$product1 = new Product("Prosessor.jpg", "AMD Ryzen 5 3600", "Processor", 1000, 6_500_000_000);
$product1->showInfo();
$product1->maxStringInput();
$product1->maxIntInput();
$product1->maxFloatInput();
