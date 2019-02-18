<?php
// hoc ve mang trong php
$food = ['rice','oil','meat','milk']; // mang tuan tu
// mang thi cac key cua no tu dong danh va sap xep tang dan (la lap trinh vien khoong can dinh nghia key trong mang)

echo "<pre>";
print_r($food);

// mang khong tuan tu
echo "<pre>";
$food2 = ['rice' => 'deo','meat' => 'pig'];   // rice la key. deo la value

// mang da chieu
$infoStudent = [
	[
		'name' => 'Nguyen Van A',
		'age' => 20,
		'add' => 'Ha Noi',
	], // sinh vien 1
	[
		'name' => 'Nguyen thi B',
		'age' => 30,
		'add' => 'Hai phong',
	], // sinh vien 2
];
echo "<pre>";
print_r($infoStudent);

// cach THU 2 de tao mang trong php
$fruit = array('cam','quyt','buoi');
$fruit2 = array('mot' => 'cam', 'hai' => 'quyt');
echo "<pre>";
print_r($fruit);
echo "<pre>";
print_r($fruit2);

$infoCat = array(
	array(
		'name' => 'cat1',
		'gender' => '1',
	), // meo 1
	array(
		'name' => 'cat2',
		'gender' => '0',
	), // meo 2
	array(
		'name' => 'cat3',
		'gender' => '12',
	), // meo 3
);
echo "<pre>";
print_r($infoCat);

// cach truy cap 1 phan tu nam trong mang
$number = [1,2,3,4,5,6,7,8,9];
//cu phap: echo $ten_mang[ten_key];
echo $number[7];
echo "<br>";
echo $infoCat[2]['name'];

$person = array(
	'work' => [
		'nameCom' => 'VCCorp',
		'address' => [
			['name' => 'HN'],
			['name' => 'DN'],
			['name' => 'CT'],
		],
	],
);
echo "<pre>";
print_r($person);
echo "<br>";
echo $person['work']['address'][2]['name'];

// duyet qua tat ca cac phan tu trong mang
$myNumber = [1,2,3,4,5,6,7,8,9];
echo "<br>";
$dem = 0;
$count = count($myNumber);
for($i = 0 ; $i < $count ; $i++) {
	if($myNumber[$i]%2 == 0) {
		$dem++;
	}
}
echo $dem;

$dem1 = 0;
echo "<br>";
foreach ($myNumber as $key => $value) {
	if($myNumber[$key] % 2 == 0) {
		echo "key: {$key} - value: {$value} ";
		echo "<br>";
	}
}
echo "<br>";

// mot so meo nho trong mang
$football = [];
// them phan tu vao mang
$football['player'] = 'cong phuong';
$football['money'] = 10000;
$football['infoClub'] = [
	'name' => 'HAGL',
	'address' => 'Gia Lai',
];
echo "<pre>";
print_r($football);

$money = array();
$money = array(
	'menhGia' => 10000,
	'datNuoc' => 'VN',
	'donVi' => 'VND',
	'tiGia' =>  array(
		'1',
		'2',
		'3',
	),
);
echo "<pre>";
print_r($money);

// xu ly du lieu trong mang



