<?php
session_start();
require 'check-login.php';
checkLogin();
// if ($_SESSION['username'] == '') {
// 	# code...
// 	header('Location:form-login.php');
// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>HOME</h1>
	<?php
		$username = $_SESSION['username'] ?? '';

	?>
	<p>Hello <b><?=$username?></b></p>
	<a href="logout.php">Logout</a>
</body>
</html>