<?php 

session_start();

unset($_SESSION['user']);

use app\model\Model;
use app\view\View;
use app\controller\Controller;

// Autoloader
spl_autoload_register(function ($class_name) {
	$class = str_replace('\\', '/', $class_name);
	// ? how can get the root directory
    require '../'.$class . '.php';
});

$model = new Model('oop');
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['q']) && !empty($_GET['q'])) {
    $controller->routing($_GET['q']);
}

if(!empty($_POST['action'])) {

	switch ($_POST['action']) {
		case 'register':
			$controller->register($_POST);
			break;

		case 'login':
			$controller->login($_POST);
			break;
		
		default:
			# code...
			break;
	}

}

echo $view->output();



