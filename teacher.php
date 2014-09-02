  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    
    <link rel='stylesheet' href='article.css' type='text/css'/>  
   <title>User Info</title>
   
  </head>
  <body style="background-image:radial-gradient(#a696df,#6a5ea6);">
  <header>
  <div class="toni">
    <p style="color:white;font-size:20px;margin:2px;margin-top:20px;margin-left:10%;"><img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> 
    </p>
</div>
<div style="margin-top:-40px;margin-left:80%;">
  <p style="font-weight: bold; color:white;"><a style="text-decoration:none;color:red;" href="logout.php">&nbsp;&nbsp;&nbsp;Logout</a></p>
</div>
</header><br><br><br>
<div id="menu">
<ul>
   <li><a href="article.php">Article</a></li>
</ul>
</div>
<footer>
    <p style="font-family:arial;color:white;font-size:12px; opacity:0.4;margin-left:110px;margin-top:17px;">&copy; 2004-2014 innotrainning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contactus.htm" style="text-decoration:none; color:white">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
     <a href="privacy.htm" style="text-decoration:none; color:white">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="terms.htm" style="text-decoration:none;color:white">Terms</a>
     </p>
    </footer>
  </body>
</html>


<?php
session_start();
if($_SESSION['uname'])
{
  $uname=$_SESSION['uname'];
  echo "<B><i><u>";
  echo "<br><br>Welcome: ".$_SESSION['uname'];
  echo "</u></i></b>";
$conn = mysql_connect("localhost","root","abhi");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM login WHERE uname='$uname'";
mysql_select_db('users');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{ echo   "<br><br><br>Email : {$row['email']}  <br> ".
         "Username : {$row['uname']} <br> ".
       	 "Password: {$row['pass']} <br> ".
	       "Firstname : {$row['fname']} <br>".
         "Lastname : {$row['lname']} <br>".
	 "Type : {$row['mylist']} <br>".
         "--------------------------------<br>";
        
} 
mysql_close($conn);
}
else
{
	header("header:index.php");
}
?>
	 
