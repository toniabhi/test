<?php
session_start();
if(isset($_POST['submit']))
    {
       $connect=mysql_connect("localhost","root","abhi");
	 mysql_select_db("users",$connect);

      $uname=$_POST['uname'];
	
      $pass=$_POST['pass'];
	
	 	 $login=mysql_query("SELECT * FROM login WHERE uname='$uname'");
	 while($log=mysql_fetch_assoc($login))
	  {
	    $dbuname=$log['uname'];
		
	    $dbpass=$log['pass'];
	    $password= md5($pass);
	    $desi = $log['mylist'];
           	//new code
		}
	   if($uname==$dbuname && $password==$dbpass)
		{
		  $_SESSION['uname']=$dbuname;
		  $_SESSION['pass']=$dbpass;	
			  if($desi=='teacher')		
			  header("location:teacher.php");
			else						  							
			header("location:student.php");
		}
		else
		{
		$msg = "Enter Correct username or password.";
                $msgEncoded = base64_encode($msg);
                header("location:index.php?msg=".$msgEncoded);
     }
 }

?>