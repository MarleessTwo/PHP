<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

use Data\A\Hubungan as Hubungan1;
use Data\B\Hubungan as Hubungan2;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Hubungan1();
$conflict1->pasangan = "Marli";
$conflict1->pendapat = "Putus";
$conflict1->info();

$conflict2 = new Hubungan2();
$conflict2->pasangan = "Syfa";
$conflict2->pendapat = "Tidak Putus";
$conflict2->info();

helpMe();
echo APPLICATION . PHP_EOL;
