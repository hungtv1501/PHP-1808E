<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<!-- <link rel="stylesheet" href=""> -->
</head>
<body>
	<div class="content">
		<form action="server/wFile.php" method="POST">
			<label for="user">Username</label>
			<br>
			<input type="text" name="txtUser" id="user" placeholder="Tai Khoan" required>
			<br><br>
			<label for="pass">Password</label>
			<br>
			<input type="password" name="txtPass" id="pass" placeholder="Mat Khau" required>
			<br><br>
			<button type="submit" name="btnRegister">Register</button>
		</form>
	</div>
</body>
</html>