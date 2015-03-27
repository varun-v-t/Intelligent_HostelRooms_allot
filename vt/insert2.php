<?php
require ('sql_connect.php');
$sname=$_POST['sname'];
$nationality=$_POST['nationality'];
$state=$_POST['state'];
$city=$_POST['city'];
$religion=$_POST['religion'];
$course=$_POST['course'];
$language=$_POST['language'];

echo $sname;
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
$insert="INSERT into register1_users(name,nationality,state,city,religion,course,language) VALUES ('".$sname."','".$nationality."','".$state."','".$city."','".$religion."','".$course."','".$language."')";
echo $insert;
$qry=mysql_query($insert);
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='page2.html'
</SCRIPT>");
?>