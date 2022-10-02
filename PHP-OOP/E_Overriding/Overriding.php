<?php

require_once __DIR__ . "../Product.php";

use E_Overriding\Product;
use E_Overriding\Food;

$product1 = new Product("Prosessor.jpg", "AMD Ryzen 5 3600", "Computer/Component/Processor", 1000, 600_500_000);
$product1->showInfo();
$product1->maxStringInput();
$product1->maxIntInput();
$product1->maxFloatInput();

$product3 = new Food("Burger.jpg", "Burger", "Food", 10, 10_000, "05/10/2022");
$product3->showInfo();
$product3->maxFloatInput();

$product4 = new Food("Pizza.jpg", "Pizza", "Food", 20, 100_000_000, "05/10/2022");
$product4->showInfo();
$product4->maxFloatInput();
