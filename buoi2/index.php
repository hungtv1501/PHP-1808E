<?php

$number3 = null;
$number4 = '';
echo "<br>";
echo gettype($number3);

$check = true;
echo "<br>";
echo gettype($check);

echo "<br>";
echo gettype($number4);
echo "<br>";
settype($number2, 'integer');
echo gettype($number2);

$numString = '100';
$numString = (int) $numString;
echo "<br>";
echo gettype($numString);

$a = 10;
$b = '10'; // chuoi so "number String": trong chuoi chi co so
$c = '10b';

echo "<br>";
// echo $a + $b + $c;

$intNumber = 100.999;
echo intval($intNumber);
echo "<br>";
echo floatval($intNumber);
echo "<br>";
$test = 'dang hoc php';
echo "<br>";
echo strval($test); // tra ve gia tri cua bien la chuoi
echo "<br>";

// nhu the nao la bien rong~
// $myNumber = '';
// $myNumber = 0;
// $myNumber = false;
$myNumber = 0;
if(empty($myNumber)){
	echo "Y";
}
else {
	echo "N";
}

// kiem tra bien co ton tai hay khong
// 1 bien ton tai: duoc khai + khong duoc gan bang null
echo "<br>";
if(isset($myNumber)) {
	echo "Yes";
}
else {
	echo "No";
}

// kiem tra chuoi so trong PHP
$idPost = '123456';
echo "<br>";
if(is_numeric($idPost)) {
	echo "OK";
}
else {
	echo "ERROR";
}

echo "<br>";
if (is_int($idPost)) {
	echo "OK - 1";
}
else {
	echo "ERR - 1";
}

$i = 100;
$j = 200;
$i = ($j - $i > $j) ? $j : $i;
$j = ($m) ?? $i;
// $j = (isset($m)) ? $m : $i;
echo "<br>";
echo $j;

$u = 30;
$t = 10;
$v = $u <=> $t; // u=t -> v=0; u>t -> v=1; u<t -> v= -1
echo "<br>";
echo $v;

// kiem tra tu 1 den 100 co bao nhieu so chia het cho 3
$count = 0;
for ($i=1; $i<=100; $i++) {
	if ($i%3 == 0) {
		$count++;
	}
}
echo "<br>";
echo $count;
