<?php
// Mảng là tập hợp các phần tử, có thể khác nhau kiểu dữ liệu

// Khai báo các biến có kiểu dữ liệu mảng
$empty_array = []; // 1 mảng rỗng
$array_1 = [1];
$array_mix = [2, null, 'phan tu', true];
$array_2 = array(1, 2, 3);

echo '<pre>';
var_dump($empty_array[1]); // sử dụng vị trí để lấy ra giá trị
var_dump($array_mix[2]);
// Hàm đếm số lượng phần tử
var_dump(count($empty_array), count($array_mix));

// Mảng dạng key => value
$array_2_keyvalue = [0 => 1, 1 => 2, 2 => 3];
var_dump($array_mix, $array_2, $array_2_keyvalue);

// Mảng dạng key => value nhưng key là 1 chuỗi
$array_key_string = [
    'ten' => 'tuannda3',
    'tuoi' => 28,
    'gioi_tinh' => 1,
    'dia_chi' => 'Ha Noi'
];
// lấy giá trị 1 phần tử (value) dựa vào key
// key là 1 chuỗi
var_dump($array_key_string['gioi_tinh']);

// Tạo 1 mảng key value thể hiện thông tin của 1 sản phẩm
// id, tên, giá, mô tả, hình ảnh (link), trạng thái
$product = [
    'id' => 100,
    'name' => 'IPHONE 15',
    'price' => 12000000,
    'description' => 'Sản phẩm của Apple',
    'image' => '',
    'status' => 0,
];

// Mảng hai chiều
$array_hai_chieu = [[1, 2], ['abc', 'def'], null, []];
$array_hai_chieu[2]; // null
$array_hai_chieu[1][1]; // 'def'
// Ví dụ về danh sách các bản ghi trong CSDL
$users = [
    0 => ['id' => 1, 'name' => 'tuannda3'],
    1 => ['id' => 2, 'name' => 'tuannda4'],
];
$products = [
    [
        'id' => 100,
        'name' => 'SAMSUNG GALAXY',
        'price' => 10000000,
    ],
    [
        'id' => 101,
        'name' => 'APPLE IPHONE',
        'price' => 10000000,
    ],
];
var_dump($products[0], $products[0]['price']);

var_dump('--------------------');

// Vòng lặp: xác định điểm bắt đầu, điểm dừng, lặp
// For
// $array_2 = array(1,2,3);
for ($i = 0; $i < count($array_2); $i++) {
    var_dump("GT của array_2 ở vị trí thứ $i là: $array_2[$i]");
}
// Đếm số lượng số chẵn trong mảng
$mang_can_kt = [1, 2, null, true, 6, 5, 'abc', 'def', 31];
// Chỉ định biến đếm số lượng, mặc định chưa có số
$count = 0;
for ($i = 0; $i < count($mang_can_kt); $i++) {
    // hàm isNaN -> true khi không phải số, false khi là số
    if (is_numeric($mang_can_kt[$i]) && $mang_can_kt[$i] % 2 == 0) {
        $count++;
    }
};
var_dump("Số lượng số chẵn trong mảng mang_can_kt là: $count");

// foreach(mảng as key => value)
foreach ($product as $key => $value) {
    var_dump("Key là $key và Value là $value");
}
foreach ($products as $key => $value) {
    var_dump($value['name'] . ' có giá là là ' . $value['price']);
}
