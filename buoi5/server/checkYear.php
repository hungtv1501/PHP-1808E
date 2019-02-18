<?php
if(isset($_POST['btnCheck'])) {
	$year = $_POST['txtYear'] ?? '';
	$year = is_numeric($year) ? $year : '';
	if($year) {
		if (kiemTraNamNhuan($year)) {
			header('location:../index2.php?state=ok&y='.$year);
		}
		else {
			header('location:../index2.php?state=err&y='.$year);
		}
	}
	else {
		header('location:../index2.php?state=fail&y='.$year);
	}
}

function kiemTraNamNhuan($year) {
	if($year%400 == 0 || ($year%4==0 && $year%100!=0)) {
		return true;
	}
	else {
		return false;
	}
}


///////// VIET CHUC NANG DANG KY /////////////
/////////////// VIET VAI LOAI PHUONG TRINH /////////////
//////////// KIEM TRA SO NGUYEN TO //////////////