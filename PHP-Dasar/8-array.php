<?php

// array di PHP bisa campur dengan 2 tipe data di bawah
$arr_int = array(1, 2, 3, "str");
var_dump($arr_int);
$arr_str = ["A", "B", "C"];
var_dump($arr_str);



// Operator array
echo "array ke-1 = ", $arr_int[0], "\n";
echo $arr_int[0], " Diganti 2 = ", $arr_int[0] = 2, "\n";
echo "Penambahan array -> ", $arr_int[] = 4, "\n";
echo "Menjadi ";
var_dump($arr_int);
"\n";
$n = count($arr_int);
echo "jumlah = ", $n, "\n";
unset($arr_int[0]);
var_dump($arr_int);


// Array Map
// note : bisa menggunakan array() atau "[]"
$data = array(
  "username" => "admin",
  "password" => "admin123",
  "role" => 1,
  // array di dalam array
  "nama" => array(
    "lengkap" => "admin kosong satu",
    "pendek" => "admin"
  )
);
var_dump($data["username"]);
var_dump($data["nama"]["lengkap"]);
