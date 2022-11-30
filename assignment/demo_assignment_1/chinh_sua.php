<?php
// Dùng PHP lấy dữ liệu từ thẻ a qua method get, biến $_GET
$id = isset($_GET['id']) ? $_GET['id'] : 0;
// $name = isset($_GET['name']) ? $_GET['name'] : '';
// Ngay sau khi lấy được $id
// Truy vấn để lấy thông tin bản ghi có id = $id
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=quan_ly_vat_nuoi',
    'root',
    ''
);
// Viết truy vấn
$sql = "SELECT * FROM pets WHERE id=$id";
// Nạp
$statement = $connect->prepare($sql);
// Thực thi
$statement->execute();
// Lấy dữ liệu, vì đây là 1 bản ghi duy nhất nên dùng fetch
// Dùng fetchAll cũng được nhưng lại phải $array[0]['id']
$mot_con_vat = $statement->fetch();
var_dump($mot_con_vat);

// Hàm này khi được gọi sẽ điều hướng quay về file được chỉ định
// header('location: danh_sach.php');
?>

<h1>Form chỉnh sửa</h1>
<form action="">
    <input name='id' value='<?= $id ?>' placeholder="ID">
    <input name='name' value='<?= $mot_con_vat['name'] ?>' placeholder="Tên">
    <button>Cập nhật</button>
</form>
