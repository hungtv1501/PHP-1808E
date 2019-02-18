<?php

// khai bao ham -  dinh nghia ham trong PHP

function checkNumber($a, $b = '123') {

	return "HELLO" . $a . $b; // dau . la toan tu noi chuoi
	// tra ket qua ve cho ham va dung cac cau lenh ben duoi
}

// su dung ham
$hello = checkNumber('HSN','aaa');
echo $hello;

// goi ham trong ham
function sum($a,$b) {
	return $a+$b;
}
function chuVi($c, $d) {
	return sum($c,$d)*2;
}
// $c = chuVi(2,4);
echo "<br>";
echo chuVi(2,5);

// tham chieu va tham tri trong PHP
// tham chieu la khi di vao r di ra khoi ham se thay doi gia tri
// than tri thi khong bi
$testTT = 100;
function testThamTri($testTT) {
	$testTT += 100;
	return $testTT;
}
echo "<br>Tham tri: <br>";
echo testThamTri($testTT);
echo "<br>";
echo $testTT;

echo "<br>";
function testThamChieu(&$testTT) {
	$testTT += 100;
	return $testTT;
}
echo "<br>Tham Chieu: <br>";
echo testThamChieu($testTT);
echo "<br>";
echo $testTT;

// bien toan cuc va bien cuc bo trong PHP
$myNumber = 100;
function checkMyNumber($a = 300) {
	// su dung bien toan cuc vao ham
	global $myNumber;
	return $a - $myNumber;
}
echo "<br><br>";
echo checkMyNumber();
echo "<br>";

// bien static trong ham
// bien do se duoc luu lai cho cac lan goi tiep theo
function testStatic() {
	// khai bao static
	static $count = 0;
	$count += 10;
	echo $count;
}
echo "<br>";
testStatic();
testStatic();
testStatic();

// tat ca cac khai niem ben tren se dung cho tat cac version khac nhau
