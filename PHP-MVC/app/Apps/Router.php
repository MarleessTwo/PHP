<?php


namespace MainDir\Apps;

class Router
{

  private static array $routes = [];

  // add url mapping
  public static function add(string $method, string $path, string $controller, string $function)
  {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function
    ];
  }

  // run controller
  public static function run(): void
  {
    $path = '/'; // default index path

    if (isset($_SERVER['PATH_INFO']))
      $path = $_SERVER['PATH_INFO']; //path = url di browser
    $method = $_SERVER['REQUEST_METHOD']; //method = request di browser

    // check url yg diakses dan disamakan dengan Router::add
    foreach (self::$routes as $route) {
      if ($path == $route['path'] && $method == $route['method']) {

        $function = $route['function']; // mengambil string dari Router add
        $controller = new $route['controller']; // instansiai object HomeController
        $controller->$function(); // set method class

        return;
      }
    }
    http_response_code(404);
    echo "CONTROLLER GA ADA EUY";
  }
}
