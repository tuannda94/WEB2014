<?php
// Với những file chỉ có code PHP thì có thể không cần đóng khối PHP lại
// Có thể code thêm bất cứ lúc nào

$a = 1; // Kiểu dữ liệu số nguyên
$a1 = 1.2; // Kiểu số thập phân
$b = 'we17315'; // Kiểu dữ liệu chuỗi
$c = false; // false
$e = null;
// Kiểu undefined là kiểu chưa được định nghĩa, xuất hiện khi gọi 1 biến chưa khai báo
$f = [];

echo '<hr>';
// Toán tử
echo $a + $a1;
// echo $a + $b; // Không cho thao tác cộng với giá trị không phải số
echo $a . $b; // Với cú pháp '.' để nối chuỗi thì dữ liệu sẽ được đẩy về dạng chuỗi hết
echo $b . $c;
// echo $b . $f; // Với kiểu dữ liệu mảng không ép được về dạng chuỗi nên không nối được

echo '<hr>';
$number1 = 4;
$number2 = 2;
// Alt + Shift + mũi tên xuống để sao chép dòng xuống dưới
// Ctrl + D để nháy chuột vào các phần giống nhau
echo 'number1 + number2 = ' . ($number1 + $number2) . '<br>'; //6
echo 'number1 - number2 = ' . ($number1 - $number2) . '<br>'; //2
echo 'number1 * number2 = ' . ($number1 * $number2) . '<br>'; //8
echo 'number1 / number2 = ' . ($number1 / $number2) . '<br>'; //2
echo 'number2 / number1 = ' . ($number2 / $number1) . '<br>'; //0.5
echo 'number1 % number2 = ' . ($number1 % $number2) . '<br>'; //2
echo 'number2 % number1 = ' . ($number2 % $number1) . '<br>'; //2
echo '4^2' . ($number1 ** $number2) . '<br>'; // giá trị đầu mũ giá trị sau

echo '<hr>';

// Toán tử so sánh
if (true == [1]) {
    echo 'Đúng';
    // chuỗi không rỗng
    // số khác 0
    // mảng không rỗng
} else {
    echo 'Sai';
    // chuỗi rỗng
    // số 0
    // null
    // mảng rỗng
}
// Kiểm tra nếu chuỗi $b có giá trị thì mới làm gì đó
$string = '123123123';
if ($string !== null && $string !== '') {
    echo 'Chuỗi string có nội dung';
}

if ($string) {
    echo 'Chuỗi string có nội dung';
} else {
    echo 'Chuỗi string rỗng';
}

echo '<hr>';

echo "$string abcdef"; // trong nháy kép vẫn phân tích cú pháp biến
echo '$string abcdef'; // trong dấu nháy đơn thì không


