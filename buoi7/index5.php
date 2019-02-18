<?php
// khoi dong lai session
session_start();

// lay gia tri cua session ben phia index4.php
$name = $_SESSION['name'] ?? '';
$age = $_SESSION['age'] ?? '';
echo "My name: {$name} - Age: {$age}";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		DEMO SESSION 2
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<br>
	<a href="index6.php">Huy SESSION</a>
</body>
</html>