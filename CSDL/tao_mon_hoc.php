<?php
// 1. Lấy connect từ db.php
require_once('db.php');
// 2. Lấy dữ liệu từ form theo name
$name = isset($_POST['name']) ? $_POST['name'] : '';
$code = isset($_POST['name']) ? $_POST['code'] : '';
// 3. Định nghĩa truy vấn, chú ý giá trị dạng chuỗi
$sql = "INSERT INTO subjects "
    . "(name, code) "
    . "VALUES ('$name', '$code')";
// 4. Nạp truy vấn
$statement = $connect->prepare($sql);
// 5. Thực thi
$statement->execute();
// 6. Quay về danh sách xem danh sách bản ghi mới
header('location: index.php');
// var_dump($name, $code, $sql);
