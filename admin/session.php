<?php 

session_start();

if(!isset($_SESSION["username"]) || $_SESSION["logged_in"] !== true){
	header("location: login.php");
}
?>