<?php
//include 'loginaction.php';
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";
session_start();

$conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    //$uploadOk = 0;
//}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
	if (file_exists($target_file)) {
         echo "Sorry, file already exists.";
         $uploadOk = 0;
        }else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$userr=$_SESSION['login_user'];
		//echo $userr;
		$image= basename( $_FILES["fileToUpload"]["name"]);
		
		//echo $image;
		$sql= "INSERT INTO `login_image` VALUES ('$userr','$image')";
		if($conn->query($sql)=== TRUE){
			//$_SESSION['profile_pic'] = $image;
	        header('Location: home.php');
	      // echo "data inserted";
       }else{
	      echo "data failed...";
            }

    } else {
        echo "Sorry, there was an error uploading your file.";
		}}
}
$conn->close();
?>