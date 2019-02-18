<?php
// chỉ co the mo -  khong co the dong
// chi chua ma php moi duoc dat vay. khong duoc viet code khac
echo "Hello LPHP1808E";

// khai bao bien trong php
$name;
// nhung loi sai khi khai bao bien
// $ a; => khong co dau cach
// $1name; => khong bat dau boi so
$if; // => dung
// php phan biet chu HOA va chu thuong
$age;
$Age;
// hai bien tren hoan toan KHAC nhau
// chu cai dau tien viet thuong. Con lai viet HOA chu dau
$myName = 'NTT';
$myAge = 22;

$demo = 'hi';
$a = 'demo';
echo '<br>';
echo $$a;

// $$b; sai vi b khong co gia trij tham chieu vao

// dinh nghia hang so  trong php
define('PI',3.14);
// tat ca cac chu cai viet hoa. Cach nhau boi dau gach duoi
define('MY_NAME','Hung SN'); // dung trong tat ca cac phien ban. KHONG dung trong class
echo '<br>';
echo PI;
const MY_BABY = 'HIhi'; // dung trong php 7 tro len va CO dung trong class
echo "<br>";
echo MY_BABY;
