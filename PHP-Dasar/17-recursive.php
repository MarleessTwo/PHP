<?php

function factorialRecursive(int $value): int
{
  return ($value < 1) ? 1 : $value * factorialRecursive($value - 1); // misal 5 = 5 x 4 x 2 x 1 -> Munudur
}
var_dump(factorialRecursive(5));
