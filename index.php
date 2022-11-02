<!-- Đây là phần nội dung hiển thị như HTML -->
FILE PHP LỚP WE18104
<br>

<!-- Đây là cú pháp mở và đóng vùng nội dung code PHP -->
<?php
// 1. Khai báo biến: ký tự $ và tên biến
$a; // bắt buộc khi kết thúc câu lệnh phải có chấm phẩy

// 2. Gán giá trị và kiểu dữ liệu
$a = 1; // kiểu dữ liệu chính là kiểu của giá trị vừa gán cho biến

// var_dump('Giá trị của biến $a', $a);

// với PHP 8 cần gán giá trị mặc định cho biến khi khai báo
$b = 'Giá trị mặc định của $b';
$b = "Giá trị biến $b";

// var_dump('Giá trị của biến $b', $b);
echo $b;

$c = true;
$d = false;

echo '<br>'; // phần nội dung này được coi như 1 thẻ ở html -> xuống dòng

echo $c; // true sẽ hiển thị 1 ở phần html
echo $d; // false sẽ không hiển thị gì ở phần html

// 3. Cú pháp & toán tử
// 3.1 Nối chuỗi
$string1 = "Chuỗi 1";
$string2 = "Chuỗi 2";
$string12 = $string1 . ' ' . $string2; // nối bằng toán tử .
$string123 = "$string1 $string2"; // Nối bằng cú pháp nháy kép
?>

<!-- Đây là vùng code HTML ở giữa -->
<h1>Đây là phần HTML giữa 2 vùng PHP</h1>

<?php
// Đây là 1 vùng code PHP khác
// Code PHP chạy từ trên xuống dưới, không quan tâm vùng code ntn
echo "Đây là giá trị string123: $string123";

?>
