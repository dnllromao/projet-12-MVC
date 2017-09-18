<?php 

class Model {

	private $_db_host = 'localhost';
	private $_db_name = 'homework';
	private $_db_user = 'root';
	private $_db_pass = '';
	private $_db;

	private function getDB() {

		if(is_null($this->_db)) {
			$pdo = new PDO("mysql:host=$this->_db_host;dbname=$this->_db_name;charset=utf8", $this->_db_user, $this->_db_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$this->_db = $pdo;
		}
		
		return $this->_db;
	}


	public function findUser($id) {

		$req = $this->getDB()->prepare('SELECT username FROM users WHERE id = ?');
		$req->execute([$id]);
		return $req->fetchColumn();

	}
}