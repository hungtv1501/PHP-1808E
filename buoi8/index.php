<?php
// xu ly ngay thang trong php

// date_default_timezone_set('Tên Time Zone');
// dung lenh nay neu file php.ini chua chinh mui~ gio. Nếu chỉnh r thì thôi đi

// lay ra ngay thang hien tai
$day = Date('Y-m-d H:i:s');
echo $day;

// so sanh ngày tháng trong php
$yesterday = '2018-12-09';
$today = '2018-12-10';

// chuyen ngay thang ve kieu so

$timeYes = strtotime($yesterday);
$timeToday = strtotime($today);

echo "<br>";
echo $timeYes . '*********' . $timeToday;

if ($timeToday > $timeYes) {
	# code...
	echo "<br>";
	echo "{$today} lon hon {$yesterday}";
}

$currenTime = time();
echo "<br>";
echo $currenTime;

echo "<br>";

// cong tru ngay tháng

$date_int = mktime(6, 20, 10, 11, (20 + 12), 2018);
// echo $date_int;
// convert ngay thang
$convert = date('Y-m-d',$date_int);
echo $convert;

$date2 = date('Y-m-d', strtotime("+3years")); // days,weeks,months,years
echo "<br>";
echo $date2;

// viet form - chuong trinh dem xem con bao nhieu ngay den tet Duong lich

// viet form - chuong trinh dem xem con bao nhieu ngay den tet Am lich

