<?php
if(isset($_POST['btnSNT'])) {
	$num = $_POST['txtNumber'] ?? '';
	$num = is_numeric($num) ? $num : '';
	if($num) {
		if(kiemTraSNT($num)) {
			header('location:../index3.php?state=ok&number='.$num);
		}
		else {
			header('location:../index3.php?state=err&number='.$num);
		}
	}
	else {
		header('location:../index3.php?state=fail&number='.$num);
	}
}

function kiemTraSNT($num) {
	if($num == 0 || $num == 1) {
		return false;
	}
	for($i=2;$i<=sqrt($num);$i++) {
		if($num%$i==0) {
			return false;
		}
	}
	return true;
}