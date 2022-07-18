<?php
// 1. Đưa $connect từ file db.php vào
require_once('db.php');
// 2. Nhận được id từ đường dẫn bấm nút xoá
// xoa_phong_ban.php?id=1
$phong_ban_id = $_GET['id'];
// 3. Tạo câu truy vấn
$sql = 'delete from phong_ban where id=' . $phong_ban_id;
// $sql2 = "delete from phong_ban where id = $phong_ban_id";
// 4. Nạp câu truy vấn
$statement = $connect->prepare($sql);
// 5. Thực thi
$statement->execute();
// 6. Quay về trang mong muốn
header('location: phong_ban.php');
