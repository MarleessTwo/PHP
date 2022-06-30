<?php

namespace Data;

// interface = abstract class
// implement bisa lebih dari 1 subclass kalau extend tidak


// intercafe pewarisan / inheritance
interface HasBrand
{
  function getBrand(): string;
}

interface IsMaintenance
{
  function isMaintenance(): bool;
}

interface Car extends HasBrand
{
  function drive(): void;

  function getTire(): int;
}

class Pajero implements Car, IsMaintenance
{

  public function drive(): void
  {
    echo "Drive Pajero" . PHP_EOL;
  }

  public function getTire(): int
  {
    return 4;
  }

  public function getBrand(): string
  {
    return "Toyota";
  }

  public function isMaintenance(): bool
  {
    return false;
  }
}
