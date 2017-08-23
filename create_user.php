<?php
//Create User
include_once('config.php');
if(isset($_POST['Submit']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password = md5($password);
	$department = mysql_real_escape_string($_POST['department']);
	$CheckUserSQL = mysql_num_rows(mysql_query("SELECT * FROM admin_user WHERE username='$username'"));
	if($CheckUserSQL > 0)
	 header('Location: add_user.php?error=Username Exists');
	else
	 {
		 $CreateUser = mysql_query("INSERT into admin_user (username,email,name,password,department,role) values ('$username','$email','$name','$password','$department','admin')");
		 if($CreateUser)
		  header ('Location: add_user.php?success=1');
		 else
		  header("Location: add_user.php?error=Contact Admin");
	 }
}
else
{
	header ('Location: add_user.php');
}
?>