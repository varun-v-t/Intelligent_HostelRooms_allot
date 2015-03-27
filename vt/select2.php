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
<br><br><br><br><br><br>
<H3><b><center>CONGRATULATIONS.....</center></b></H3></BR></BR>
<H3><b><center>YOU ARE NOW A HOSTELITE OF ST JOSEPHS HOSTEL </center></b></H3></BR></BR>
<H3><b><center>YOU HAVE GIVEN FOLLOWING DETAILS </center></b></H3></BR>
<p align="center">

<br/>
<?php
require ('sql_connect.php');
$id=$_POST['id'];



if($id!=0)
{$k=1;
$result = mysql_query("SELECT * FROM register1_users");
while($row = mysql_fetch_array($result)) {
mysql_query("
    UPDATE register1_users 
    SET pref = $k
    WHERE id = '".$id."'
");
}
}

else
{
//SELECT id from register1_users ORDER BY id DESC LIMIT 1
$result = mysql_query("SELECT id from register1_users ORDER BY id DESC LIMIT 1");
while($row = mysql_fetch_array($result)) {
$lastid=$row['id'];
}
$k=0;

//$row1=mysql_fetch_array($last);

mysql_query("
    UPDATE register1_users 
    SET pref = $k
	WHERE id = '".$lastid."'
");
}

$result=mysql_query("SELECT * from register1_users ORDER BY id DESC LIMIT 1");
$row = mysql_fetch_array($result);
echo "<br>";
  
  echo "ID:           ".$row['id']."<br>";
  echo "NAME:         ".$row['name']."<br>";
  echo "NATIONALITY:  ".$row['nationality']."<br>";
  echo "STATE:        ".$row['state']."<br>";
  echo "CITY:         ".$row['city']."<br>";
  echo "RELIGION:     ".$row['religion']."<br>";
  echo "COURSE:       ".$row['course']."<br>";
  echo "LANGUAGE:     ".$row['language']."<br>";
  echo "  <br>  ";

echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='page4.html'
</SCRIPT>");

?>
<FORM method="post" action="page4.html">
<p align="center"><input type="submit" name="submit" value="NEXT" style="width: 60px;height: 30px; margin: 20 auto;" /></p></FORM>
</body>
</html>