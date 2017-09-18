<?php 

session_start();
$_SESSION['auth'] = 22;
//session_unset();

// Class Autoloader
function autoloader($class) {
  include 'app/' . $class . '.php';
}
spl_autoload_register('autoloader');

// New Class
$model = new Model();
$controller = new Controller($model);

// Routing
$page = ( isset($_GET['p']) )? $_GET['p']: 'index';

switch ($page) {
  case 'index':
    $content = $controller->index();
    break;
  
  case 'admin':
    $content = $controller->admin();
    break;
}


