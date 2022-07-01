<?php

namespace Data;

abstract class Subjig
{
  public string $name;
  public int $quantity;
  abstract public function out(): void;
}

class K2F extends Subjig
{
  public function out(): void
  {
    echo "K2F | {$this->name} : {$this->quantity} pcs" . PHP_EOL;
  }
}


class K60 extends Subjig
{
  public function out(): void
  {
    echo "K60 | {$this->name} : {$this->quantity} pcs" . PHP_EOL;
  }
}
