<?php
//include 'loginaction.php';
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";

   $user_check = $_SESSION['login_user'];
   
$conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }
 $sql= "SELECT * FROM `login` WHERE user_id='$user_check' and first_name='$name'";
 $result= $conn->query($sql);
 $row = $result->fetch_assoc();
 $login_session = $row['user_id'];
 if(!isset($_SESSION['login_user'])){
      //header("location:login.php");
   }
?>