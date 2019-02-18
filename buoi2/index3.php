<?php

// dinh nghi ham theo chuan phien ban php tro len

declare(strict_types=1); // thong bao loi khi viet sai cu phap trong php7

function sumNumber(string $a, string $b) : int { // nhap vao 2 so va tra ve deu la so
	return $a + $b;
}
$total = sumNumber('10', '20');
echo $total;

// viet ham theo chuan php7 tinh giai thua tu 1 den 20
function giaiThua(int $a) : float {
	$gt = 1;
	for($i = 1; $i <= $a; $i++)  {
		$gt = $gt*$i;
	}
	return $gt;
}
echo "<br>";
echo giaiThua(5);

// kiem tra so nguyen to
function soNT(int $a) : bool {
	if($a == 0 || $a == 1) {
		return false;
	}
	for($i = 2; $i <= sqrt($a); $i++) {
		if ($a%$i == 0) {
			return false;
		}
	}
	return true;
}
$chk = soNT(101);
echo "<br>";
if ($chk) {
	echo "Yes";
}
else {
	echo "NO";
}

?>