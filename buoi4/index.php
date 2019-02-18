<?php
// xay dung banng categories
$categories = [
	[
		'id' => 1,
		'name' => 'Bong Da',
		'parentID' => 0,
	],
	[
		'id' => 2,
		'name' => 'Thoi Trang',
		'parentID' => 0,
	],
	[
		'id' => 3,
		'name' => 'Bong Da Anh',
		'parentID' => 1,
	],
	[
		'id' => 4,
		'name' => 'Bong Da Phap',
		'parentID' => 1,
	],
	[
		'id' => 5,
		'name' => 'Thong trang cong so',
		'parentID' => 2,
	],
	[
		'id' => 6,
		'name' => 'Thoi trang tre em',
		'parentID' => 2,
	],
];

$firstArr = [];
foreach ($categories as $key => $cat) {
	if($cat['parentID'] == 0) { // lay ra 1 mang chi chua parentID bang 0
		$firstArr[] = $cat;
	}
}
// gan nhung thang con vao mang parentID = 0 vua lay
foreach ($categories as $key => $cat) {
	foreach ($firstArr as $key2 => $item) {
		if($cat['parentID'] == $item['id']) {
			$firstArr[$key2]['child'][] = $cat;
		}
	}
}
// echo "<pre>";
// print_r($firstArr);



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo MENU</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<ul>
			<?php foreach ($firstArr as $key => $value): ?>
			<li>
				<a href="#"><?=$value['name'];?></a>
				<?php if(isset($value['child']) && !empty($item['child'])): ?>
					<ul>
						<?php foreach ($value['child'] as $key2 => $val): ?>
						<li>
							<a href="#"><?=$val['name'];?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>