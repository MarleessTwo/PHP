<?php


namespace Config {

  use PDO;

  class Database
  {
    static function getConnection(): PDO
    {
      $host = "localhost";
      $port = 3306;
      $database = "php-web";
      $username = "root";
      $password = "";

      // sensitive string
      return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

      // Error
      // return new \PDO("mysql:host = $host:$port; dbname = $database", $username, $password);
    }
  }
}
