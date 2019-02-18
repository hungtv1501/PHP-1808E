<?php
// khoi dong session
session_start();
if (isset($_POST['btnLogin'])) {
	# code...
	$user = $_POST['txtUser'] ?? '';
	$user = filter_var($user,FILTER_SANITIZE_STRING);

	$pass = $_POST['txtPass'] ?? '';
	$pass = filter_var($pass,FILTER_SANITIZE_STRING);

	// kiem tra neu khong nhap gi
	if (empty($user) || empty($pass)) {
		# code...
		header('Location:../form-login.php?state=fail');
	}
	// kiem tra khi co nhap ca 2
	else {
		if ($user) {
			# code...
			if ($user === 'admin' && $pass === '123') {
				# code...
				// kiem tra xem nguoi dung co o lai lau dai ko
				$timeStay = $_POST['statusLogin'] ?? '';
				// echo $timeStay;
				// die;
				if ($timeStay === 'on') {
					# code...
					setcookie('adminLogin','T3HPHP',time() + 300,"/","",0);
				}
				else {
					setcookie('adminLogin','T3HPHP',time() + 10,"/","",0);
				}
				// luu thong tin cua nguoi dung vao sesstion. tien ich cho cac cong viec sau nay
				$_SESSION['username'] = $user;
				header('Location:../home.php');
			}
			else {
				header('Location:../form-login.php?state=err');
			}
		}
	}
}