<?php

namespace I_Getter_Setter;

class Product
{
  private string $name;
  private int $quantity;
  private float $price;
  private int $total;

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setQuantity(int $quantity)
  {
    $this->quantity = $quantity;
  }

  public function setPrice(float $price)
  {
    $this->price = $price;
  }

  public function setTotal()
  {
    $this->total = $this->price * $this->quantity;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getTotal()
  {
    return number_format($this->total, 2, ",", ".");
  }
}
