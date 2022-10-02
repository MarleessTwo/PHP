<?php

require_once __DIR__ . "../Product.php";

use G_Polymorphism\{Toko, Food, Drink};
use function G_Polymorphism\showInfo;


$product = new Toko();
$product->product = new Food();
$product->product->name = "Beng Beng";
$product->product->quantity = 10;
$product->product->price = 2_000;
$product->product->weight = 5;
showInfo($product->product);
echo "<br>";

$product->product = new Drink();
$product->product->name = "Teh Botol";
$product->product->quantity = 4;
$product->product->price = 5_000;
$product->product->volume = 500;
showInfo($product->product);
