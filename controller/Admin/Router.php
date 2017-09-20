<?php 

namespace Controller\Admin;

class Router {
	
	public function index() {
		ob_start();
		require 'views/parts/admin/home.php';
		$content = ob_get_clean();
		require 'views/template.php';
	}

	public function page($slug) {
		$title = ucfirst(str_replace('-', ' ', $slug));
		// $post = \Model\Model::getInstance()->find($slug);
		//var_dump($post);

		
		switch ($slug) {
		 	case 'interview':
		 		ob_start();
		 		require "views/parts/$slug.php";
		 		$content = ob_get_clean();
		 		require 'views/template.php';
		 		break;
		 	
		 	default:
		 		require 'views/default.php';
		 		break;
		} 
		
	}
}