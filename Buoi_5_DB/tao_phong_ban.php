<?php
// 1. Đưa biến $connect vào
require_once('db.php');
// 2. Nhận dữ liệu từ bên form
$name = $_POST['name'];
$desc = $_POST['description'];
var_dump($_POST);
// 3. Tạo câu truy vấn
$sql = "INSERT INTO phong_ban (name, description) "
    . "VALUES ('$name', '$desc')";
var_dump($sql);

// 4. Nạp truy vấn
$statement = $connect->prepare($sql);
// 5. Thực thi
$statement->execute();
// 6. Quay về trang danh sách
header('location: phong_ban.php');
