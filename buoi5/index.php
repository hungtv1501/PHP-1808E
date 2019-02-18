<?php
// cac kien thuc xu ly trong file
// mo file trong php

$fp = fopen('database/mysql.txt', 'a+');
if($fp) {
	// echo "success";
	// doc di lieu trong file
	$sizeFile = filesize('database/mysql.txt');

	$data = fread($fp, $sizeFile);

	// ghi du lieu vao file
	$text = 'ABC';
	fwrite($fp, $text);

	// doc du lieu vua duoc ghi
	$fp1 = fopen('database/mysql.txt' , 'r');
	$data1 = fread($fp1, $sizeFile);
	echo $data1;

	// dong file
	fclose($fp);
	fclose($fp1);
}
else {
	echo "fail";
}



// cac ham xu ly ve file
// kiem tra xem 1 file co ton tai hay khong
echo "<br>";
if(file_exists('database/mysql.txt')) {
	echo "OK";
}
else {
	echo "Not Found";
}

// kiem tra file co duoc cap quyen ghi hay khong
echo "<br>";
if(is_writable('database/mysql.txt')) {
	echo "YES";
}
else {
	echo "NO";
}


// ghi noi dung vao file ma khong can dung fwrite
file_put_contents('database/mysql.txt', 'test chen file khong can fwrite');

rename('database/mysql.txt', 'database/hung123.txt');// thay doi ten file
copy('database/hung123.txt', 'test/hung123.txt'); // coppy file
if(file_exists('test/hung123.txt')) {
	unlink('test/hung123.txt'); // xoa file di nhe =)))
}
else {
	echo "file test/hung123.txt khong ton tai";
}
rename('database/hung123.txt', 'database/mysql.txt');

echo "<br>";
if(is_dir('test/hung111')) { // kiem tra xem folder co ton tai hay khong
	echo 'CO';
}
else {
	mkdir('test/hung111'); // tao 1 folder moi
}



