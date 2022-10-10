<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->name = "Eko";
$person->goodBye("Joko");
$person->hello("Budi");

// var_dump($person);

$person->run();
// by marleess