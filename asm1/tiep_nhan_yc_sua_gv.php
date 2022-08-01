<?php
require_once('db.php');
$id = $_POST['id'];
$ten = $_POST['ten'];
$email = $_POST['email'];
$gioi_tinh = $_POST['gioi_tinh'];

$sql = "UPDATE giao_vien SET ten='$ten', email='$email', gioi_tinh='$gioi_tinh' WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();
// Không cần nhận kq khi chỉnh sửa, cần quay về ds để xem ds mới
header('location: giao_vien.php');
