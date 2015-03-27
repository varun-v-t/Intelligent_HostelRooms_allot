<?php
mysql_connect("127.0.0.1","root","") or die(mysql_error());
mysql_selectdb("logindb") or die(mysql_error());

$id=addslashes($_REQUEST['id']);
$image=mysql_query("SELECT * FROM photo2 WHERE id=$id");
$image=mysql_fetch_assoc($image);
$image=$image['image'];
header("CONTENT-type:image/jpeg");
echo $image;

?>
