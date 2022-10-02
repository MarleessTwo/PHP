<?php

require_once __DIR__ . '../Product.php';

use I_Getter_Setter\Product;

$product = new Product();
$product->setName("Laptop");
$product->setQuantity(1);
$product->setPrice(10_000_000);
$product->setTotal();
echo $product->getTotal();
