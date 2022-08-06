<?php
require_once('db.php');
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];
// Giá trị mặc định của lỗi là chuỗi rỗng
$errors = '';
if($email == '') {
    $errors = $errors . 'Bắt buộc nhập email! ';
}
if ($mat_khau == '') {
    $errors .= 'Bắt buộc nhập mật khẩu!';
}
// Kiểm tra nếu có lỗi thì quay về màn login kèm lỗi đó
if($errors != '') {
    header("location: login-form.php?errors=$errors");
} else {
    // Nếu k có lỗi thì mới bđ công việc của DB
    // 1. Lấy ra bản ghi có email === email nhập vào
    $sql = "SELECT * FROM nguoi_dung WHERE email='$email'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    // 2.1 Nếu không có $loginUser thì là không tồn tại
    if($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';
        header("location: login-form.php?errors=$errors");
    // 2.2 Nếu có $loginUser nhưng password sai
    } else if (!password_verify($mat_khau, $loginUser['mat_khau'])) {
        $errors = 'Mật khẩu sai!';
        header("location: login-form.php?errors=$errors");
    // 2.3 Đã đúng thông tin
    } else {
        // Lưu thông tin vào phiên làm việc để các chỗ khác đều đọc được
        // Nếu kết thúc phiên làm việc, hoặc xoá đi thì mất luôn
        // 2.3.1 Khởi động session
        session_start();
        // 2.3.2 Lưu thông tin tài khoản vào phiên làm việc
        $_SESSION['user'] = $loginUser;
        // Quay về form login để xem xem có chưa
        header('location: login-form.php');
    }
}
