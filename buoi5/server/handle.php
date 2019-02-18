<?php
// kiem tra xem nguoi dung click vao nut login hay chua
if(isset($_GET['btnLogin'])) { // vi form co method la GET
	// key nam trong $_GET la gia tri cua thuoc tinh name trong button Login o file1.php
	// can lay duoc du lieu tu phia form cua nguoi dung gui len
	$username = $_GET['user'] ?? '';
	$username = strip_tags($username);

	$password = $_GET['pass'] ?? '';
	$password = strip_tags($password);

	echo "user : {$username} - password: {$password}";
}

// if(isset($_REQUEST['btnLogin-1'])) { lau hon 2 cai kia. chi dung khong biet dung phuong thuc gi o form thi moi vay =)))
if(isset($_POST['btnLogin-1'])) { // vi form co method la GET
	// key nam trong $_GET la gia tri cua thuoc tinh name trong button Login o file1.php
	// can lay duoc du lieu tu phia form cua nguoi dung gui len
	$user = $_POST['user-1'] ?? '';
	$user = trim(strip_tags($user));

	$pass = $_POST['pass-1'] ?? '';
	$pass = trim(strip_tags($pass));

	// $user = $_REQUEST['user-1'] ?? '';
	// $user = strip_tags($user);

	// $pass = $_REQUEST['pass-1'] ?? '';
	// $pass = strip_tags($pass);

	// echo "user : {$user} - password: {$pass}";

	if(empty($user) || empty($pass)) {
		die('alo');
	}
	else {
		// kiem tra xem nhap co dung hay khong
		// can lay du lieu tu file db.txt doi chieu voi du lieu nguoi dung vua nhap vao xem co khop hay ko. Neu khop nhap dung, con lai la nhap sai
		$fp = fopen('../database/db.txt', 'r');
		if($fp) {
			$sizeFile = filesize('../database/db.txt');
			$data = fread($fp, $sizeFile);
			fclose($fp);
			$arrData = explode('/', $data);
			// echo "</pre>";
			// print_r($data);
			if(trim($arrData[0]) === $user && trim($arrData[1]) === $pass) {
				echo "YES";
			}
			else {
				echo "NO";
			}
		}
		else {
			echo "Khong the ket noi toi CSDL";
		}
	}
}

