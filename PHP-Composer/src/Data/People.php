<?php

// TestComposer adalah Folder src
namespace TestComposer\Data;

// Nama Class dan nama File harus sama
class People
{

  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name)
  {
    echo "Hello {$name}, My name is {$this->name}";
  }
}
