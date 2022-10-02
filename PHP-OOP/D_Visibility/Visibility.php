<?php

require_once __DIR__ . "../Product.php";

use D_Visibility\Product;
use D_Visibility\Food;

$product1 = new Product("Prosessor.jpg", "AMD Ryzen 5 3600", "Computer/Component/Processor", 1000, 6_500_000);
$product1->showInfo();
$product1->maxStringInput();
$product1->maxIntInput();
$product1->maxFloatInput();

$product2 = new Product("RTX3080.jpg", "Asus ROG RTX 3080", "Computer/Component/VGA", 1000, 9_500_000);
$product2->showInfo();
$product2->maxStringInput();
$product2->maxIntInput();
$product2->maxFloatInput();

$product3 = new Food("Burger.jpg", "Burger", "Food", 10, 10_000, "2021-12-31");
$product3->showInfo();
