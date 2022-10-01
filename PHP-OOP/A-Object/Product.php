<?php

// Class Product
class Product
{
  // (?) untuk data nullable properti
  // di bawah ini adalah properties

  public string $image;
  public string $name;
  public string $category;
  public int $quantity;
  public float $price;

  // Function __construct
  // kegunaan construct: x = new Product("$name, $address");
  function __construct(
    string $image,
    string $name,
    string $category,
    int $quantity,
    float $price
  ) {
    $this->image = $image;
    $this->name = $name;
    $this->category = $category;
    $this->quantity = $quantity;
    $this->price = $price;
  }

  // Function Show Info
  public function showInfo()
  {
    echo "Image: $this->image" . "<br>";
    echo "Name: $this->name" . "<br>";
    echo "Category: $this->category" . "<br>";
    echo "Quantity: $this->quantity" . "<br>";
    echo "Price: " . "Rp " . number_format($this->price, 2, ",", ".") . "<br>";
  }

  // Function Max String Input
  public function maxStringInput()
  {
    if (strlen($this->name) > 25) {
      throw new Exception("Inputan maksimal 10 karakter");
    }
  }

  public function maxIntInput()
  {
    if ($this->quantity > 1000) {
      throw new Exception("Inputan maksimal 1.000");
    }
  }

  public function maxFloatInput()
  {
    if ($this->price > 1_000_000_000) {
      throw new Exception("Inputan maksimal 1.000.000.000");
    }
  }
}
