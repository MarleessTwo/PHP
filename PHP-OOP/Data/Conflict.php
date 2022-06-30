<?php

// Penggunaan namespace
namespace Data\One {
  class Conflict
  {
    var string $name;
    var string $id;

    function info(): void
    {
      echo "Nama : {$this->name}" . PHP_EOL;
      echo "Id : {$this->id}" . PHP_EOL;
    }
  }
}

namespace Data\Two {
  class Conflict
  {
    var string $name;
    var string $id;
    function info(): void
    {
      echo "Nama : {$this->name}" . PHP_EOL;
      echo "ID : {$this->id}" . PHP_EOL;
    }
  }
}
