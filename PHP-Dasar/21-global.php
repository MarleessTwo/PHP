<?php

$var = "PHP"; // Global scope

function sayHello()
{
  global $var; // global keyword
  echo $var . PHP_EOL;
  echo $GLOBALS["var"] . PHP_EOL; // Globals[] variable
}
sayHello();
