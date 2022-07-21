<?php
// Đưa db.php vào để tí nữa truy vấn
require_once('db.php');
// Nhận id từ URL: xoa_sinh_vien.php?id=1
if (!isset($_GET['id']) || $_GET['id'] == '') {
    // Nếu id trên url có vấn đề thì quay về danh sách
    header('location: sinh-vien.php');
}
$id = $_GET['id'];
// Định nghĩa truy vấn xoá bản ghi trong bảng students
$sql = "DELETE FROM students WHERE id=$id";
var_dump($id, $sql);
// Nạp truy vấn
$statement = $connect->prepare($sql);
// Thực thi
$statement->execute();
// Quay về danh sách ban đầu: header('location: đường_dẫn');
header('location: sinh-vien.php');

