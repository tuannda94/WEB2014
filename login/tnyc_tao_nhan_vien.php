<?php
$ten_nv = $_POST['ten'];
$ma_phong_ban = $_POST['phong_ban_id'];
$anh = $_FILES['anh']; // file sẽ được đọc qua biến toàn cục $_FILES
// echo '<pre>';
// var_dump($ten_nv, $ma_phong_ban, $anh);
// 1. Định nghĩa link mặc định trước khi lưu vào DB
$link_anh = '';
// 2. Tạo 1 thư mục /images để tí lưu ảnh vào
// Nhớ cấp quyền ghi file cho nó
// 3. Upload ảnh vào thư mục /images
if ($anh['tmp_name'] != '') {
    // Nếu ảnh có nội dung khác chuỗi rỗng thì sẽ upload
    $folderName = 'images/';
    $fileName = uniqid() . '_' . $anh['name'];
    // move_uploaded_file(nội dung file, đường dẫn tới ảnh được lưu);
    move_uploaded_file($anh['tmp_name'], $folderName . $fileName);
    // Gán đường dẫn ảnh vào biến để lưu vào DB
    $link_anh = $folderName . $fileName;
}
require_once('db.php');
$sql = "INSERT INTO nhan_vien (ten,phong_ban_id,link_anh) "
    . "VALUES ('$ten_nv', '$ma_phong_ban', '$link_anh')";
$statement = $connect->prepare($sql);
$statement->execute();
header('location: nhan_vien.php');
