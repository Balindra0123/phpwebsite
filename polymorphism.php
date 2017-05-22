<?php
interface Shape{
	public function area();
}
class Circle implements Shape{
	private $radius;
	
	public function __construct($radius){
		$this->radius= $radius;
	}
	public function area(){
		return $this->radius * $this->radius * pi();
	}
}
class Rectangle implements Shape{
	private $height;
	private $width;
	
	public function __construct($height,$width){
		$this->height= $height;
		$this->width = $width;
	}
	public function area(){
		return $this->height * $this->width;
	}
}
$cir= new Circle(3);
$rect= new Rectangle(20,30);
echo $cir->area()."<br>";
echo $rect->area();
?>