<?php 

namespace Controller;

class Router {
	
	public function index() {
		ob_start();
		require 'views/parts/home.php';
		$content = ob_get_clean();
		require 'views/template.php';
	}

	public function page($slug) {
		
		if(file_exists("views/parts/$slug.php")) {

			ob_start();
			require "views/parts/$slug.php";
			$content = ob_get_clean();
			require 'views/template.php';

		} else {

			$this->notFound();

		}
		
	}

	private function notFound() {
		header('HTTP/1.0 404 Not Found');
		die('Page introuvable');
	}
}

