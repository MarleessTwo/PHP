<?php

class Zero
{
  private array $properties = [];

  public function __set($name, $value)
  {
    $this->properties[$name] = $value;
  }

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __isset($name): bool
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }




  // Function overloading
  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call function {$name} with arguments {$join}" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call static function {$name} with arguments {$join}" . PHP_EOL;
  }
}

$zero = new Zero();
$zero->firstName = "Marli";
$zero->middleName = "Sumarli";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;

$zero->sayHello("Marli", "Khannedy");
Zero::sayHello("Eko", "Khannedy");
