<?php
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";

//if($_SERVER["REQUEST_METHOD"] == "GET") {
$conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }
 if(isset($_POST) && !empty($_POST)){
     
	 $user = $_POST["user"];
 
 
 $sql= "SELECT * FROM `login` WHERE user_id='$user'";
 $result= $conn->query($sql);
 if($result->num_rows>0){
	 while($row = $result->fetch_assoc()){
			//print_r($row)."<br>";
			echo $row['first_name']."<br>";
	 }
 }
 $conn->close();
}
?>