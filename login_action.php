<?php
//Login Action
include_once('config.php');
if(isset($_POST['Submit']))
{
	echo $username = mysql_real_escape_string($_POST['username']);
	echo "<br/><br/>";
	echo $password = mysql_real_escape_string($_POST['password']);
	echo "<br/><br/>";
	echo $password = md5($password); // MD5 Hash
	$Auth_SQL = mysql_query("SELECT * from admin_user WHERE username = '$username' AND password = '$password'");
	if(mysql_num_rows($Auth_SQL) > 0)
	{
		while($User_Array = mysql_fetch_array($Auth_SQL))
		{
			$Auth = array ();
			$Auth = $User_Array;
			$Auth['auth'] = 'true';
			session_start();
			$_SESSION['auth'] = $Auth;
			header('Location: index.php');
		}
	}
	else
	{
		header('Location: login.php?error=invalid');
	}
}
?>