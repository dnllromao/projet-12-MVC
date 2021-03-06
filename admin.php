<?php 

// Class Autoloader
function autoloader($class) {
	$class =  lcfirst(str_replace("\\","/",$class));
  	include $class . '.php';
}
spl_autoload_register('autoloader');

// New Class
$router = new \Controller\Admin\Router();

$page  = (isset($_GET['p']))? $_GET['p']: '';

if(!empty($page)) {
	$router->page($page);
} else {
	$router->index();
}