<?php
require_once('db.php');
// 1. Nhận id từ danh sách để biết sửa thằng nào, id là bao nhiêu
// 2. Truy vấn vào csdl để lấy toàn bộ thông tin bản ghi có id như trên
// 3. Dùng value trong input để đưa giá trị mặc định cho ô input

// Dùng thẻ a -> phương thức sẽ là get -> $_GET[tên biến truyền vào]
$id = $_GET['id'];
// Sẽ cần truy vấn -> cần biến $connect để thực thi -> require_once('db.php');
$sql = "SELECT * FROM giao_vien WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();

$mot_giao_vien = $statement->fetch(); // fetch sẽ nhận 1 bản ghi thay vì 1 mảng các bản ghi của fetchAll
$ngay_sinh = date('m-d-yy', strtotime($mot_giao_vien['ngay_sinh']));

// sẽ có đủ thông tin ten, email, gioi_tinh
?>
<!-- Form sẽ cần action, method, các name trong input -->
<form action="tiep_nhan_yc_sua_gv.php" method="POST">
    <input
        type="hidden"
        name="id"
        value="<?php echo $mot_giao_vien['id'] ?>"
    >
    <input
        type="text"
        name="ten"
        value="<?php echo $mot_giao_vien['ten'] ?>"
    >
    <input
        type="email"
        name="email"
        value="<?= $mot_giao_vien['email'] ?>"
    >
    <input
        type="radio"
        name="gioi_tinh"
        value="0"
        <?php
        // Nếu giá trị gioi_tinh bằng value là 0, thì sẽ hiển thị 1 thuộc tính 'checked' ở thẻ input
            if ($mot_giao_vien['gioi_tinh'] == 0) {
                echo 'checked';
            }
        ?>
    > Nữ
    <input
        type="radio"
        name="gioi_tinh"
        value="1"
        <?php
        // Nếu giá trị gioi_tinh bằng value là 0, thì sẽ hiển thị 1 thuộc tính 'checked' ở thẻ input
            if ($mot_giao_vien['gioi_tinh'] == 1) {
                echo 'checked';
            }
        ?>
    > Nam
    <input type="date" name="ngay_sinh" value="<?php echo $ngay_sinh ?>">
    <!-- type='submit' thì mới gửi được, nhưng đây là mặc định nên có thể không cần viết vào -->
    <button type='submit'>Cập nhật</button>
</form>
