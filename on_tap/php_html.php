Nội dung HTML

<?php
// Hiển thị ra trình duyệt
echo 'Nôi dung HTML trong PHP';

?>

Nội dung HTML thứ 2

<?php
echo 'Nội dung HTML trong PHP thứ 2';
?>

<?php
$ten_bien = 'Gia tri';

$mang = [1, 2, 4];
$mang[0]; // 1

$mang_key_value = ['vi_tri_1' => 'gia tri 1', 'vi_tri_2' => 2];
$mang_key_value['vi_tri_1']; // 'gia tri 1';
$mang_key_value['vi_tri_2']; // 2;

$mang_hai_chieu = [
    0 => [1, 2, 3],
    1 => ['abc', 'def', 'efg'],
];
$mang_hai_chieu[0]; // [1, 2, 3]
$mang_hai_chieu[0][1]; // 2
$mang_hai_chieu[1][2]; // 'efg'

// Bắt đầu với việc xây dựng bảng bằng HTML và dữ liệu bên trong bằng PHP
// VD: Bảng thông tin sinh viên: mã sinh viên, tên, ngày tháng năm sinh
$sinh_vien = [
    0 => [
        'msv' => 1,
        'ten_sv' => 'Nguyen Van A',
        'ngay_sinh' => '12/12/2000'
    ],
    1 => [
        'msv' => 2,
        'ten_sv' => 'Nguyen Van B',
        'ngay_sinh' => '12/12/2000'
    ],
    2 => [
        'msv' => 3,
        'ten_sv' => 'Nguyen Van C',
        'ngay_sinh' => '12/12/2000'
    ],
];

echo '<h1>Bang luu tru sinh vien</h1>';

?>

<table>
    <thead>
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Ngày sinh của sinh viên</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sinh_vien as $index => $mot_sinh_vien) { ?>
            <tr>
                <td> <?php echo $mot_sinh_vien['msv'] == 1 ? 'Sinh viên đầu tiên' : 'Các sinh viên tiếp theo'; ?> </td>
                <td> <?= $mot_sinh_vien['ten_sv']; ?> </td>
                <td> <?= $mot_sinh_vien['ngay_sinh']; ?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<h1>Form tạo sinh viên</h1>
<?php
// GET là phương thức để người dùng gửi yêu cầu đến server, có thể truyền dữ liệu nhưng hiển thị dữ liệu ở đường dẫn trình duyệt
// POST tương tự, nhưng ẩn dữ liệu đi
var_dump('GETTTTT', $_GET, $_GET['ten_sinh_vien']);
var_dump('POSTTTT', $_POST, $_POST['ten_sinh_vien']);
?>
<form action="" method='POST'>
    <input type="text" name="ten_sinh_vien" placeholder="Tên sinh viên">
    <input type="date" name="ngay_sinh" placeholder="Ngày sinh">
    <button>Submit</button>
</form>
