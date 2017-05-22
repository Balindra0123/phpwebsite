<?php
include("home.php");

if(session_destroy()) 
{
	//echo "cvhvx";die;
header("Location: login.php"); 
}
?>