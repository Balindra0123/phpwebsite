<?php
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";
 
 $conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }
 if(isset($_POST) && !empty($_POST)){
 $sql= "INSERT INTO `login`(`first_name`, `last_name`, `user_id`, `password`, `location`) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['user_id']."','".$_POST['pass']."','".$_POST['location']."')";
 }
 if($conn->query($sql)=== TRUE){
	
	header('Location: login.php'); 
}else{
	echo "Registration failed...";
}
 
$conn->close();
 
 ?>