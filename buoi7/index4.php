<?php
	// khoi tao session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo SESSION</title>
	<!-- <link rel="stylesheet" href=""> -->
</head>
<body>
	<?php
		// tao ra cac session
	// su dung bien toan cuc
	$_SESSION['name'] = 'ABC';
	$_SESSION['age'] = 20;
	?>
	<a href="index5.php">Gui du lieu session</a>
</body>
</html>

