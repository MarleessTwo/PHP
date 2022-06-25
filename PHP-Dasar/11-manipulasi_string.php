<?php

// Dot operator (.) -> menambahkan string dengan data lain
// PHP_EOL -> End Of Line
$name = "PHP";
echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";


// Konversi Number
$valueStr = (string)100;
var_dump($valueStr);
$valueInt = (int)"100";
var_dump($valueInt);
$valueFlt = (float)"10.5";
var_dump($valueFlt);


// Variabel parsing
echo "Hello {$name} " . PHP_EOL;
