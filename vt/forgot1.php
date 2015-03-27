<!DOCTYPE html>
<html>
<head>
<title>HOME PAGE</title>
<style type="text/css">
body{margin:0 auto;width:1200px;position:relative;}
div.navMENU{width:100%; height:70px;}
div.navMENU ul{list-style-type:none; padding:0px; margin:0 auto;}
div.navMENU li{float:left; padding:1px; margin:0px;}
div.navMENU a{display:block; width:180px;height:30px;border-radius:7px; -webkit-border:5px;border-color:#000000;border-width:5px}
a:link{font-weight:bold;font-size:20px; background-color:#0000a0;text-align:center; text-decoration:none;padding:7px;}
a:hover{background-color:#800000;}


 </style>
</head>
<body background="hostelimg.jpg" width=980px>

<div class="navMENU">
<h1 style="text-align:center;">ST JOSEPH'S HOSTEL</h1>
<ul>
<li><a href="project.html"><font color="white">HOME</font></a></li>
<li><a href="about.html"><font color="white">ABOUT</font></a></li>
<li><a href="gallery.html"><font color="white">GALLERY</font></a></li>
<li><a href="registration.html"><font color="white">REGISTRATION</font></a></li>
<li><a href="contact.html"><font color="white">CONTACT US</font></a></li>
<li><a href="login1.html"><font color="white">LOGIN</a></font></li>
</ul>
</div>
<br>


<?php
require ('sql_connect.php');
if(isset($_POST['submit'])){
$username=$_POST['uname'];
$secu=$_POST['secu'];
$ans=$_POST['ans'];
if(!$_POST['uname'] | !$_POST['secu'] | !$_POST['ans'])
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('you did not fill all required fields')
window.location.href='login1.html'
</SCRIPT>");
exit();
}
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";
$sql=mysql_query("SELECT * FROM login_users WHERE username='".$username."' AND secu='".$secu."' AND ans='".$ans."'");
//echo mysql_num_rows($sql);
if(mysql_num_rows($sql)==1)
{
$row = mysql_fetch_array($sql);
print 'your password is '.$row['password'];
}
else{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('wrong combination...plz reenter.')
window.location.href='login1.html'
</SCRIPT>");
exit();
}
}
?>
<form align="center" action="login1.html">
<input type="submit" value="BACK">
</form>
</body>
</html>