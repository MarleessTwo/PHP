<?php


namespace Data;

class Shape
{

  // parent class
  public function getCorner()
  {
    return 0;
  }
}

class Rectangle extends Shape
{
  public function getCorner()
  {
    return 4;
  }

  // fungsi memanggil parent class
  public function getParentCorner()
  {
    return parent::getCorner();
  }
}
