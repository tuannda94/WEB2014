<?php
// Với file chỉ có logic php thì có thể không cần đóng php nữa
// Các thao tác tính toán
$number1 = 4;
$number2 = 3;
// Ctr D để bôi các phần giống nhau
// Giữ Ctrl và ấn End để nhảy xuống cuối dòng
echo '$number1 + $number2: ' . ($number1 + $number2) . '<br>';
echo '$number1 - $number2: ' . ($number1 - $number2) . '<br>';
echo '$number1 * $number2: ' . ($number1 * $number2) . '<br>';
echo '$number1 / $number2: ' . ($number1 / $number2) . '<br>';
echo '$number1 % $number2: ' . ($number1 % $number2) . '<br>';
echo '$number1 ** $number2: ' . ($number1 ** $number2) . '<br>';
echo '$number1 += $number2: ' . ($number1 += $number2) . '<br>';

echo '<hr>';
// Các phép so sánh
// false ~ 0, false, null, [], ''
$id = 0;

if ($id) {
    echo 'ĐÚNG';
} else {
    echo 'SAI';
}
echo '<hr>';

$username = '123';
// if ($username != '' || $username != null) {
if ($username) {
    echo 'hiển thị tên';
} else {
    echo 'tên lỗi';
}
