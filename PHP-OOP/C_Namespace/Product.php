<?php

// Penggunaan namespace
namespace C_Namespace\A {
  class Product
  {
    public string $name;

    function info(): void
    {
      echo "Nama Produk : {$this->name}" . "<br>";
    }
  }
}

namespace C_Namespace\B {
  class Product
  {
    public string $name;

    function info(): void
    {
      echo "Nama Produk : {$this->name}" . "<br>";
    }
  }
}
