<?php
include 'connect.php'; // lấy biến $connect thực hiện truy vấn

$id_chinh_sua = isset($_POST['id']) ? $_POST['id'] : 0;
$ten_chinh_sua = isset($_POST['name']) ? $_POST['name'] : '';

$truy_van_cap_nhat = "UPDATE pets SET name='$ten_chinh_sua'"
    . " WHERE id=$id_chinh_sua";

$statement = $connect->prepare($truy_van_cap_nhat);
$statement->execute();
// Sau khi thực thi ở đây thì không cần nhận kết quả
// Kết quả thể hiện ở danh sách mới
header('location: danh_sach.php');
// Vì trong danhsach.php đã có đoạn truy vấn lấy ds mới được chạy lại
// nên không cần làm gì cả mà chỉ header vào là sẽ lấy dữ liệu mới
