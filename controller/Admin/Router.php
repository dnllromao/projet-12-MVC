<?php 

namespace Controller\Admin;

class Router {
	
	public function index() {
		ob_start();
		require 'views/Admin/home.php';
		$content = ob_get_clean();
		require 'views/Admin/default.php';
	}

}