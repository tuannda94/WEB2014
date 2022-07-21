<?php
// Nơi tiếp nhận yêu cầu của form_sua_phong_ban.php
require_once('db.php');
// 1. Nhận dữ liệu từ input trong form qua $_POST
// var_dump($_POST);
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
// 2. Viết truy vấn
$sql = "UPDATE phong_ban
    SET name='$name',description='$description'
    WHERE id='$id'";
// 3. Nạp truy vấn
$statement = $connect->prepare($sql);
// 4. Thực thi
$statement->execute();
// 5. Thực thi xong thì quay về danh sách
header('location: phong_ban.php');
