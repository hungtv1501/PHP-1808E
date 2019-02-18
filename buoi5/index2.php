<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Kiem tra nam nhuan
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$msg = $_GET['state'] ?? '';
		$year = $_GET['y'] ?? '';
		if($msg)
	?>
	<div class="content">
		<form action="server/checkYear.php" method="POST">
			<label for="txtYear">Moi nhap nam</label>
			<input type="number" name="txtYear" id="txtYear" value="<?php echo $year ?>">
			<br><br>
			<button type="submit" name="btnCheck">Kiem Tra</button>
		</form>
		<?php if($msg === 'ok'): ?>
			<h3>Day la nam nhuan</h3>
		<?php endif; ?>
		<?php if($msg === 'err'): ?>
			<h3>Day khong la nam nhuan</h3>
		<?php endif; ?>
		<?php if($msg === 'fail'): ?>
			<h3>Vui long nhap nam vao bon bay =))</h3>
		<?php endif; ?>
	</div>
</body>
</html>