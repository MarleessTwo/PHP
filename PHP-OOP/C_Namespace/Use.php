<?php

namespace C_Namespace\Use {

  class Product
  {
    public string $name;
    public int $quantity;
    public float $price;
    public float $total;

    function __construct(
      string $name,
      int $quantity,
      float $price
    ) {
      $this->name = $name;
      $this->quantity = $quantity;
      $this->price = $price;
      $this->total = $quantity * $price;
    }

    function showInfo(): void
    {
      echo "Nama Produk : {$this->name}" . "<br>";
      echo "Jumlah Produk : {$this->quantity}" . "<br>";
      echo "Harga Produk : " . "Rp " . number_format($this->price, 2, ",", ".") . "<br>";
      echo "Total : " . "Rp " . number_format($this->total, 2, ",", ".") . "<br>";
    }
  }
}
