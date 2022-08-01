<?php
require_once('db.php');
// 1. Nhận thông tin bên kia gửi sang
// METHOD nó gửi sang là gì, nếu method="POST" -> $_POST, method="GET" -> $_GET
// key trong mảng $_POST là name của input, value sẽ là nội dung người dùng nhập
$ten = $_POST['ten'];
$email = $_POST['email'];
$gioi_tinh = $_POST['gioi_tinh'];
$ngay_sinh = $_POST['ngay_sinh'];

$sql = "INSERT INTO giao_vien (ten, email, gioi_tinh, ngay_sinh) VALUES ('$ten', '$email', $gioi_tinh, '$ngay_sinh')";
// Muốn nạp câu truy vấn thì cần có biến $connect bên file db.php -> require_once('db.php');
$statement = $connect->prepare($sql);
$statement->execute();
// Khi tạo mới, chỉnh sửa, xoá chúng ta không cần nhận kq
// Cái cần là xem danh sách xem đã có pt mới chưa -> không có fetchAll() hoặc fetch()
header('location: giao_vien.php');
// var_dump($ten, $email, $gioi_tinh, $sql);


