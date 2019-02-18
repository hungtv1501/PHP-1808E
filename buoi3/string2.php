<?php
$str_repeat = 'abc';
// lap chuoi
$str_repeat = str_repeat($str_repeat,5);
echo $str_repeat;

// thay the chuoi
$str_replace = 'chung ta dang hoc js';
$str_replace = str_replace('js','php',$str_replace);
echo "<br>";
echo $str_replace;

// ma hoa chuoi
$myPass = '123456789';
echo "<br>";
echo md5($myPass);

echo "<br>";
$html = "<script>alert('Hi')</script>"; // hieu day la chuoi
// echo $html;
echo htmlentities($html); // chuyen tat ca cac ky tu thuoc van html thanh cac ki tu van ban binh thuong	
echo "<br>";

$title = "<h1> this is php <h1>";
// echo $title;
$title2 = htmlentities($title); // 1 doan ki tu binh thuong
echo html_entity_decode($title2); // bien doi doan ma ki tu binh thuong thanh doan code

$subject = "<h3><i><u>HungSNVL</u></i></h3>";
echo "<br>";
echo strip_tags($subject,'<h3>,<i>'); // loai bo cac the trong html nam trong chuois. the nao giu thi khai bao no ra

$testSubStr = 'hoc string php . Sau do hoc mang php';
$testSubStr1 = subStr($testSubStr,4,6);
echo $testSubStr1;
echo "<br>";
$testSubStr2 = strStr($testSubStr,'.');
echo $testSubStr2;
echo "<br>";
$pos = strpos($testSubStr,'.');
echo $pos;
echo "<br>"; 

$strTrim = '    ....Hom nau la dau tuan. . . . ';
echo $strTrim;
echo "<br>";
echo trim($strTrim,' ,.'); // xoa ca khoang trang va dau cham o 2 dau chuoi


?>