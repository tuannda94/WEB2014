<?php
require_once('ho_ten.php');
echo '<pre>';
var_dump($ten);

$array = [1, 2, 5, 6, 7, 8, 10, 20, 30];
// hiển thị tất cả các số trong mảng $array chia hết cho độ dài $ten
$do_dai_ten = strlen($ten);
for ($i = 0; $i < count($array); $i++) {
    // Chia hết ~ chia dư 0
    if ($array[$i] % $do_dai_ten === 0) {
        echo $array[$i];
        echo '<br>';
    }
}
