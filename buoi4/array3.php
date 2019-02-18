<?php
// cac ham xu ly ve mang trong php
// chuyen key cua mang sang chu hoa hoac chu thuong
$fruit = [
	'name' => 'apple',
	'color' => 'green',
	'weight' => 2,
];

$fruit = array_change_key_case($fruit, 1);
// 1~CASE_UPPER
echo "<pre>";
print_r($fruit);
echo "<br>";
$cat = [
	'NAME' => 'Tom',
];
// 0~CASE_LOWER
// 2: dem so lan xuat hien cua cac phan tu giong nhau trong mang
$myNumber = [1,2,3,4,1,2,3,4,3,1,2,3];
$newNumber = array_count_values($myNumber);
echo "<pre>";
print_r($newNumber);


$lastElement = array_pop($myNumber); // xoa phan tu cuoi mang
echo "<pre>";
// print_r($myNumber);
echo $lastElement; // gia tri o cuoi mang

array_push($myNumber, 100); // them phan tu vao cuoi mang
echo "<pre>";
print_r($myNumber);

array_unshift($myNumber, $lastElement); // them phan tu vao dau mang
echo "<pre>";
print_r($myNumber);

$firstElement = array_shift($myNumber); // xoa di phan tu dau mang
echo "<br>";
echo $firstElement;


/***************************************************/

$number = [1,2,3,4,5,6,7,8,9,10,11,12];
$chunkArr = array_chunk($number, 2, false);  // tach mang to thanh cac mang con voi moi mang la 2 phan tu. Neu muon giu lai key cua mang to thi them gia tri true
echo "<pre>";
print_r($chunkArr);


if(is_array($chunkArr)) {
	echo "This is Array";
}
else {
	echo "This is not Array";
}

echo "<br>";
if(in_array(8 , $number)) { // kiem tra value co nam trong mang hay ko
	echo "Y";
}
else {
	echo "N";
}

$food = [
	'name' => 'mit',
	'weight' => 20,
];
echo "<br>";
if(array_key_exists('weight', $food)) {  // kiem tra key co nam trong mang hay khong
	echo "OK";
}
else {
	echo "NO";
}

$unique = [1,2,3,5,1,2,3,5,3,2,1,4,6,5,6,7,4];
$newArr = array_unique($unique);  // xoa cac value trung nhau di
echo "<pre>";
print_r($newArr);

$food = array_values($food);  //bien mang KHONG tuan tu thanh mang tuan tu
echo "<pre>";
print_r($food);

$sum = array_sum($unique); // tinh tong cac phan tu nam trong mang
echo "<br>";
echo $sum;

$newunique = array_slice($unique, 3, 5, false); // lay cac phan tu trong mang voi: ten mang, vi tri bat dau, do dai, lay gia tri key cua unique hay ko?
echo "<pre>";
print_r($newunique);

array_splice($unique, 4 ,3 ,[300,100,200]);
echo "<pre>";
print_r($unique);

$end = end($unique); // chi lay phan tu cuoi chu ko xoa di
echo "<br>";
echo $end;


///////////////////////////////////////////////////////////////////////////////////////////////////////////

$year = [2000,2003,2005,2004,2006,2007,2010,2016,2018];

// viet ham tra ve 1 mang bao gom cac nam la nam nhuan
function kiemTraNamNhuan($obj) {
	if($obj%400 == 0 || ( $obj%4==0 && $obj%100 != 0 ) ) {
		return true;
	}
	else {
		return false;
	}
}

function layNamNhuan($arrYear) {
	$result = [];
	foreach ($arrYear as $key => $value) {
		if (kiemTraNamNhuan($value)) {
			$result[] = $value;
		}
	}
	return $result;
}
echo "<pre>";
print_r(layNamNhuan($year));


$sortArr = ['mot' => 1, 'hai' => 2, 'ba' => 3, 'khong' => 0,];
// asort($sortArr); // sap xep tang dan dua vao value
// arsort($sortArr); // sap xep giam dan dua vao value
ksort($sortArr); // sap xep tang dan dua vao key
echo "<pre>";
print_r($sortArr);

// viet ham sap xep mang khong dung ham co san
function sapXep($obj = []) {
	$t;
	$u;
	foreach ($obj as $k => $v) {
		foreach ($obj as $key => $value) {
			if($obj[$k] > $obj[$key]) {
				$t = $obj[$k];
				$obj[$k] = $obj[$key];
				$obj[$key] = $t;
			}
		}
	}
	return $obj;
}
echo "<pre>";
print_r(sapXep($sortArr));
