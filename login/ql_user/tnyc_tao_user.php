<?php
$email = $_POST['email'];
$password = $_POST['password'];
// input dạng file sẽ được lấy qua biến toàn cục $_FILES[name_input]
$avatar = $_FILES['avatar'];
// echo '<pre>';
// var_dump($email, $password, $avatar);
// Mục tiêu: lưu file vào thư mục images,
// mã hoá tên file để tránh ghi đè
$save_avatar = '';
if ($avatar['tmp_name'] != '') {
    // Tên thư mục lưu file, cần tạo sẵn và cấp quyền
    $folderName = 'images/';
    // Nối tên file với 1 đoạn mã duy nhất để tránh trùng
    $fileName = uniqid() . $avatar['name'];
    // Nội dung file
    $file = $avatar['tmp_name'];
    // Lưu nội dung ảnh abc.png vào images/xxxabc.png
    if(move_uploaded_file($file, $folderName . $fileName)) {
        // Nếu lưu thành công thì gán đường dẫn vào $save_file để lưu vào DB
        $save_avatar = $folderName . $fileName;
    }
}
// Mã hoá password
$password_hashed = password_hash($password, PASSWORD_BCRYPT);
// Lưu dữ liệu
require_once('../db.php');
$sql = "INSERT INTO users (email, password, avatar) "
    . "VALUES ('$email', '$password_hashed', '$save_avatar')";
$statement = $connect->prepare($sql);
$statement->execute();
// header('location: index.php');
