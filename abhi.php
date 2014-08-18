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
	<body style="background-color:#9966FF">
  <div id="page-wrapper">
  <div id= "page-content">
  <div>
  <p><header>
   <div class="toni">
    <p style="color:white;font-size:25px; margin-left:5%;"><img src="aaa.png" width="30px" height="25px" align="middle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> </p></div>
    </header><br><br><br>

    <p style="text-align:left; font-size:30px; color:white; margin-left: 5%;">Welcome
    <span style="background-color:; padding:4px; color: black;"><?php echo "".$fname . "".  $lname; ?></span>
    </div></p>  
    <div class="box2">continue to the page you were on</div>
    
    <p style="text-align:left; font-size:20px; color:white; margin-left: 5%;">Please check your inbox for an email that will confirm your email address.</p> <br /><br>
    <div class="cent" align="center">
<img src="complete.jpg" width="20%" height="30%" />
<img src="article.png" width="20%" height="30%" />
<img src="forum.png" width="20%" height="30%" />
</div>
   <footer
    <p style="font-family:arial;color:white;font-size:20px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &copy;2004-2014 Innotrainning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contactus.htm" style="text-decoration:none; color:white">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="privacy.htm" style="text-decoration:none; color:white">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="terms.htm" style="text-decoration:none;color:white  ">Terms</a>
     </p>
    </footer></p>
    </div>
    </div>
    <div id="popup-content" style="display:block; top:50px; left:35%; ">
    <h2> Enter your name:</h2>
    <div>
    <p>
    <form method="post" action="check.php">
    <input type="text" name="name" placeholder="Enter your name" required>
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

  
