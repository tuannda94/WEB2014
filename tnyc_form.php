<?php
// File này được chạy vào
// khi là action của 1 form
// Có phương thức quy định trong form
// để file này nhận dữ liệu người dùng nhập

// Phương thức GET
// $_GET là 1 biến toàn cục,
// lưu trữ dữ liệu người dùng gửi lên
// $_GET là 1 mảng [
    // key là thuộc tính name
    // value là giá trị người dùng nhập
// ]

// Chỉ cần là gõ đường dẫn vào file sau đó enter
// cũng là method GET
echo '<pre>';
var_dump($_GET);
// Khi lấy dữ liệu
// Bước 1: Kiểm tra key cần lấy có hay không
var_dump(isset($_GET['name']));
// Bước 2: Nếu trả về true thì mới dữ liệu ra sử dụng

// Hàm kiểm tra dữ liệu
    // $default nếu không truyền vào thì dùng 'Chưa nhập'
    function checkData($data, $default = 'Chưa nhập') {
        // if(isset($data)) {
        //     return $data;
        // }

        // return $default;
        return isset($data) ? $data : $default;
    }
?>
<h1>Thông tin người dùng</h1>
<p>Username: <?= checkData($_GET['name'], 'lỗi tên') ?></p>
<p>Password: <?= checkData($_GET['pwd']) ?></p>

<!-- Bài tập -->
<!-- Tạo 1 form gồm các thông tin
- Họ tên
- Email
- Ngày sinh
- Lựa chọn giới tính bằng select
- Radio chọn trạng thái (Kích hoạt/Không kích hoạt)
Nút submit -> gửi yêu cầu sang file tnyc.php để hiển thị -->

<form action="" method="GET">
    <input type="text" name="full_name" placeholder="Họ tên">
    <input type="email" name="email" placeholder="Email">
    <input type="date" name="birthday" placeholder="Ngày sinh">
    <select name="gender" id="">
        <option value="1">Nam</option>
        <option value="2">Nữ</option>
    </select>
    <input type="radio" name="status" value="1"> Kích hoạt
    <input type="radio" name="status" value="0"> K Kích hoạt
    <button type="submit">Submit</button>
</form>
