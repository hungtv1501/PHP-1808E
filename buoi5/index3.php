<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Kiem tra SNT
	</title>
</head>
<body>
	<?php
		$msg = $_GET['state'] ?? '';
		$num = $_GET['number'] ?? '';
	?>
	<div class="content">
		<form action="server/checkNumber.php" method="POST">
			<label for="txtNumber">Moi nhap so</label>
			<input type="number" name="txtNumber" id="txtNumber" value="<?php echo $num ?>">
			<br><br>
			<button type="submit" name="btnSNT">Kiem Tra</button>
		</form>
		<?php if($msg === 'ok'): ?>
			<h3>Day la so nguyen to</h3>
		<?php endif; ?>
		<?php if($msg === 'err'): ?>
			<h3>Day khong la so nguyen to</h3>
		<?php endif; ?>
		<?php if($msg === 'fail'): ?>
			<h3>Vui long nhap nam vao bon bay =))</h3>
		<?php endif; ?>
	</div>
</body>
</html>