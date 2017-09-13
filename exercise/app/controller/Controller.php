<?php 

namespace app\controller;

class Controller
{
    private $model;
    private $page = 'accueil';

    public function __construct($model){
        $this->model = $model;
    }

    public function routing($page) {
    	$this->page = $page;
    }

    public function getPage() {
    	return $this->page;
    }

    public function register($post) {
    	//var_dump($post);

    	// validation
    	// maybe create array with filter_var used for which $key

    	// sanitization

    	$user = [
    		'name' => $post['name'],
    		'email' => $post['email'],
    		'pw' => $post['pw']
    	];

    	$this->model->insert($user);

    }

    public function login($post) {
    	$user = [
    		'name' => $post['name'],
    		'pw' => $post['pw']
    	];

    	$this->model->getUser($user);
    }
}