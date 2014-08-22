<?php
mysql_connect("localhost","root","abhi");
mysql_select_db("test");
$email=$_POST['email'];

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
    $nn=$_POST['nn'];
	$query=mysql_query("SELECT * from register WHERE email='$email'");
	while($n=mysql_fetch_array($query))
	{
		$pass1=$n['pass'];

	}
	if($pass==$pass1)
	{
	mysql_query("UPDATE register SET fname='$nn' WHERE email='$email'");
	header("Location: index.php");
	}
	else
	{
		header("Location: forget.php");
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <link rel='stylesheet' href='style.css' type='text/css'/>  
   <title> Login Page</title>
  </head>
	<body style="background-image:radial-gradient(#a696df,#6a5ea6);">
	<header>
  <div class="toni">
    <p style="color:white;font-size:25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> </p></div>
    </header><br><br><br><br>
	    <h1 style="text-align:center; color:white;font-family:arial;font-size:30px;">Please Complete Your Details</h1>
	    <center>
	    <form action="forget.php" method="POST">
	    <div class="mail">
         <input class="mainlogininput" type="email" id="mail" name="email" placeholder="&nbsp;&nbsp;Enter email" size="50" style="margin-left:0px">
         </div>
<div class="pass">	
         <input class="mainlogininput" type="password" id="pass" name="pass" placeholder="&nbsp;&nbsp;Create a password" size="50" style="margin-left:0px">
   </div>
<div class="uname">
         <input class="mainlogininput" type="text" id="uname" name="uname" placeholder="&nbsp;&nbsp;Enter username" size="50" style="margin-left:0px">
   </div>
<div class="sign" style="margin-top:20px;height:40px;">
    <input type="submit" id="submit" id="uname" name="submit" value="Submit for Edit" style="font-weight:bold; font-size:20px;">
    </div>
</form>	
  </center>
   <footer style="height:15%;">
    <p style="font-family:arial;color:white;font-size:14px; opacity:0.6;margin-left:110px; margin-top:20px;">&copy; 2004-2014 Innotrainning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contactus.htm" style="text-decoration:none; color:white">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
     <a href="privacy.htm" style="text-decoration:none; color:white">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="terms.htm" style="text-decoration:none;color:white">Terms</a>
     </p>
    </footer>  
	</body>
	</html>