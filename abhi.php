<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("test");
if (isset($_POST['submit']))
{
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
mysql_query("INSERT INTO register(email, uname, pass) VALUES('$email','$uname','$pass');");

$_SESSION['email']=$email;
echo "<form action='abhi.php' method='post'>";
echo "<input type='text' name='fname' placholder='Enter Firstname'/>" . "<input type='text' name='lname' placholder='Enter Lastname'/>";
echo "<input type='submit' name='submit' value='Register'/>"."</form>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <link rel='stylesheet' href='popup.css' type='text/css'>  
    <link rel='stylesheet' href='style.css' type='text/css'>  

   <title> Login Page</title>
  </head>
	<body style="background-image:radial-gradient(#a696df,#6a5ea6);">
  <div id="page-wrapper">
  <div id= "page-content">
  <div>
  <header>
  <div class="toni">
    <p style="color:white;font-size:25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> </p></div>
    </header><br><br><br>

    <div style="margin-top:40px">
    <p> <span style="text-align:left; font-size:30px; color:white; margin-left: 11%;font-family: arial;font-weight:bold">Welcome</span>
    <span style="background: linear-gradient(gold, orange); padding:10px; width:500px; border:1px; margin:5px;color:#303030;text-align:left; font-size:20px; "Times New Roman", Times, serif;">&nbsp;&nbsp;&nbsp;First name &nbsp;Last name&nbsp;&nbsp;&nbsp;</span>
    </div> 
    <div class="box2" style="font-family:arial; font-size:13px; padding:10px;color:#303030;font-weight:bold">&nbsp;&nbsp;Continue to the page you were on</div>
    
    
    <p style="text-align:left; font-size:17px; color:white; margin-left:11%;font-family:arial; font-weight:bold;">Please check your inbox for an email that will confirm your email address.</p> <br /><br>
    <div class="cent" align="center" style="margin-top:20px">
<img src="complete.jpg" width="25%" height="35%" style="marign-left:5px; margin-right:20px" />
<img src="article.png" width="25%" height="35%" style="marign-left:5px; margin-right:20px" />
<img src="forum.png" width="25%" height="35%" />
</div>
   <footer style="height:15%;">
    <p style="font-family:arial;color:white;font-size:14px; opacity:0.6;margin-left:110px; margin-top:20px;">&copy; 2004-2014 Innotrainning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contactus.htm" style="text-decoration:none; color:white">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
     <a href="privacy.htm" style="text-decoration:none; color:white">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="terms.htm" style="text-decoration:none;color:white">Terms</a>
     </p>
    </footer>
    </div>
    </div>
    <div id="popup-content" style="display:block; top:50px; left:35%; ">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter your name:</h2>
    <div>
    <p>
    <form method="post" action="check.php">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="&nbsp;&nbsp;Enter your name" required>
    <input type="submit" name="submit" value="Submit">
    </form>
    </p>
    </div>
    </div>
    <div id="overlay-bg" style="display:block;"></div>
    <script src ="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
    <script src="popup.js"></script>
	</body>
	</html>	

  
