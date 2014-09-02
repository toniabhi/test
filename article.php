<?php
session_start();
$nm=$_SESSION['uname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    
    <link rel='stylesheet' href='article.css' type='text/css'/>  
   <title>Article Page</title>
   <script type="text/javascript">
function disp_text()
   {
   var w = document.registration.state.selectedIndex;
   
   document.registration.txt00.value=document.registration.state.options[w].text;
   }
</script>
  </head>
  <body style="background-image:radial-gradient(#a696df,#6a5ea6);">
  <header>
      <p style="color:white;font-size:20px;margin:2px;margin-top:20px;margin-left:10%;"><img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> 
    </p>
<div style="margin-top:-40px;margin-left:80%;">
  <p style="font-weight: bold; color:white;">Welcome:</style> <?php echo $nm; ?> <a style="text-decoration:none;color:red;" href="logout.php">&nbsp;&nbsp;&nbsp;Logout</a></p>
</div>
</header>       
<br>

<div style="margin-left:20%">   
<form style="margin-top:60px;" name="article" method="post" action="a.php">
       <h3> Title of article</h3><input type="text" name="title" size="50" style="height:30px;text-indent:20px;margin-top:-30px;" placeholder="Enter the title" />
    <div class="option">  
<SELECT NAME="state" style="margin-right:2px;height:23px;width:100%;">
<OPTION VALUE="private">private
<OPTION VALUE="public">public
</SELECT>
</div>
      <h4> About Article</h4><textarea rows="25" cols="90" name="des" style="margin-top:-10px;">
       </textarea>
       <input type="submit" name="submit" value="Post" style="width:10%; height:30px;">
      </form>

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
