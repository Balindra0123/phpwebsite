<?php
interface Car{
	public function setModel($name);
	public function getModel();
}
interface Vehicle{
	public function setWheel($wheel);
	public function getWheel();
}
class Minicar implements Car,Vehicle{
	private $model;
	private $hasWheel;
	public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
	
	public function setModel($name){
		$this->model=$name;
    }
	public function getModel(){
		return $this->model;
	}
	
	public function setWheel($wheel){
		$this->hasWheel = $wheel;
	}
	public function getWheel(){
		return $this->hasWheel;
	}
} 

$obj= new Minicar();
$obj->setModel("BMW");
echo "Name of the Car:".$obj->getModel()."<br>";
$obj->setWheel("Four wheeler");
echo "It is ".$obj->getWheel();
var_dump($obj);
?>