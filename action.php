<?php

require_once("config.php");

$user=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$password=md5($pass);

$query="INSERT into user(name,pass,status,email) VALUES('$user','$password','user','$email')";
$sq=mysqli_query($con,$query);

if($sq)
{
	header("Location:login.php");
}
else
{

  header("Location:sign.php?value=fail");
}






?>
