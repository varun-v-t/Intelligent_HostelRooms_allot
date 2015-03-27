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

table, th, td {
   border: 5px groove green;

   border-collapse: collapse;
   text-align: center;
   background-color: lightblue;
}

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
<H3><b><center>ADMIN INBOX</center></b></H3>

<p align="center">

<br/>
<?php
require ('sql_connect.php');

$result=mysql_query("SELECT * from message_box");
echo "<center>";
echo ("<table border=1>
 <tr>
 <th><h3>FROM</h3></th>
 <th><h3>MESSAGE</h3></th>
 </tr>");
while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>";

  
  echo $row['fromstud'];
    echo "  <br>  ";
  echo "  <br>  ";
  echo "</td>";
  echo "<td>";
  echo $row['message'];
    echo "  <br>  ";
  echo "  <br>  ";
  echo "</td>";

  echo "</tr>";
}
/*echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='page2.html'
</SCRIPT>");*/

echo "</table>";
echo "</center>";
?>
</body>
</html>