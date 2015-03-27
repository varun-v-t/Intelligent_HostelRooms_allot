<?php
require ('sql_connect.php');
$from=$_POST['username'];
$message=$_POST['message'];


//echo $sname;
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
$insert="INSERT into message_box(fromstud,message) VALUES ('".$from."','".$message."')";

//echo $insert;
$qry=mysql_query($insert);
echo("<SCRIPT LANGUAGE='JavaScript'>window.location.href='create.html'</SCRIPT>");
?>