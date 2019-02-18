<?php
if (isset($_POST['btnRegister'])) {
	$user = $_POST['txtUser'] ?? '';
	$user = strip_tags($user);

	$pass = $_POST['txtPass'] ?? '';
	$pass = strip_tags($pass);

	if(empty($user) || empty($pass)) {
		die();
	}
	else {
		$fpw = fopen('../database/register.txt', 'a+');
		if ($fpw) {
			$sizeFile = filesize('../database/register.txt');
			$text = '/';
			fwrite($fpw, $text);
			fwrite($fpw, $user);
			fwrite($fpw, $text);
			fwrite($fpw, $pass);
			fclose($fpw);
			header('location:../register.php');
		}
		else {
			echo "Fail";
		}
	}
}

