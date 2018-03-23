<?php
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
mysql_connect('Localhost','root','');
mysql_select_db("biet");

$query="select * from register where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	header("Location:profile.php");
}
else
{
header("Location:login.php");	
}
?>