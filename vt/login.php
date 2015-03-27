<?php
require ('sql_connect.php');
if(isset($_POST['submit'])){
$username=$_POST['uname'];
$password=$_POST['pass'];

if($username=="admin" AND $password=="admin")
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('admin page....!')
window.location.href='admin.php'
</SCRIPT>");
exit();}
else{
if(!$_POST['uname'] | !$_POST['pass'])
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('you did not fill all required fields')
window.location.href='login1.html'
</SCRIPT>");
exit();
}
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";
$sql=mysql_query("SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'");
//echo mysql_num_rows($sql);
if(mysql_num_rows($sql)==1)
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('login sucessful!')
window.location.href='message.html'
</SCRIPT>");
exit();
}
else{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('wrong combination...plz reenter.')
window.location.href='login1.html'
</SCRIPT>");
exit();
}
}
}
?>