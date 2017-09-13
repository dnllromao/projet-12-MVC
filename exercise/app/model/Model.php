<?php 

namespace app\model;
use \PDO;

class Model {

	private $host;
	private $dbname;
	private $username;
	private $password;
	private $db;
	private $user;

	public function __construct($dbname, $host='localhost', $username='root', $password='root') {
		$this->host = $host;
		$this->dbname = $dbname;
		$this->username = $username;
		$this->password = $password;

		if( !empty($_SESSION['user'])) {
			$this->user['name'] = $_SESSION['user'];
		}

	}

	private function getDb() {

		if(empty($db)) {
			try {
			$db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			} catch (Exception $e){
				die('Error: '.$e->getMessage());
			}

			$this->db = $db;
		}

		return $this->db;
	}

	public function insertUser($user) {

		$req = $this->getDb()->prepare('INSERT INTO users(username, email, password) VALUES (:username, :email, :password)');
		$inserted = $req->execute([
			'username' => $user['name'],
			'email' => $user['email'],
			'password' => $user['pw']
		]);

		if($inserted) {
			$this->user = [
							'id' => $this->getDb()->lastInsertId(),
							'name' => $user['name'],
							'email' => $user['email'],
							'password' => $user['pw']
						];

			$_SESSION['user'] = $this->user['name'];

		}

	}

	public function getUser($user) {
		$req = $this->getDb()->prepare('SELECT paswword FROM users WHERE username = :username');
		$resp = $req->query([
			'username' => $user['name']
		]);


	}

	public function greeting() {
		if(empty($this->user)) {
			return 'Coucou l\'inconnu';
		} else {
			return 'Coucou '.$this->user['name'];
		}
	}
}
