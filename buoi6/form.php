<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Upload File len Server</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		define('CLIENT_UPLOAD', 'upload/images');
		$msg = $_GET['state'] ?? '';
		$img = $_GET['img'] ?? '';
	?>
	<form action="server/upload.php" method="POST" enctype="multipart/form-data">
		<label for="txtFile">Moi chon file</label>
		<br><br>
		<input type="file" name="txtFile" id="txtFile">
		<br><br>
		<button type="submit" name="btnUpload">Upload File</button>
	</form>
	<?php if($msg == 'ok' && $img != ''): ?>
		<img src="upload/images/<?=$img;?>" width="120" height="120">
	<?php endif; ?>
</body>
</html>