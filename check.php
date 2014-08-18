<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("test");
$t=$_SESSION['email'];
if(isset($_SESSION['email']) && isset($_POST['submit']))
{
	$name=$_POST['name'];
$query=mysql_query("SELECT * from register where email='$t'");
while($info=mysql_fetch_array($query))
{
	$nm=$info['fname'];
}
if($nm==$name)
{
	
	header("Location: toni.php");
}
else if($nm=='')
{
	mysql_query("UPDATE register SET fname='$name' WHERE email='$t'");
	header("Location: toni.php");
}
else
{
	header("Location: abhi.php");
	}
}
?>