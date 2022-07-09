<?php


namespace MainDir\Apps;

class View
{
  public static function render(string $view, $model)
  {
    require __DIR__ . '/../Views/' . $view . '.php';
  }
}
