<?php
require ('sql_connect.php');
$choice=$_POST['choice'];
//echo "SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'";

//echo mysql_num_rows($sql);
if($choice==1)
{
$result = mysql_query("SELECT * FROM register1_users");
while($row = mysql_fetch_array($result)) 
{
mysql_query("
    UPDATE register1_users 
    SET room = room + 1
    WHERE nationality = '".$nationality."'
");
}
}
echo("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='page2.html'
</SCRIPT>");
?>