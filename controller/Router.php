<?php 

namespace Controller;

class Router {
	
	public function index() {
		require 'views/home.php';
	}

	public function page($slug) {
		$title = ucfirst(str_replace('-', ' ', $slug));
		$post = \Model\Model::getInstance()->find($slug);
		//var_dump($post);
		require 'views/default.php';
	}
}