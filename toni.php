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
	<body style="background-image:radial-gradient(#a696df,#6a5ea6);">
  <div id="page-wrapper">
  <div id= "page-content">
    <p><header>
   <div class="toni">
    <p style="color:white;font-size:25px; margin-left:5%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> 
      <a href="logout.php" style="margin-top:-38px;margin-left:800px;text-decoration:none">Logout</a>
    </p></div>
    </header><br><br><br>
<div style="margin-top:40px">
    <p> <span style="text-align:left; font-size:30px; color:white; margin-left: 11%;font-family: arial;font-weight:bold">Welcome</span>
    &nbsp;<a href="toni.php" style="text-decoration:none; color:white"><?php echo $pr; ?>
    </a></div></p>
 <div class="box2">continue to the page you were on</div>
    <button type="button" onclick="return display();"> Edit your name</button>
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

  

