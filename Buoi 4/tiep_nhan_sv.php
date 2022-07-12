Thông tin sinh viên

<?php
// Xử lý logic việc kiểm tra dữ liệu và hiển thị điểm, trạng thái
$empty_text = 'Để trống';
$name = $_POST['name'];
// isset sử dụng để kiểm tra có tồn tại biến hoặc phần tử trong mảng k
// Nếu không tồn tại $name hoặc $name là chuỗi rỗng thì gán = $empty_text
if (!isset($name) || $name === '') {
    $name = $empty_text;
}
// Toán tử 3 ngôi: nếu đúng thì gán gt sau ?, nếu sai gán gt sau :
$id = (isset($_POST['id']) && $_POST['id'] !== '')
    ? $_POST['id']
    : $empty_text;

$point = $_POST['point'];
$point_text = '';
if (!isset($_POST['point']) || $_POST['point'] === '') {
    // Nếu điểm không hợp lệ
    $point_text = 'Điểm không hợp lệ';
} else if ($point < 5) {
    // Nếu điểm hợp lệ và < 5
    $point_text = 'Học lực yếu';
} else if ($point >= 5 && $point < 7) {
    // Nếu điểm hợp lệ và >=5 và < 7
    $point_text = 'Học lực TB';
} else {
    // Nếu điểm hợp lệ và >=7
    $point_text = 'Học lực giỏi';
}

$status = isset($_POST['status']) ? $_POST['status'] : -1;
$status_text = '';
switch ($status) {
    case 1:
        $status_text = 'Qua';
        break; // Nếu chạy vào case này thì sẽ gán và dừng luôn
    case 0: // chỉ so sánh ==
        $status_text = 'Trượt';
        break;
    default:
        // Nếu các case bên trên không thoả mãn thì vào đây
        $status_text = 'Không hợp lệ';
}
?>

<p>Tên sinh viên: <?= $_POST['name'] ?></p>
<p>Tên sinh viên: <?= $name ?></p>
<p>Mã sinh viên: <?= $_POST['id'] ?></p>
<p>Mã sinh viên: <?= $id ?></p>
<p>Lớp: <?= $_POST['subject'] ?></p>
<p>Điểm số: <?= $point ?> - <?= $point_text ?></p>
<p>Trạng thái: <?= $status_text ?></p>
