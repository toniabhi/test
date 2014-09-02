<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("users");

if (isset($_POST['submit']))
{
$title=$_POST['title'];
$des=$_POST['des'];
$uname=$_SESSION['uname'];
$st=$_POST['state'];
mysql_query("INSERT INTO article(title, des,uname,state) VALUES('$title','$des','$uname','$st');");
header("location:article.php");
}
?>