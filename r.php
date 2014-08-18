<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("test");
$t=$_SESSION['email'];
if(isset($_POST['submit']))
{
	$a=$_POST['name'];
	mysql_query("UPDATE register SET fname='$a' WHERE email='$t'");
}
header("Location: toni.php");
?>
