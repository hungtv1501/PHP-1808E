<?php
session_start();
require 'check-login.php';
check();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="server/login.php" method="POST">
		<label for="txtUser">User</label>
		<br>
		<input type="text" name="txtUser" id="txtUser">
		<br>
		<label for="txtPass">Password</label>
		<br>
		<input type="password" name="txtPass" id="txtPass">
		<br>
		<input type="checkbox" name="statusLogin">Remember Me
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
	
</body>
</html>