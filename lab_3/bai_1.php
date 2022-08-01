<?php
// Thẻ để các phần nội dung trong nó không bị hiển thị trên 1 dòng
echo '<pre>';

$str = 'Bai 1.1';
echo $str;
echo '<br>';

$array1 = ['array_item_1', 'array_item_2', 'array_item_3'];
$array1_kieu_2 = [
    0 => 'array_item_1',
    1 => 'array_item_2',
    2 => 'array_item_3'
];

for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i];
    echo '<br>';
}

$array2 = [
    0 => [
        'id' => 1,
        'ten' => 'Nguyen Van A'
    ],
    1 => [
        'id' => 2,
        'ten' => 'Nguyen Van B'
    ],
];

// var_dump($array2);
for ($i = 0; $i < count($array2); $i++) {
    // echo $array2[$i] // -> neu $i = 0 thi ['id' => 1, 'ten' => 'Nguyen Van A'];
    echo $array2[$i]['ten'];
    echo '<br>';
}

foreach($array2 as $key => $value) {
    // ở vị trí 0 thì $key = 0, và $value = ['id' => 1, 'ten' => 'Nguyen Van A'];
    // ở vị trí 1 thì $key = 1, và $value = ['id' => 2, 'ten' => 'Nguyen Van B'];
    // echo $array2[$key]['ten'];
    echo $value['ten'];
    echo '<br>';
}


