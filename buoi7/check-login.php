<?php
// session_start();
function getUserSessionAdmin() {
	$user = $_SESSION['username'] ?? '';
	return $user;
}
function getUserCookieAdmin() {
	$cookieAdmin = $_COOKIE['adminLogin'] ?? '';
	return $cookieAdmin;
}
function checkLogin() {
	if (!getUserSessionAdmin() || !getUserCookieAdmin()) {
		# code...
		header('Location:form-login.php');
		die;
	}
}
function check() {
	if (getUserSessionAdmin() && getUserCookieAdmin()) {
		# code...
		header('Location:home.php');
		die;
	}
}

