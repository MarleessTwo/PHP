<?php

require_once 'Data/K2F.php';

use Data\{K2F, SpeedoA};

$K2F = new K2F();
echo $K2F->getJumlah() . PHP_EOL;

$SA = new SpeedoA();
echo $SA->getIsi() . PHP_EOL;

// Memanggil Parent class
echo $SA->getIsiParent() . PHP_EOL;
