<?php 

// Class Autoloader
function autoloader($class) {
  include $class . '.php';
}
spl_autoload_register('autoloader');

// New Class
$router = new \Controller\Router();
$router->index();
