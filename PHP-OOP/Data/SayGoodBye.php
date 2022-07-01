<?php

namespace Data\Traits;

trait SayGoodBye
{
  public function goodBye(?string $name): void
  {
    if (is_null($name)) {
      echo "Good bye" . PHP_EOL;
    } else {
      echo "Good bye $name" . PHP_EOL;
    }
  }
}

trait SayHello
{
  public function hello(?string $name): void
  {
    if (is_null($name)) {
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
    }
  }
}

trait HasName
{
  public string $name;
}

trait CanRun
{
  public abstract function run(): void;
}

class ParentPerson
{

  public function goodBye(?string $name): void
  {
    echo "Good bye in Person" . PHP_EOL;
  }

  public function hello(?string $name): void
  {
    echo "Hello in Person" . PHP_EOL;
  }
}

trait All
{
  use SayGoodBye, SayHello, HasName, CanRun {
    // bisa di override
    // hello as private;
    // goodBye as private;
  }
}

class Person extends ParentPerson
{
  use All;

  public function run(): void
  {
    echo "Person $this->name is running" . PHP_EOL;
  }
}

// Apa itu Konkret function?
// Konkret function adalah function yang didefinisikan dalam class. 
// Function yang didefinisikan dalam class ini akan dapat digunakan oleh class lain.
// Contohnya:
// - public function goodBye(?string $name): void
// - private function goodBye(?string $name): void
// - protected function goodBye(?string $name): void
// - static function goodBye(?string $name): void
// - abstract function goodBye(?string $name): void
// - final function goodBye(?string $name): void
// - private static function goodBye(?string $name): void