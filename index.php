<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <link rel='stylesheet' href='styles.css' type='text/css'/>  
   <title> Login Page</title>
   <script type="text/javascript">
function disp_text()
   {
   var w = document.registration.mylist.selectedIndex;
   
   document.registration.txt00.value=document.registration.mylist.options[w].text;
   }
</script>
  </head>
  <body style="background-image:radial-gradient(#a696df,#6a5ea6);">
  <header>
  <div class="toni">
    <p style="color:white;font-size:20px;margin:2px;margin-top:20px;margin-left:10%;"><img src="aaa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inno<font color="gold" >Trainning</font> 
<div style="margin-top:-25px;margin-left:900px">
<form action="login.php" method="post">
<input style="text-indent: 9px;" type="text" name="uname" placeholder="Enter your username">
      <input style="text-indent: 9px;" type="password" name="pass" placeholder="Enter your password">
      <input style="width:10%;" type="submit" name="submit" value="Login">
</form> </div>

    </p>
</div>
</header> 
      <h1 style="text-align:center; color:white;font-family:arial;font-size:30px;text-shadow: 1px 1px #6a5ea6;margin-top:80px;">Please complete your details</h1><br>
      <center>
  <form name= "registration" method="post" enctype="multipart/form-data"s onSubmit="return formValidation();">  
   <div class="mail">
         <input class="mainlogininput" type="email" id="mail" name="email" placeholder="Enter email" size="50" style="margin-left:0px">
         </div>
   <div class="uname">
         <input class="mainlogininput" type="text" id="uname" name="uname" placeholder="Enter username" size="50" style="margin-left:0px">
   </div>
   <div class="pass"> 
         <input class="mainlogininput" type="password" id="pass" name="pass" placeholder="Create a password" size="50" style="margin-left:0px">
   </div>
   <div class="name">
  <input class="mainlogininput1" type="text" id="fname" name="fname" placeholder="First Name" size="23.75%" style="margin-left:0px">
  <input class="mainlogininput1" type="text" id="lname" name="lname" placeholder="Last Name" size="23.75%"style="margin-left:0px">
  </div>
  <br><br><br>
 <div class="option">  
<SELECT NAME="mylist" onChange="disp_text()"style="margin-right:2px;height:23px;width:100%;">
<OPTION VALUE="m1">CHOOSE REGISTER TYPE..
<OPTION VALUE="student">STUDENT REGISTRATION
<OPTION VALUE="teacher">TEACHER REGISTRATION
</SELECT>
</div>

   <br>
   <br>
   <div class="box" style="font-size:small;color:lightblack;">
    <div style="border-radius:3px;height:12px;width:12px;border:#7c70b8 solid 5px; margin-left:-400px">
<input type="checkbox" style="margin-left:0px;margin-top:0px;"/></div><p style="margin-top:-20px;margin-right:7%">&nbsp;Keep me logged in when using this computer</p>
<div style="border-radius:3px;height:12px;width:12px;border:#7c70b8 solid 5px; margin-left:-400px">
<input type="checkbox" style="margin-left:0px;margin-top:0px;"/></div><p style="margin-top:-20px;margin-right:13%">Email me a weekly newsletter</p>
<div style="border-radius:3px;height:12px;width:12px;border:#7c70b8 solid 5px; margin-left:50px;margin-top:-30px;">
<input type="checkbox" style="margin-left:0px;margin-top:0px;"/></div><p style="margin-top:-20px;margin-left:19%">Email me a daily newsletter</p> 
    </div>
    <div class="sign">
    <input type="submit" id="submit" name="submit" value="Complete Sign-Up" style="font-weight:bold"/>
     <input type="hidden" name="txt00" value="pp"/>
    <p style="opacity:0.6;font-size:11px;"> By registering you confirm that you agree with our <br> <span style="line-height:200%;"><font color="white">Terms & Condition</font> and <font color="white">Privacy Policy</font></span></p>
  </div>
   </form>
  </center>
   <footer>
    <p style="font-family:arial;color:white;font-size:12px; opacity:0.4;margin-left:110px;margin-top:17px;">&copy; 2004-2014 innotrainning &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="contactus.htmtoniabhi" style="text-decoration:none; color:white">Contact Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
     <a href="privacy.htm" style="text-decoration:none; color:white">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="terms.htm" style="text-decoration:none;color:white">Terms</a>
     </p>
    </footer>
  </body>
</html>
<?php
SESSION_START();
mysql_connect("localhost","root","abhi");
mysql_select_db("users");
$ch=$_POST['txt00'];
  if($ch=="STUDENT REGISTRATION")
{
if (isset($_POST['submit']))
{
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mylist=$_POST['mylist'];
$password=md5($pass);

$check = mysql_query("SELECT uname FROM login WHERE uname = '$uname'") or die(mysql_error());
  $check2 = mysql_num_rows($check);
   if ($check2 != 0) 
   {                   echo '<b>username Already Used.</b>';
              }
      else
      {
mysql_query("INSERT INTO login(email, uname, pass,fname,lname,mylist) VALUES('$email','$uname','$password','$fname','$lname','$mylist');");

    ?>
      <div style="margin-top:-42%;float:right;"><?php echo "You have been registered"; ?>
</div>  
<?php
      header("location:student.php"); 
   
  }
$_SESSION['email']=$email;

}
}
elseif ($ch=="TEACHER REGISTRATION")
{
if (isset($_POST['submit']))
{
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mylist=$_POST['mylist'];
$password=md5($pass);

$check = mysql_query("SELECT uname FROM login WHERE uname = '$uname'") or die(mysql_error());
  $check2 = mysql_num_rows($check);
   if ($check2 != 0) 
   {                   echo '<b>username Already Used.</b>';
              }
      else
      {
mysql_query("INSERT INTO login(email, uname, pass,fname,lname,mylist) VALUES('$email','$uname','$password','$fname','$lname','$mylist');");
    ?>
    <div style="margin-top:-42%;float:right;"><?php echo "You have been registered"; ?>
</div>  
<?php
      header("location:teacher.php"); 
   
  }
$_SESSION['email']=$email;

}
}
?>
<?php
 $msg = base64_decode($_GET['msg']);
            if(isset($_GET['msg'])){

                if($msg!=""){
                    //echo $msg;
                

?>

<div style="margin-top:-42%;float:right;"><?php echo $msg; ?>
</div>

         <?php
                }
            }
?>
