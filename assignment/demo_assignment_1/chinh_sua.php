<?php
// Dùng PHP lấy dữ liệu từ thẻ a qua method get, biến $_GET
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$name = isset($_GET['name']) ? $_GET['name'] : '';

// Hàm này khi được gọi sẽ điều hướng quay về file được chỉ định
header('location: danh_sach.php');
?>

<h1>Form chỉnh sửa</h1>
<form action="">
    <input name='id' value='<?= $id ?>' placeholder="ID">
    <input name='name' value='<?= $name ?>' placeholder="Tên">
    <button>Cập nhật</button>
</form>
