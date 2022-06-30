<?php

// Class Person
class Person
{

  const PROGRAMMER = "PHP";

  // (?) untuk data nullable properti
  // di bawah ini adalah properties
  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia";

  // Function __construct
  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  // Function Say Hello
  function sayHello(?string $OrangLain)
  {
    // (this->) mengakses properti
    echo (is_null($OrangLain)) ? "Assalamualaikum, Saya {$this->name} Kelas F" . PHP_EOL : "Hay {$OrangLain}, Saya {$this->name}" . PHP_EOL;
  }

  // Function info
  function info()
  {
    // self untuk mengakses constant class Person (saati ini)
    echo "{$this->name} Programmer " . self::PROGRAMMER . PHP_EOL;
  }

  // Function __destruct
  function __destruct()
  {
    echo "Object Person {$this->name} is destroy" . PHP_EOL;
  }
}
