<?php
// Mảng là tập hợp các phần tử có thể không cùng kiểu dữ liệu
$a = [1, 2, 3];
echo 'Giá trị của phần tử ở vị trí tứ 0 trong mảng a là $a[0]:' . $a[0];
echo '<hr>';
// echo $a; Không ép được kiểu array về string để hiển thị

// Dùng var_dump để hiển thị dữ liệu
var_dump('Giá trị của biến a: ', $a);
// die(); // Die sẽ làm dừng lại và không chạy tiếp phần code bên dưới nữa
echo '<hr>';

$b_lien_ket = [
    'name' => 'tuannda3', // cặp key => value sẽ thể hiện vị trí và giá trị tương ứng của phần tử
    'age' => 28,
    'phone' => '0392871868'
];

echo 'Giá trị của name ở $b_lien_ket là $b_lien_ket["name"]' . $b_lien_ket['name'];
echo '<br>';
echo "Giá trị của name ở là {$b_lien_ket['name']}";
echo '<hr>';

// Duyệt mảng thông thường
for($i = 0; $i < count($a) ;$i++) {
    echo $a[$i];
}
echo '<br>';

// Duyệt mảng liên kết
foreach ($a as $item) {
    echo $item;
}
echo '<br>';

foreach ($b_lien_ket as $item) {
    echo $item;
}
echo '<br>';

foreach ($b_lien_ket as $key => $value) {
    echo $key . ' ' . $value . '  ';
}
