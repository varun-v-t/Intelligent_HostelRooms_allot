<?php
require ('sql_connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['state'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$inquiry=$_POST['inquiry'];
$message=$_POST['message'];

echo $sname;
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
$insert="INSERT into contact_table(name,email,contact,city,state,inquiry,message) VALUES ('".$name."','".$email."','".$contact."','".$city."','".$state."','".$inquiry."','".$message."')";
echo $insert;
$qry=mysql_query($insert);
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='contact.html'
</SCRIPT>");
?>