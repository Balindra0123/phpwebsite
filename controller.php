<?php
class Controller{
	//private $mode;
	var $name;
	function __Construct(){
		//$this->mode= $mode;
		echo "Constructor from controller"."<br>";
	}
	function logic(){
		$a=140;
		$b=160;
		$c= $a+$b;
		echo $c."<br>";
	} 
	function set($new_name){
		$this->name= $new_name;
	}
	function get(){
		return $this->name;
	}
}
$conn = new Controller();
//$conn->set("Balindra");
//echo $conn->get();
?>