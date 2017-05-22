<?php
class A{ 
public function arr(){
    $cars = array("Volvo", "BMW", "Toyota");
	echo "I llike to ride ".$cars[1]."<br>";
}
public function arrr(){
	$car[0] = "Volvo";
    $car[1] = "BMW";
    $car[2] = "Toyota";
echo "My friend prefer to ride".$car[2]."<br>";
echo "No of cars:".count($car);
}}
$obj= new A();
$obj->arr();
$obj->arrr();
?>