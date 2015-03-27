<! DOCTYPE html>
<html>
<head>
<title>upload an image2</title>
<style type="text/css">
body{margin:0 auto;width:1200px;position:relative;}
div.navMENU{width:100%; height:70px;}
div.navMENU ul{list-style-type:none; padding:0px; margin:0 auto;}
div.navMENU li{float:left; padding:1px; margin:0px;}
div.navMENU a{display:block; width:180px;height:30px;border-radius:7px; -webkit-border:5px;border-color:#000000;border-width:5px}
a:link{font-weight:bold;font-size:20px; background-color:#0000a0;text-align:center; text-decoration:none;padding:7px;}
a:hover{background-color:#800000;}
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

<h3><center> ENTER A SOFT COPY OF PAN CARD</center></h3>
<form action="index1.php" method="POST" enctype="multipart/form-data" align="center">
<br/><br/><br/>
<p align="center">FILE:&nbsp;&nbsp;&nbsp;<input type="file" name="image"> <input type="submit" value="upload" name="submit"></p>
</form>
<?php
mysql_connect("127.0.0.1","root","") or die(mysql_error());
mysql_selectdb("logindb") or die(mysql_error());

$file=$_FILES['image']['tmp_name'];
if(!isset($file))
echo "please select an image";
else
{
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

$image_name=addslashes($_FILES['image']['name']);
$image_size=getimagesize($_FILES['image']['tmp_name']);
if($image_size==FALSE)
echo "thats not an image";
else
{
if (!$insert =mysql_query("INSERT INTO photo2 VALUES ('','$image_name','$image')"))
echo "problem uploadin image";
else
{
$lastid=mysql_insert_id();
echo "IMAGE UPLOADED.<p />Your image:<p /><img src=get1.php?id=$lastid>";

}
}
}

?>
<form name="registration" method="post" action="pay.html">
<p align="center"><input type="submit" name="submit" value="NEXT" style="width: 60px;height: 30px; margin: 20 auto;" /></p>
</form>

</body>
</html>