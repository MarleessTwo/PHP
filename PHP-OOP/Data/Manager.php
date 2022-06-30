<?php


class Manager
{
  var string $name;

  function sayHello(string $name): void
  {
    echo "Hi {$name}, my name is {$this->name} (Manager)" . PHP_EOL;
  }
}


// Manager
class Supervisor extends Manager
{
  function sayHello(string $name): void
  {
    echo "Hi {$name}, my name is {$this->name} (SVP)" . PHP_EOL;
  }
}
