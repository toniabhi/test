<?php
session_start();
if($_SESSION['email'] ||$_SESSION['pass'])
     {
	session_destroy();
 	header("location:index.php");
     } 
?>
