<head>
<link href="home.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="js/home.js"></script>-->
<?php
include 'loginaction.php';
$server_name= "localhost";
$user_name= "root";
$password= "";
$db= "record";
	
$conn= new mysqli($server_name,$user_name,$password,$db);
 if($conn->connect_error){
	 die("Connection failed..." .$conn->connect_error);
 }
 $us=$_SESSION['login_user'];
 $sql= "SELECT * FROM `login` WHERE user_id='$us'";
 $result= $conn->query($sql);
 if($result->num_rows>0){
	 while($row = $result->fetch_assoc()){
		
			//print_r($row);
			//echo $row['first_name'];
			

?>

<h1 class="welcome">Welcome <?php echo $row['first_name'];?></h1><br>
  <div class="logout">
    <form action="logout.php">
      <button type="submit"><a href="logout.php"></a>Logout</button>
    </form>
  </div>
 <!-- <div class="profile_pic">
             <div class="upload_icon" id="icon"></div>
        </div>-->
  <?php
  $uss=$_SESSION['login_user'];
  $sqll= "SELECT `profile_pic` FROM `login_image`  WHERE user_id='$uss'";
    $resultt= $conn->query($sqll);
 if($resultt->num_rows>0){ 

	$roww = $resultt->fetch_assoc();
		//print_r($roww);die;
        ?>
        <div class="profile_pic" style="background-image: url(uploads/<?php echo $roww['profile_pic'];?>);">
             <div class="upload_icon" id="icon"></div>
        </div>
		<?php
		//print_r($roww);die;
		
 }
 //echo $roww['profile_pic'];
		?>
<div class="upload_file" id="file">
<form action="profileact.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
<?php
}
 }
 $conn->close();
?>
<script>
    $(document).ready(function(){
    $("#icon").click(function(){
      $("#file").show();
	  //alert("hello");
	   });
	  });
   
</script>

   