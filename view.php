<?php

require_once('../mvc/model.php');
require_once('../mvc/controller.php');


class View{
	private $model;
	private $controller;
	function __construct($model,$controller){
		$this->model= $model;
		$this->controller= $controller;
	}
	function output(){
		echo "<h1>".$this->model->string."</h1>";
	}
}
$modell= new Model();
//echo $modell->string;
$controller= new Controller($modell);
echo "<br>";
echo $controller->logic();
$controller->set("jhfjhgjhgjhg");
echo $controller->get();

//$this->get();
//echo $name;
//echo $controller->modell->string;
$view= new View($modell,$controller);
echo $view->output();
?>