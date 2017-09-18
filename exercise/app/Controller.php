<?php 

class Controller {

	private $_model;

	public function __construct($model) {

		$this->_model = $model;
	}

	public function index() {

		if(isset($_SESSION['auth'])) {
			$username = $this->_model->findUser($_SESSION['auth']);
			$content = 'Coucou ' . ucfirst($username);
		} else {
			$content = 'Coucou l\'inconnu';
		}

		require 'View.php';
	}

	public function admin() {

		if(isset($_SESSION['auth'])) {
			$content = 'Bienvenue dans le secret des dieux!';
			require 'View.php';
		} else {
			$this->index();
		}

		
	}

}