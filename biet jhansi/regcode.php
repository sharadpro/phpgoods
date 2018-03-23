<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['a'];
//echo $gender;
$email=$_POST['email'];
//echo $email;
$password=$_POST['pass'];
//echo $password;
$mobile=$_POST['mobile'];
//echo $mobile;
mysql_connect('localhost','root','');
mysql_select_db("biet");
$query="insert into register(name,gender,password,email,mobile) values('$name','$gender','$password','$email','$mobile')";
mysql_query($query);
header("Location:index.html");

?>