<?php

namespace Data;

// interface = abstract class
// implement bisa lebih dari 1 subclass kalau extend tidak


// intercafe pewarisan / inheritance
namespace Data;

interface HasType
{
  function getType(): string;
}

interface IsMaintenance
{
  function isMaintenance(): bool;
}

interface Subjig extends HasType
{
  function caryOut(): void;

  function getQty(): int;
}

// Class Speedo Meter A
class SpeedoA implements Subjig, IsMaintenance
{

  public function caryOut(): void
  {
    echo "Speedo Meter A" . PHP_EOL;
  }

  public function getQty(): int
  {
    return 4;
  }

  public function getType(): string
  {
    return "K2F";
  }

  public function isMaintenance(): bool
  {
    return false;
  }
}

// Class Speedo Meter B
class SpeedoB implements Subjig, IsMaintenance
{

  public function caryOut(): void
  {
    echo "Speedo Meter B" . PHP_EOL;
  }

  public function getQty(): int
  {
    return 4;
  }

  public function getType(): string
  {
    return "K2F";
  }

  public function isMaintenance(): bool
  {
    return false;
  }
}
