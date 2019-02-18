<?php
// xu ly chuoi trong php
$string = "sap duoc ve nha roi ";
$string2 = "dang co da bong phai khong";

// noi chuoi trong php
echo $string . $string2;
echo "<br>";

// chua nhay don trong nhay don
$str = 'Chung ta dang hoc \'PHP\'';
echo $str;
echo "<br>";

// nhay kep trong nhay kep
$str2 = "Cai gi dang xay \"ra\" vay";
echo $str2;
echo "<br>";
$str3 = 'Chung ta dang lam "cai" gi vay';
echo $str3;
echo "<br>";
$cat = 'Tom';
$mouse = 'Jerry';
echo '$cat dang duoi $mouse';// hkong duoc phep chua bien trong chuoi
echo "<br>";
echo $cat . 'dang-0 duoi-0' . $mouse;
echo '<br>';
echo "$cat dang-1 duoi-1 $mouse";// duoc phep chua bien trong chuoi
echo "<br>";
echo "{$cat} dang-2 duoi-2 {$mouse}";

// lam quen mot so ham thong dung trong chuoi
$fruit = 'cam,quyt,mit,dua,tao,le,oi';
echo "<br>"; // chi in ra chuoi. la 1 keyword KHONG la 1 ham
print_r(explode(',',$fruit)); // bien chuoi va mang. chi tra ve vi tri va gia tri. la 1 HAM
echo "<br>";
var_dump(explode(',',$fruit)); // tra ve ca kieu du lieu. la 1 HAM
// die(); // dung chuong trinh lai. KHONG thuc hien cac lenh sau do
// exit(); // giong die. nhung lon hon
$arrF = explode(',',$fruit);
echo "<br>";
echo implode('*', $arrF);
echo "<br>";
$testStr = "muộn rồi về thôi thầy ơi";
echo strlen($testStr); //  dem ca dau
echo "<br>";
echo mb_strlen($testStr); // chi dem ki tu
echo "<br>";
echo str_word_count($testStr); // dem so tu trong 1 cau kem ca dau
echo "<br>";


?>