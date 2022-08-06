<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=PHP1_WE17309',
    'root',
    ''
);

$mk_nguoi_dung_nhap = '123456';
// mã hoá thành 1 chuỗi duy nhất, không dịch ngược được
// Chỉ có thể sử dụng password_verify để đối chiếu
$mk_da_ma_hoa = password_hash(
    $mk_nguoi_dung_nhap, // chuỗi cần mã hoá
    PASSWORD_BCRYPT // cách thức mã hoá
);
echo '<pre>';
var_dump($mk_nguoi_dung_nhap, $mk_da_ma_hoa);
var_dump(password_verify('123456', $mk_da_ma_hoa));
var_dump(password_verify('1234567', $mk_da_ma_hoa));
