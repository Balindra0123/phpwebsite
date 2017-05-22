<?php
abstract class Car{
	protected $tankVolume;
 abstract public function speed();
 public function setVolume($volume){
	$this->tankVolume= $volume;
}
}
class Honda extends Car{
	public function speed(){
		$miles= $this->tankVolume*30;
		return $miles;
	}
}
class Toyota extends Car{
	public function speed(){
		$miles= $this->tankVolume*33;
		return $miles;
	}
	public function getColor(){
		return "beige";
	}
}
$toy = new Toyota();
$toy->setVolume(10);
echo "Speed per miles:".$toy->speed()."<br>";
echo "Color of Selected model:".$toy->getColor()."<br>";
$hon = new Honda();
$hon->setVolume(20);
echo "Speed of honda car:".$hon->speed();
?>