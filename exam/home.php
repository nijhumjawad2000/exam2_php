<?php session_start(); 
if(!isset($_SESSION['UserData']['Email'])){
header("location:login.php");
}
?>
welcome<br><a href="logout.php">log out</a><br>
view image<br><a href="home2.php" target="_blank">click me</a>