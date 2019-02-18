<?php
// tiep nhan du lieu tu file 1 gui sang
$id = $_GET['id'] ?? ''; // neu $_GET['id'] ton tai thi lay chinh no. khong thi se gan la giong~
$id = is_numeric($id) ? $id : 0; // kiem tra co phai la kieu so hay khong
$name = $_GET['name'] ?? '';
$name = strip_tags($name); // xoa di lenh  html nam ben trong
$age = $_GET['age'] ?? '';
$age = is_numeric($age) ? $age : 0;

echo "myID : {$id} - myName : {$name} - myAge : {$age}";

