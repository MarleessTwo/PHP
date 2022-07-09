<?php



namespace MainDir\Controller;

use MainDir\Apps\View;

class HomeController
{
  function index(): void
  {
    $model = [
      'tittle' => 'DASHBOARD',
      "content" => "SELAMAT DATANG"
    ];
    View::render("Home/index", $model);
  }
  function data(): void
  {
    echo "DATA";
  }
  function about(): void
  {
    echo "Author : MarleeSs";
  }
}
