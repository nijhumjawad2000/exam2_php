<?php session_start(); 
if(!isset($_SESSION['UserData']['Email'])){
header("location:login.php");
}
?>
<a href="logout.php">log out</a>
<img style="height: 20%; width: 20%;"src="1.jpg">