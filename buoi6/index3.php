<?php
// cac ham filter_var php
// 1- kiem tra tinh dung dan cua du lieu
$email = 'test@gmail.com';
if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo "This is email";
}
else {
	echo "This is not email";
}
echo "<br>";

$url = 'http://m.dantri.com.vn';
if (filter_var($url,FILTER_VALIDATE_URL)) {
	echo "This is URL";
}
else {
	echo "This is not URL";
}

// 2-loc du lieu bat hop le
$email2 = 'ê$á#$$&&test@gmail.com';
$newEmail = filter_var($email2,FILTER_SANITIZE_EMAIL);
echo "<br>";
echo $newEmail;

echo "<br>";
$url2 = 'http://(abc)@#$%^&átest.comá';
$newUrl = filter_var($url2,FILTER_SANITIZE_URL);
echo $newUrl;

echo "<br>";
$string = '<h1>asghdjf<h1>';
$newString = filter_var($string,FILTER_SANITIZE_STRING);
echo $newString;
echo "<br>";

$number = '1.2+3gajsdg!@$%j';
$newNumber = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;



