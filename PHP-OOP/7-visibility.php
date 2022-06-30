<?php


require_once  'Data/Product.php';

$produk = new Product("Apel", 20_000);
echo $produk->getName() . PHP_EOL;
echo $produk->getPrice() . PHP_EOL;
