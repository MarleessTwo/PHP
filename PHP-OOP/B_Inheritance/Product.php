<?php

namespace B_Inheritance {

  use Exception;

  class Product
  {
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

    // Function Max Name Input
    public function maxStringInput()
    {
      if (strlen($this->name) > 25) {
        throw new Exception("Inputan maksimal 10 karakter");
      }
    }

    // Function Max Quantity Input
    public function maxIntInput()
    {
      if ($this->quantity > 1000) {
        throw new Exception("Inputan maksimal 1.000");
      }
    }

    // Function Max Price Input
    public function maxFloatInput()
    {
      if ($this->price > 1_000_000_000) {
        throw new Exception("Inputan maksimal 1.000.000.000");
      }
    }

    // Function __destruct
    function __destruct()
    {
    }
  }

  class Food extends Product
  {
    public string $expiredDate;

    function __construct(
      string $image,
      string $name,
      string $category,
      int $quantity,
      float $price,
      string $expiredDate
    ) {
      parent::__construct($image, $name, $category, $quantity, $price);
      $this->expiredDate = $expiredDate;
    }

    public function showInfo()
    {
      parent::showInfo();
      echo "Expired Date: $this->expiredDate" . "<br>";
    }
  }
}
