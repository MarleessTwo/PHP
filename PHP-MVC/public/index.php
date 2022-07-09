<?php



require_once __DIR__ . '/../vendor/autoload.php';

use MainDir\Apps\Router;
use MainDir\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/data', HomeController::class, 'data');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();
