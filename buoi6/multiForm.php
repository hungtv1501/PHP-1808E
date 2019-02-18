<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Multi  File</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="server/multi-upload.php" method="POST" enctype="multipart/form-data">
		<label for="txtFile">Moi chon file</label>
		<br><br>
		<input multiple="multiple" type="file" name="txtFile[]" id="txtFile">
		<br><br>
		<button type="submit" name="btnUpload">Upload File</button>
	</form>
</body>
</html>