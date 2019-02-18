<?php
define('PATH_UPLOAD', '../upload/images/');
if (isset($_POST['btnUpload'])) {
	if (isset($_FILES['txtFile'])) {
		echo "<pre>";
		print_r($_FILES);
		$allFile = $_FILES['txtFile']['tmp_name'];
		if ($allFile) {
			# code...
			foreach ($allFile as $key => $item) {
				# code...
				// lam the nao lay  ra ten tung file va tmp_name cua tung file
				$nameFile = $_FILES['txtFile']['name'][$key];
				$tmp_name = $_FILES['txtFile']['tmp_name'][$key];
				if ($tmp_name) {
					# code...
					$up = move_uploaded_file($tmp_name, PATH_UPLOAD.$nameFile);
				}
			}
			if ($up) {
				# code...
				header("Location:../multiForm.php?state=ok&img={$nameFile}");
			}
			else {
				header('Location:../multiForm.php?state=err');
			}
		}
	}
}

function checkFileSize($sizeFile) {
	// khong vuot qua 3M
	if($sizeFile <= 3*1024) {
		return true;
	}
	else {
		return false;
	}
}

function checkFileType($typeFile) {
	// chi chap nhan: gif,png,jpg,jpeg
	$arrAllowType = ['image/jpeg','image/png','image/gif','image/jpg'];
	foreach ($arrAllowType as $key => $value) {
		# code...
		if ($typeFile == $value) {
			# code...
			return true;
		}
	}
	return false;
}