<?php

require_once __DIR__ . "../Product.php";
require_once __DIR__ . "../Use.php";

use C_Namespace\A\{Product as ProductA};
use C_Namespace\B\{Product as ProductB};
use function C_Namespace\Use\Product\{math, showInfo};


$conflictA = new ProductA();
$conflictA->name = "Product A";
$conflictA->info();

$conflictB = new ProductB();
$conflictB->name = "Product B";
$conflictB->info();

$UseExample = new \C_Namespace\Use\Product("Product_A", 10, 10_000);
$UseExample->showInfo();
