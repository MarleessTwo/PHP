<?php


$penerbit = function (string $name) {
  echo "Nama : {$name}" . PHP_EOL;
};
$penerbit("PHP Tech");


// Judul Filter
function getJudul(string $judul, $filtering)
{
  $finalJudul = $filtering($judul);
  echo "Judul : {$finalJudul}" . PHP_EOL;
}
$filterFunction = function (string $judul): string {
  return strtoupper($judul);
};
getJudul("Program Dasar", $filterFunction);


// Akses variabel di anonfun
$penerbit = "PHP Tech";
$judul = "Program Dasar";
$judulPD = function () use ($penerbit, $judul) {
  echo "Penerbit : {$penerbit} | Judul : {$judul}" . PHP_EOL;
};
// cara sederhana
$judulPD2 = fn () => "Penerbit1 : {$penerbit} | Judul1 : {$judul}" . PHP_EOL;
// panggil
echo $judulPD();
echo $judulPD2();
