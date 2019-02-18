<?php

// khai bao thong tin bang nhan vien
$nv = [
	[
		'id' => 113,
		'nameNV' => 'Tran Van Hung',
		'heSoLuong' => 1,
		'maPhong' => 101,
		'gioitinh' => 1,
		'email' => 'tvh@gmail.com',
	],
	[
		'id' => 114,
		'nameNV' => 'Nguyen Van An',
		'heSoLuong' => 2,
		'gioitinh' => 0,
		'maPhong' => 101,
		'email' => 'nvan@gmail.com',
	],
	[
		'id' => 115,
		'nameNV' => 'Dinh Thi Bim',
		'heSoLuong' => 3,
		'maPhong' => 102,
		'gioitinh' => 0,
		'email' => 'dtb@gmail.com',
	],
];

// khai bao thong tin bang phong
$phong = [
	[
		'id' => 102,
		'nameP' => 'Phong to chuc',
	],
	[
		'id' => 101,
		'nameP' => 'Phong ke toan',
	],
];

// khai bao thong tin bang luong
$luong = [
	[
		'id' => 1,
		'heSo' => 3.2,
	],
	[
		'id' => 2,
		'heSo' => 4.0,
	],
	[
		'id' => 3,
		'heSo' => 4.5,
	],
];

// xu ly lay thong tin tu bang phong va bang luong cho sang bang nhan vien
// lay thoong tin tu bang phong
foreach ($nv as $kn => $vn) {
	foreach ($phong as $kp => $vp) {
		// lay duoc ten phong tuong ung cho tung nhan vien
		if ($vn['maPhong'] == $vp['id']) {
			$nv[$kn]['tenPhong'] = $vp['nameP'];
		}
	}
}

foreach ($nv as $kn => $vn) {
	foreach ($luong as $kl => $vl) {
		if($vn['heSoLuong'] == $vl['id']) {
			$nv[$kn]['heSo'] = $vl['heSo'];
		}
	}
}

// echo "<pre>";
// print_r($nv);
// echo "<pre>";
// print_r($phong);
// echo "<pre>";
// print_r($luong);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xu ly Nhan Vien</title>
	<!-- <link rel="stylesheet" href=""> -->
	<style type="text/css">
		.chan {
			background-color: gray;
		}
		.le {
			background-color: yellow;
		}
	</style>
</head>
<body>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<caption>Thong tin nhan vien</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Ho Ten</th>
				<th>HSL</th>
				<th>Luong</th>
				<th>Ten Phong</th>
				<th>Email</th>
				<th>Gioi Tinh</th>
			</tr>
		</thead>
		<tbody>
			<?php $total=0; ?>
			<?php foreach($nv as $key => $item): ?>
				<?php  $class = ($key%2 == 0) ? "class='chan'" : "class='le'" ?>
					<tr <?=$class?> >
						<td><?=$item['id'];?></td>   
						<td><?=$item['nameNV'];?></td>
						<td><?=$item['heSo'];?></td>
						<td><?=$item['heSo']*1000;?></td>
						<td><?=$item['tenPhong'];?></td>
						<td><?=$item['email'];?></td>
						<td>
							<?=$item['gioitinh'] == 1 ? 'Nam' : 'Nu'?>
						</td>
						<?php $total += $item['heSo']*1000; ?>
					</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">Tong Luong</td>
				<td>
					<?= $total ?>
				</td>
				<td colspan="2"></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>