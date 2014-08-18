<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("test");
$t=$_SESSION['email'];
$name=$_POST['name'];
$pname=mysql_query("select fname from register where email='$t'");
while($info=mysql_fetch_array($pname))
{
	echo $pr=$info['fname'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <link rel='stylesheet' href='popup.css' type='text/css'>  
    <link rel='stylesheet' href='style.css' type='text/css'>  
    <script type='text/javascript' src="aa.js"></script>  

   <title> Login Page</title>
  </head>
	<body style="background-color:#9966FF">
  <div id="page-wrapper">
  <div id= "page-content">
  <div>
  <p><header>
   <div class="toni">
    <p style="color:white;font-size:25px; margin-left:5%;"><img src="aaa.png" width="30px" height="25px" align="middle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> 
      <a href="logout.php" style="margin-top:-38px;margin-left:900px;text-decoration:none">Logout</a>
    </p></div>
    </header><br><br><br>

    <p style="text-align:left; font-size:30px; color:white; margin-left: 5%;">Welcome &nbsp;<a href="toni.php" style="text-decoration:none; color:white"><?php echo $pr; ?>
    </a></div></p>  
    <div class="box2">continue to the page you were on</div>
    <button type="button" onclick="return display();"> Edit your name</button>
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
    <div id="aa1">
    <img src="close.png" width="20px" height="20px" style="float:right" onclick="return displaynone();"/>
    <h2> Enter the name For edit</h2>
    <form action="r.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" name="submit" value="Submit"> 
    </form>
    </div>

    <script src ="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
    <script src="popup.js"></script>
	</body>
	</html>	

  

