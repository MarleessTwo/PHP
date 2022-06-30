<?php


namespace Data;

class K2F
{

  // parent class
  public function getJumlah()
  {
    return 18;
  }
}

class SpeedoA extends K2F
{
  public function getIsi()
  {
    return 4;
  }

  // fungsi memanggil parent class
  public function getIsiParent()
  {
    return parent::getJumlah();
  }
}
