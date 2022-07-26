<?php
require_once('db.php');

// Lấy id của sv cần sửa ở form_sua_sv.php?id=1
// Nếu không có id trên URL hoặc id không có giá trị
if (!isset($_GET['id']) || $_GET['id'] == '') {
    // Quay về danh sách
    header('location: sinh-vien.php');
}
$id = $_GET['id'];
// Lấy ra thông tin student cần sửa trong db theo id
$sql = "SELECT * FROM students WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();
// fetch sẽ lấy ra chính xác bản 1 ghi đó
$student = $statement->fetch();
// var_dump($student, $student['name']);
?>
<form
    action="sua_sv.php"
    method="POST"
>
    <!-- Việc update cần where id, nhưng id không được sửa -->
    <!-- Nên cần đưa name='id' vào form để lấy giá trị nhưng phải ẩn trên giao diện để người dùng không sửa được -->
    <input type="hidden" name='id'
        value="<?= $student['id'] ?>"
    >
    <div>
        <input type="text" placeholder='name' name='name'
            value="<?= $student['name'] ?>"
        >
    </div>
    <div>
        <input type="text" placeholder='code' name='code'
            value="<?= $student['code'] ?>"
        >
    </div>
    <div>
        <input type="email" placeholder='email' name='email'>
    </div>
    <div>
        <input type="date" placeholder='date' name='birthday'>
    </div>
    <div>
        <input type="text" placeholder='phone' name='phone'>
    </div>
    <div>
        <input type="text" placeholder='address' name='address'>
    </div>
    <div><button>Tạo mới</button></div>
</form>

