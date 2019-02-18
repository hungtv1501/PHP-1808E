<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$msg = $_GET['state'] ?? '';
	?>
	<div class="content">
		<form action="server/rFile.php" method="POST">
			<label for="user">Username</label>
			<br>
			<input type="text" name="txtUser" id="user" placeholder="Tai Khoan" required>
			<br><br>
			<label for="pass">Password</label>
			<br>
			<input type="password" name="txtPass" id="pass" placeholder="Mat Khau" required>
			<br><br>
			<button type="submit" name="btnLogin">Login</button>
		</form>
		<?php if($msg == 'fail'): ?>
			<h3>Dang nhap khong thanh cong. Vui long nhap lai</h3>
		<?php endif; ?>
	</div>
</body>
</html>