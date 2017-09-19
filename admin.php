<?php 

// Class Autoloader
function autoloader($class) {
	$class =  lcfirst(str_replace("\\","/",$class));
  	include $class . '.php';
}
spl_autoload_register('autoloader');

// New Class
$router = new \Controller\Admin\Router();
$page  = (isset($_GET['p']))? $_GET['p']: 'home';

switch ($page) {
	case 'home':
		$router->index();
		break;
	
	default:
		//$router->page($page);
		break;
}