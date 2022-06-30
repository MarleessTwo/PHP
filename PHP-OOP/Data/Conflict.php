<?php

// Penggunaan namespace
namespace Data\A {
  class Hubungan
  {
    var string $pasangan;
    var string $pendapat;

    function info(): void
    {
      echo "Nama : {$this->pasangan}" . PHP_EOL;
      echo "Ketentuan : {$this->pendapat}" . PHP_EOL;
    }
  }
}

namespace Data\B {
  class Hubungan
  {
    var string $pasangan;
    var string $pendapat;

    function info(): void
    {
      echo "Nama : {$this->pasangan}" . PHP_EOL;
      echo "Ketentuan : {$this->pendapat}" . PHP_EOL;
    }
  }
}
