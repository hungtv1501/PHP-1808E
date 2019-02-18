<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo PHP Send Data File Method GET</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Demo PHP Send Data File Method GET</h1>

	<!-- truyen du lieu tu file nay sang file khac thong qua method GET -->
	<a href="file2.php?id=10&name=abc&age=20" title="Method Get">Goto file2.php</a>

	<br>

	<form action="server/handle.php" method="GET">
		<label for="user">UserName</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="pass">Password</label>
		<input type="password" name="pass" id="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>

<br><br>
	<form action="server/handle.php" method="POST">
		<label for="user-1">UserName-1</label>
		<input type="text" name="user-1" id="user-1">
		<br><br>
		<label for="pass-1">Password-1</label>
		<input type="password" name="pass-1" id="pass-1">
		<br><br>
		<button type="submit" name="btnLogin-1">Register</button>
	</form>
</body>
</html>