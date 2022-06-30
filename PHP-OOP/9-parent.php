<?php

require_once 'Data/Shape.php';

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$reqt = new Rectangle();
echo $reqt->getCorner() . PHP_EOL;

// Memanggil Parent class
echo $reqt->getParentCorner() . PHP_EOL;
