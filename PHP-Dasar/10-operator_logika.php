<?php

$and10 = 10;
$and9 = 9;
$or10 = 10;
$or9 = 9;
$not10 = 10;
$not9 = 9;
$xor10 = 10;
$xor9 = 9;


var_dump($and10 && $and9);
var_dump($and10 and $and9);
var_dump($or10 || $or9);
var_dump($or10 == 10 or $or9 == 10);
var_dump($not10 != $not9);
var_dump($xor10 == 10 xor $xor9 == 10);
