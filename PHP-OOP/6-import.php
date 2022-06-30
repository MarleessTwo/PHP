<?php

require_once 'Data/Conflict.php';
require_once 'Data/Helper.php';

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict1->name = "Marli";
$conflict1->id = "01";
$conflict1->info();

$conflict2 = new Conflict2();
$conflict2->name = "Marli";
$conflict2->id = "01";
$conflict2->info();

helpMe();
echo APPLICATION . PHP_EOL;
