<!DOCTYPE html>
<html>
<body>
<title>HOME PAGE</title>
<style type="text/css">
body{margin:0 auto;width:1200px;position:relative;}
div.navMENU{width:100%; height:70px;}
div.navMENU ul{list-style-type:none; padding:0px; margin:0 auto;}
div.navMENU li{float:left; padding:1px; margin:0px;}
div.navMENU a{display:block; width:180px;height:30px;border-radius:7px; -webkit-border:5px;border-color:#000000;border-width:5px}
a:link{font-weight:bold;font-size:20px; background-color:#0000a0;text-align:center; text-decoration:none;padding:7px;}
a:hover{background-color:#800000;}
p{
border-width:5px;
border-color:green;
border-style:groove;
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
<br>
<br>
<br>
<br>
<H3><b><center>PREFERENCE PAGE</center></b></H3>
<p align="center">
<br/>
<?php
require ('sql_connect.php');
$sname=$_POST['sname'];
$nationality=$_POST['nationality'];
$state=$_POST['state'];
$city=$_POST['city'];
$religion=$_POST['religion'];
$course=$_POST['course'];
$language=$_POST['language'];
$result = mysql_query("SELECT * FROM register1_users");

while($row = mysql_fetch_array($result)) {

mysql_query("
	UPDATE register1_users 
    SET room = 0
");}

$k=1;
$result = mysql_query("SELECT * FROM register1_users");
while($row = mysql_fetch_array($result)) {
if($row['pref']==0){
mysql_query("
    UPDATE register1_users 
    SET room = room + 1
    WHERE nationality = '".$nationality."'
");
}}
$result = mysql_query("SELECT * FROM register1_users");
while($row = mysql_fetch_array($result)) {
if($row['pref']==0){
mysql_query("
	UPDATE register1_users 
    SET room = room + 1
    WHERE state = '".$state."'
");
}}
$result = mysql_query("SELECT * FROM register1_users");

while($row = mysql_fetch_array($result)) {
if($row['pref']==0){
mysql_query("
	UPDATE register1_users 
    SET room = room + 1
    WHERE city = '".$city."'
");}}

$result = mysql_query("SELECT * FROM register1_users");

while($row = mysql_fetch_array($result)) {
if($row['pref']==0){
mysql_query("
	UPDATE register1_users 
    SET room = room + 1
    WHERE course = '".$course."'
");
}}

$result = mysql_query("SELECT * FROM register1_users");

while($row = mysql_fetch_array($result)) {
if($row['pref']==0)
{
mysql_query("
	UPDATE register1_users 
    SET room = room + 1
    WHERE language = '".$language."'
");}}

$result = mysql_query("SELECT * FROM register1_users");

while($row = mysql_fetch_array($result)) {
if($row['pref']==0){
mysql_query("
	UPDATE register1_users 
    SET room = room + 1
    WHERE religion = '".$religion."'
");
}}
$result = mysql_query("SELECT * FROM register1_users");
while($row = mysql_fetch_array($result)) {

mysql_query("
	UPDATE register1_users 
    SET room = 0
    WHERE pref = 1
");
}
$result = mysql_query("SELECT * FROM register1_users ORDER BY room DESC");
$result1 = mysql_query("SELECT * FROM register_users");
$i=1;
echo "<b>"."we suggest you following top 5 roommates according to your prefrences";
while($row = mysql_fetch_array($result) AND $i<6) {
  echo "<br>";
  echo $i.")";
  echo "id:  ".$row['id']."<br>";
  echo "name:  ".$row['name']."<br>";
  echo "  nationality:  ".$row['nationality']."<br>";
  echo "  state:  ".$row['state']."<br>";
  echo "  city:  ".$row['city']."<br>";
  echo "  religion:  ".$row['religion']."<br>";
  echo "  course:  ".$row['course']."<br>";
  echo "  language:  ".$row['language']."<br>";
  echo "  <br>  ";
  $i=$i+1;
}
$t=1;
$insert="INSERT into register1_users(name,nationality,state,city,religion,course,language,pref) VALUES ('".$sname."','".$nationality."','".$state."','".$city."','".$religion."','".$course."','".$language."','".$k."')";
$qry=mysql_query($insert);



/*
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='page2.html'
</SCRIPT>");
*/
?>
</p>
<div align="center">
<h3><center>PLEASE ENTER THE ID OF THE PARTNER YOU HAVE CHOSEN</center></h3></br></br>
<h3><center>PLEASE ENTER 0 IF YOU WANT A NEW ROOM IF AVAILABLE</center></h3>
<form method="POST" action="select2.php">
<input type="int" name="id" size=25 align="center"><br>
<input type="submit" name="submit" align="center" value="NEXT" style="width: 60px;height: 30px; margin: 20 auto;" />
</form>
</div>
</body>
</html>

