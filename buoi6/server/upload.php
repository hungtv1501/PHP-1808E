<?php
// kiem tra xem nguoi dung da upload chua
define('PATH_UPLOAD', '../upload/images/');
if (isset($_POST['btnUpload'])) {
	// kiem tra xem nguoi dung da chon file upload chua
	if (isset($_FILES['txtFile'])) { // gia tri cua thuoc tinh name input
		# code...
		// $_FILE la bien toan cuc kieu mang luu tru cac thong tin ve file
		// echo "<pre>";
		// print_r($_FILES);

		// tien hanh upload file. Can phai co cho de luu file tren server
		if ($_FILES['error'] == 0) {
			# code...
			$nameFile = $_FILES['txtFile']['name'];
			$tmpName = $_FILES['txtFile']['tmp_name'];
			$sizeFile = $_FILES['txtFile']['size'];
			$type = $_FILES['txtFile']['type'];
			if ($tmpName) {
				# code...
				// kiem tra xem thoa man yeu cau chua moi khi upload
				if (checkFileSize($sizeFile) && checkFileType($type)) {
					# code...
					$up = move_uploaded_file($tmpName, PATH_UPLOAD.$nameFile);
					if ($up) {
						# code...
						header("Location:../form.php?state=ok&img={$nameFile}");
					}
					else {
						header('Location:../form.php?state=err');
					}	
				}
				elseif (!checkFileSize($sizeFile)) {
					# code...
					header('Location:../form.php?state=err-size');
				}
				elseif (!checkFileType($type)) {
					# code...
					header('Location:../form.php?state=err-type');
				}
				else {
					header('Location:../form.php?state=err-size-type');
				}
			}
		}
		else {
			header('Location:../form.php?state=fail');
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