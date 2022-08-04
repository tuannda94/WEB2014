<?php
require_once('db.php');
// 1. Nhận kq từ form
$email = $_POST['email'];
$password = $_POST['password'];

// 2. Validate giá trị form và hiển thị lỗi nếu có trên form login
// Giá trị mặc định của lỗi là rỗng
$errors = '';
// Nếu không có giá trị email, lỗi có thêm nội dung
if($email == '') {
    $errors = $errors . 'Email không được để trống!.';
}
// Nếu không có giá trị password, lỗi có thêm nội dung
if ($password == '') {
    $errors .= 'Password không được để trống!.';
}
// Nếu sau khi kiểm tra $errors có giá trị, thì quay về login cùng giá trị đó
if ($errors != '') {
    header("location: login.php?errors=$errors");
} else {
    // 3. Kiểm tra bản ghi trong DB xem có không
    $sql = "SELECT * FROM users WHERE email='$email'";
    $statement = $connect->prepare($sql);
    $statement->execute();

    $loginUser = $statement->fetch();
    // Sau khi lấy ra thông tin,
    // nếu không có bản ghi nào
    if ($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';
        header("location: login.php?errors=$errors");
    } else if (password_verify($password, $loginUser['password']) == false) {
        $errors = 'Mật khẩu không chính xác!';
        header("location: login.php?errors=$errors");
    } else {
        // Khi người dùng nhập đúng email, password
        session_start(); // Khởi tạo session để lưu thông tin user
        // $_SESSION là 1 biến toàn cục, kiểu mảng, lưu thông tin trong phiên làm việc
        $_SESSION['user'] = $loginUser; // lưu user = $loginUser vào phiên làm việc
        // Đăng nhập thành công, quay về màn login để chào
        header("location: login.php");
    }
}
// die; // Dừng code không đọc ở dưới nữa

