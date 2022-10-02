<?php

// Metode Polymorphism
namespace G_Polymorphism {

  // Abstract Class
  // Class Abstract tidak bisa diinstansiasi secara langsung
  abstract class Product
  {
    public string $name;
    public int $quantity;
    public float $price;
  }

  class Food extends Product
  {
    public int $weight;
  }

  class Drink extends Product
  {
    public int $volume;
  }

  class Toko
  {
    // Bisa menggunakan properties Parent Class
    public Product $product;
  }

  function showInfo(Product $product): void
  {
    if ($product instanceof Food) {
      echo "Name: $product->name" . "<br>";
      echo "Quantity: $product->quantity" . "<br>";
      echo "Price: " . "Rp " . number_format($product->price, 2, ",", ".") . "<br>";
      echo "Product Netto : {$product->weight}g" . "<br>";
    } else if ($product instanceof Drink) {
      echo "Name: $product->name" . "<br>";
      echo "Quantity: $product->quantity" . "<br>";
      echo "Price: " . "Rp " . number_format($product->price, 2, ",", ".") . "<br>";
      echo "Product Netto : {$product->volume}ml" . "<br>";
    }
  }
}
