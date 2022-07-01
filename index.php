<!-- Phần nội dung HTML bên ngoài PHP -->
<h1>PHP1 Buổi 1</h1>
<h2>Nội dung code php ở bên dưới</h2>

<?php
// Phần nội dung code PHP
    $a = 123; // $ là tiền tố định nghĩa biến, a là tên biến và = là toán tử gán giá trị
    $a1 = 123.345;
    $b = 'abc';
    $c = true; // hoặc false
    $d = []; // hoặc array()
    $e = null;
    // $f = undefined; // không dùng được kiểu khai báo giá trị undefined

    // echo $a, $b, 'WE17309';
    // echo '<p>123123</p>';

    // Với các thao tác của toán tử tính toán: chỉ áp dụng với kiểu số
    echo $a + $a1;
    // Với các thao tác giữa kiểu số và chuỗi thì chỉ dùng ký tự "." để nối
    echo $a . ' ' . $b;

?>

<h5>Kết thúc phần code PHP</h5>
