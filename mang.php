<?php
// Mảng là tập hợp các phần tử được sắp xếp ở các vị trí, có thể khác kiểu dữ liệu nhau
$a = []; // Khai báo 1 mảng rỗng
$b = [1, 2, 3, 4];

$c_lien_ket = [
    'name' => 'tuannda3',
    'phone' => '0392871868',
    'address' => 'HN',
    'status' => false,
    'email' => ''
];

// echo $a; // Khi echo thì giá trị sẽ được ép sang kiểu chuỗi, nhưng array không ép được

var_dump($a, $b[1]);
// die(); Dừng lại toàn bộ và không chạy các câu lệnh ở phía sau

echo '<br>';

var_dump($c_lien_ket, $c_lien_ket['phone']);

echo '<hr>';

for($i = 0; $i < count($b); $i++) {
    echo 'Giá trị của phần tử ở vị trí thứ '. $i . 'là: '. $b[$i] . '<br>';
}
echo '<br>';
foreach ($c_lien_ket as $value) {
    echo 'Giá trị của vòng lặp là: ' . $value . '<br>';
}
echo '<br>';
foreach ($c_lien_ket as $key => $value) {
    if ($value === true) {
        // Nếu chỉ so sánh == thì 'tuannda3' cũng được hiểu là đúng nên sẽ chạy vào đây
        echo 'Giá trị của vòng lặp ở vị trí ' . $key . ' là: Kích hoạt'  . '<br>';
    } else if ($value === false) {
        // Nếu chỉ so sánh == thì '' cũng được hiểu là sai nên sẽ chạy vào đây
        echo 'Giá trị của vòng lặp ở vị trí ' . $key . ' là: Không kích hoạt' . '<br>';
    } else {
        echo 'Giá trị của vòng lặp ở vị trí ' . $key . ' là: ' .$value . '<br>';
    }
}

echo '<hr>';
echo '<h1>Luyện tập</h1>';
// Bài 1. Khai báo giá trị cho 1 biến, kiểm tra giá trị đó có phải là 1 số chẵn k?
echo '<br>';
echo '<p>Bài 1</p>';
$bai1_number = 1234;
// is_int kiểm tra 1 giá trị có phải là số nguyên không
// %2===0 chia 2 dư 0
if (is_int($bai1_number) && ($bai1_number % 2 === 0)) {
    echo 'Là số chẵn';
} else {
    echo 'Không phù hợp';
}

echo '<br>';

// Bài 2. Có 1 mảng [1,2,3,4,5]. Đếm xem có bao nhiêu số chẵn ở trong mảng đó
echo '<p>Bài 2</p>';
$bai2_mang = [1, 2, 3, 4, 5, 'abc', 4];
// Định nghĩa ra 1 biến đếm có giá trị mặc định là 0
$bai2_count = 0;
for($i = 0; $i < count($bai2_mang); $i++) {
    if (is_int($bai2_mang[$i]) && ($bai2_mang[$i] % 2 === 0)) {
        $bai2_count++;
    }
}
echo 'Tổng số chẵn trong mảng: ' . $bai2_count;

echo '<br>';
// Bài 3. Có 1 mảng ['name' => 'tuan', 'age' => 30].
// Kiểm tra xem mảng đó có 'name' không và name có giống nội dung 'tuannda3' không?
echo '<p>Bài 3</p>';
$bai3_mang = [
    'name' => 'tuannda3',
    'age' => 30
];
// array_key_exists kiểm tra 1 key có tồn tại trong 1 mảng hay không
if (array_key_exists('name', $bai3_mang) && $bai3_mang['name'] === 'tuannda3') {
    echo 'Có tồn tại name và giá trị là tuannda3';
} else {
    echo 'Không phù hợp';
}
