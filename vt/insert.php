<?php
require ('sql_connect.php');
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$add=$_POST['add'];
$email=$_POST['email'];
$contact=$_POST['contact'];

echo $sname;
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
$insert="INSERT into register_users(name,dob,fname,mname,address,email,contact) VALUES ('".$sname."','".$dob."','".$fname."','".$mname."','".$add."','".$email."','".$contact."')";
echo $insert;
$qry=mysql_query($insert);
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='index.php'
</SCRIPT>");
?>