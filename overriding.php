<?php
class Animal{
	public function move(){
		echo "Animal can move";
	}
}
class Dog extends Animal{
	public function move(){
	echo "Dog can move";
	}
	public function bark(){
		echo "Dog can bark";
	}
}
 $a= new Animal();
 $b= new Dog();
echo $a->move()."<br>";
echo $b->move()."<br>";
$b->bark();
?>