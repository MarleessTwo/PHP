<?php


class Manager
{
  var string $name;

  function sayHello(string $name): void
  {
    echo "Hi {$name}, im {$this->name}. im Manager of this company" . PHP_EOL;
  }
}


// class Dunhill Black
class Supervisor extends Manager
{
  function sayHello(string $name): void
  {
    echo "Hi {$name}, im {$this->name}. im Supervisor of this company" . PHP_EOL;
  }
}
