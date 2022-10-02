<?php

require_once __DIR__ . "../Product.php";

use C_namespace\A\Product as ProductA;
use C_namespace\B\Product as ProductB;

$conflictA = new ProductA();
$conflictA->name = "Product A";
$conflictA->info();

$conflictB = new ProductB();
$conflictB->name = "Product B";
$conflictB->info();
