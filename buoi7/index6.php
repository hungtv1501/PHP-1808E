<?php
// khoi dong session
session_start();
// xoa session
// 1- xoa tung session da duoc tao ra
unset($_SESSION['name']);
unset($_SESSION['age']);

// 2- xoa tat ca cac session da duoc tao ra
// session_destroy();

header('Location:index5.php');

?>