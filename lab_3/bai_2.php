<?php
echo '<pre>';

// $ho = 'Nguyen Duc Anh';
// $ten = 'Tuan';
require_once('ho_ten.php');

$do_dai_ho = strlen($ho);
$do_dai_ten = strlen($ten);

echo 'Tong: ' . ($do_dai_ho + $do_dai_ten);
echo '<br>';
echo 'Hieu: ' . ($do_dai_ho - $do_dai_ten);
echo '<br>';
echo 'Tich: ' . ($do_dai_ho * $do_dai_ten);
echo '<br>';
echo 'Thuong: ' . ($do_dai_ho / $do_dai_ten);
echo '<br>';

// Hàm: 1 đoạn code thực hiện 1 nghiệp vụ nhất định nào đó
// Hàm có thể trả về kết quả hoặc không
// Định nghĩa hàm: function tên_hàm(){
    // logic code
// }
function tinh_toan_theo_ho_ten() {
    echo 'Hàm tinh_toan_theo_ho_ten đã được chạy';
    echo '<br>';
}
// Gọi hàm: tên_hàm()
tinh_toan_theo_ho_ten(); // sẽ chạy toàn bộ code trong hàm

function tinh_tong() {
    $a = 2;
    $b = 3;
    echo $a + $b;
    echo '<br>';
}
tinh_tong();
// Hàm tinh_tong bên trên chỉ phục vụ công việc tính tổng 2 và 3 sau đó in ra màn hình
// Số cần tính tổng không thay đổi được
// kq chỉ được in ra màn hình mà không dùng được trong php
// Kết quả tính toán không dùng được cho những chỗ khác

function tinh_tong_moi($a, $b) {
    return $a + $b;
}
// hàm tinh_tong_moi có thể nhận nhiều bộ giá trị hơn
// kq có thể dùng được ở nhiều chỗ
// tinh_tong_moi(3, 4); // nhận được kết quả 3+4 nhưng chưa in ra màn hình
echo tinh_tong_moi(3, 4); // nhận kết quả và in ra màn hình
echo '<br>';
echo tinh_tong_moi(5, 100); // nhận kết quả và in ra màn hình
echo '<br>';
var_dump(tinh_tong_moi($do_dai_ho, $do_dai_ten));

function tinh_hieu ($a, $b) {
    return $a - $b;
}
echo tinh_hieu($do_dai_ho, $do_dai_ten);
echo '<br>';
