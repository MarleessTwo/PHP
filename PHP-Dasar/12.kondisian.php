<?php

// Looping switch case
while (True) {
  $number = readline('Input Angka >> ');
  switch ($number) {
    case 1:
      echo "satu" . PHP_EOL;
      break;

    case 2;
      echo "dua" . PHP_EOL;
      break;

    default:
      echo "Itu Bukan Angka" . PHP_EOL;
      exit;
  }
}

// Cek bilangan gaqnjil genap
$number = readline('Input Bilangan >> ');
if ($number % 2 == 1) :
  echo "Angka {$number} adalah bilangan ganjil" . PHP_EOL;
else :
  echo "Angka {$number} adalah bilangan genap" . PHP_EOL;
endif;

// Ternary Operator
$number2 = readline('Input Bilangan >> ');
echo ($number2 % 2 == 1) ? "Ganjil" : "Genap";
