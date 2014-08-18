<?php
session_start();
if(isset($_POST['submit']))
    {
       $connect=mysql_connect("localhost","root","abhi");
	 mysql_select_db("test",$connect);

      $email=$_POST['email'];
	
      $pass=$_POST['pass'];
	
	 	 $login=mysql_query("SELECT * FROM register WHERE email='$email'");
	 while($log=mysql_fetch_assoc($login))
	  {
	    $dbemail=$log['email'];
		
	    $dbpass=$log['pass'];
           	//new code
		}
	   if($email==$dbemail && $pass==$dbpass)
		{
		  $_SESSION['email']=$dbemail;
		  $_SESSION['pass']=$dbpass;	
			  header("Location: abhi.php");
		}
		else
		{
		header("Location: index.php");
     }
 }
 else
 {
 	header("Location: index.php");
 }
?>
