<?php

namespace H_Abstract_Function;

abstract class Product
{
  public string $name;
  public int $quantity;
  public float $price;
  public int $total;

  abstract public function showInfo();
}

class Food extends Product
{
  public function showInfo()
  {
    echo "Menu : {$this->name}<br>";
    echo "Jumlah : {$this->quantity}<br>";
    echo "Harga : {$this->price}<br>";
    echo "Total : {$this->total}<br>";
  }
}
