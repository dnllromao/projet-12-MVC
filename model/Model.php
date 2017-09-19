<?php 

namespace Model;

use \PDO;

class Model {

	private $_db_host = 'localhost';
	private $_db_name = 'mvc';
	private $_db_user = 'root';
	private $_db_pass = 'root';
	private $_db;

	private static $_instance;

	public static function getInstance() {
		if(is_null(self::$_instance)) {
			self::$_instance = new Model();
		}
		
		return self::$_instance;
	}

	private function getDB() {

		if(is_null($this->_db)) {
			$pdo = new PDO("mysql:host=$this->_db_host;dbname=$this->_db_name;charset=utf8", $this->_db_user, $this->_db_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$this->_db = $pdo;
		}
		
		return $this->_db;
	}

	public function find($slug) {
		$req = $this->getDB()->query('
			SELECT * 
			FROM posts 
			WHERE slug = ?
		');
		return $req->fetchObject();
	}

	public function all() {
		$req = $this->getDB()->query('
			SELECT * 
			FROM posts
		');
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
}