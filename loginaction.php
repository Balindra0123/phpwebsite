<?php
//include 'userDetail.php';
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      
     // $user = mysqli_real_escape_string($db,$_POST['user']);
     // $pass = mysqli_real_escape_string($db,$_POST['pass']);
 
 $conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }
   //if (isset($_POST['user']) and isset($_POST['pass'])){
     $user = $_POST["user"];
	 $pass = $_POST["pass"];
	 //$name= $_POST["fname"];
 
 $sql= "SELECT * FROM `login` WHERE user_id='$user' and password='$pass'";
 $result= $conn->query($sql);
 if($result->num_rows>0){
         //$row = $result->fetch_assoc();	
		while($row = $result->fetch_assoc()){
			$_SESSION['login_user'] = $user;
			//$_SESSION['usernam'] = $name;
			//echo $user;
			//print_r($row);
			//echo $row['first_name'];
		//die;//$id=$row["user_id"];
		
		//$pwd=$row["password"];
		     class A{
			public function name(){
				$row['first_name'];
			}
		}
		
		 if($row["user_id"]==$user && $row["password"]==$pass){
			 echo $row['first_name'];
		 		header('Location: home.php');
		 }}}else{
	 echo "You went Wrong...!!!!";
	 
	 //echo $id;
	// echo $pwd;
 }
   
 //}
 $conn->close();
 }
?>