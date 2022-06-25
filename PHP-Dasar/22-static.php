<?php

function Tmp()
{
  static $num = 1;
  echo $num . PHP_EOL;
  $num++;
}
Tmp();
Tmp();
Tmp();
