<?php
require ('sql_connect.php');
$uname=$_POST['uname'];
$pword=$_POST['pword'];
$cpword=$_POST['cpword'];
$secu=$_POST['secu'];
$ans=$_POST['ans'];
$captcha=$_POST['captcha'];

echo $uname;
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
if($cpword==$pword)
{
if(isset($_POST['policy']))
{
if($captcha==504)
{
$insert="INSERT into login_users(username,password,secu,ans) VALUES ('".$uname."','".$pword."','".$secu."','".$ans."')";
echo $insert;
$qry=mysql_query($insert);
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='end.html'
</SCRIPT>");
}
else{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('captcha text is incorrect....enter correct captcha text')
window.location.href='page4.html'
</SCRIPT>");
exit();
}
}
else
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('to register please check terms and policies')
window.location.href='page4.html'
</SCRIPT>");
exit();
}
}
else
{
echo("<SCRIPT LANGUAGE='JavaScript'>
window.alert('password not matching...plz reenter.')
window.location.href='page4.html'
</SCRIPT>");
exit();
}
?>