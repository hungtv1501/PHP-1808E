<?php
if(isset($_POST['btnLogin'])) {
	$user = $_POST['txtUser'] ?? '';
	$user = strip_tags($user);

	$pass = $_POST['txtPass'] ?? '';
	$pass = strip_tags($pass);
	// soSanhUser($user);
	$fpr = fopen('../database/register.txt', 'r');
	$sizeFile = filesize('../database/register.txt');
	$data = fread($fpr, $sizeFile);
	$arrData = explode('/', $data);
	fclose($fpr);
	echo "<pre>";
	print_r($arrData);

	if (soSanhUser($user)) {
		echo "Dang nhap thanh cong";
	}
	else {
		echo "fail";
		// header('location:../login.php?state=fail');
	}
}


function soSanhUser($user) {
	echo "uuis";
	$d = count($arrData);
	echo $d;
	for ($i=0; $i < $d; $i++) {
		// echo "y1";
		if($i%2 != 0) {
			echo "y2";
			if($user == $arrData[$i]) {
				echo "y3";
				echo "ok";
				return true;
			}
			else {
				echo "n1";
				return false;
			}
		}
		else {
			echo "n2";
			return false;
		}
	}
}
function soSanhPass($pass) {
	foreach ($arrData as $key => $value) {
		if($key%2 == 0 && $key !=0) {
			if($pass == $arrData[$key]) {
				echo "o1";
				return true;
			}
			else {
				echo "n3";
				return false;
			}
		}
		else {
			echo "n4";
			return false;
		}
	}
}