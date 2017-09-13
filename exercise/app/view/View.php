<?php 

namespace app\view;

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        ob_start();
        // ? how can get the root directory
    	require '../pages/template.php';
        return ob_get_clean();
    }

    public function content() {
        $page = $this->controller->getPage();

        ob_start();
        // ? how can get the root directory
        require '../pages/'.$page.'.php';
        return ob_get_clean();

    }
}