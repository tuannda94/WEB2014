<?php
// Tính đúng sai
// SAI khi giá trị là: '', 0, null, undefined, NaN, false, []
echo '<pre>';
var_dump('chuỗi rỗng', (bool) '');
var_dump('số 0', (bool) 0);
var_dump('null', (bool) null);
var_dump('biến chưa đc gán giá trị', (bool) $a); // undefined
// var_dump('ép abc123 thành số', (int) 'abc123');
var_dump('false', false);
var_dump('mảng rỗng', (bool) []);
var_dump('true > 0', true > 0);

// Kiểm tra tính đúng sai qua câu điều kiện if
// VD: Kiểm tra 1 mã_sinh_viên có tồn tại trong CSDL không
if ($msv > 0) { // cau dieu kien
    // hien thi thong tin sinh vien
} else {
    // neu dieu kien sai thi chay vao day
}

// Với mysql, khoá chính luôn là 1 số nguyên dương
// -> kiểm tra khoá chính tồn tại khi nó không sai (!0, !null...)
$msv = 1;
if ($msv) {
    echo "Nguyễn Văn A";
} else {

}
// Việc && sẽ chạy phần bên trái, nếu đúng sẽ chạy phần bên phải
// Không quan tâm && ra đúng hay sai, quan tâm công việc chạy ở bên phải
$msv && print("Nguyễn Văn B");
// Toán tử ba ngôi
$msv ? print("Nguyễn Văn C") : print("Nguyễn Văn SAI");

$a = 3;

if ($a > 2 || $a + 2 < 5 && $a > 0) {
    var_dump(!$a); // vì 3 là số khác 0, là đúng nên !đúng -> false
    echo '$a = 3 Đúng';
} else {
    echo '$a = 3 Sai';
}

// SWITCH CASE
// Tình huống: Kiểm tra quyền của một tài khoản đăng nhập
// Các quyền sẽ xuất hiện của một tài khoản

include 'hang-so.php';
// phần code phía sau include sẽ có toàn bộ nội dung của file đó

$user_role = 1;

switch ($user_role) {
    case USER_ROLE:
        var_dump('USER ROLE');
        // thực hiện lệnh
        break;
    case ADMIN_ROLE:
            var_dump('ADMIN ROLE');
        // thực hiện lệnh
        break;
    case SHIPPER_ROLE:
        // thực hiện lệnh
        break;
    case MOD_ROLE:
        // thực hiện lệnh
        break;
    //...
    default:
        // thực hiện lệnh khi không chạy vào case nào
}
