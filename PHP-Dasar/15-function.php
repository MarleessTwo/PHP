<?php

// Function sederhana
function sayHello($name = "Anonymous")
{
  echo "Hello {$name}" . PHP_EOL;
}
sayHello("PHP");


// Experiment Function argument type data
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total {$first} + {$last} = {$total}" . PHP_EOL;
}
sum(100, "200");
sum(100.5, "2.00");
$arr = [100, 200];
sum($arr[0], $arr[1]);


// Function argument list
function sumAll(...$nilai)
{
  $total = 0;
  foreach ($nilai as $n) {
    $total += $n;
  }
  echo "Total " . implode(" + ", $nilai) . " = {$total}" . PHP_EOL;
}
$val = [1, 2, 3];
sumAll(20, 30, 40, 50, 20, 30, 40, 50);
sumAll(...$val); // Bila ada array, wajib menggunakan (...)


// Function return value dengan kondisi
function getFinalValue(int $nilai)
{
  if ($nilai >= 80) {
    return "A";
  } else if ($nilai >= 70) {
    return "B";
  } else if ($nilai >= 60) {
    return "C";
  } else if ($nilai >= 50) {
    return "D";
  } else {
    return "E";
  }
}
$score = getFinalValue(98);
var_dump($score);



// Variabel function
function bar()
{
  echo "bar" . PHP_EOL;
}
$var_bar = "bar";
$var_bar();

function getTitle(string $judul, $filtering)
{
  $finalJudul = $filtering($judul);
  echo "Judul : {$finalJudul}" . PHP_EOL;
}
$inputJudul = "Dunhill Docs";
getTitle($inputJudul, "strtoupper");
