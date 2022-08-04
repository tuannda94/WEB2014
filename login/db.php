<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=PHP1_WE17315',
    'root',
    ''
);

// Cơ chế mã hoá password
// Password người dùng nhập vào ô input
// $password = '1234567';
// password_hash('chuỗi cần mã hoá', phương thức mã hoá);
// Password đang được lưu ở DB
// $password_hashed = password_hash('123456', PASSWORD_BCRYPT);
// Chỉ có phương thức xác thực mật khẩu chứ không dịch ngược từ mã hoá thành chuỗi ban đầu
// var_dump(
//     $password,
//     $password_hashed,
//     password_verify($password, $password_hashed)
// );
// Khi kiểm tra người dùng
// 1. Lấy ra bản ghi user có email trùng với email trong DB;
// 2. Sử dụng password verify để so sánh password
