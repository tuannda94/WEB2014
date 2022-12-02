<?php
// Dùng PHP lấy dữ liệu từ thẻ a qua method get, biến $_GET
$ma_vat_nuoi = isset($_GET['id']) ? $_GET['id'] : 0;
// $name = isset($_GET['name']) ? $_GET['name'] : '';
// Ngay sau khi lấy được $id
// Truy vấn để lấy thông tin bản ghi có id = $id
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=quan_ly_vat_nuoi',
    'root',
    ''
);
// Viết truy vấn
$sql = "SELECT * FROM pets WHERE id=$ma_vat_nuoi";
// Nạp
$statement = $connect->prepare($sql);
// Thực thi
$statement->execute();
// Lấy dữ liệu, vì đây là 1 bản ghi duy nhất nên dùng fetch
// Dùng fetchAll cũng được nhưng lại phải $array[0]['id']
$mot_con_vat = $statement->fetch();
var_dump($mot_con_vat);

// Lấy thêm ds loại từ CSDL để người dùng có thể chọn và thay loại khác
$sql_loai = "SELECT * FROM types";
$statement_loai = $connect->prepare($sql_loai);
$statement_loai->execute();
$ds_loai = $statement_loai->fetchAll();


// Hàm này khi được gọi sẽ điều hướng quay về file được chỉ định
// header('location: danh_sach.php');
?>

<h1>Hiển thị thông tin vật nuôi</h1>
<p>Mã vật nuôi: <?= $mot_con_vat['id']?></p>
<p>Tên vật nuôi: <?= $mot_con_vat['name'] ?> </p>a

<h1>Form chỉnh sửa</h1>
<form action="tnyc_chinh_sua.php" method="POST">
    <input name='id' value='<?= $mot_con_vat['id'] ?>' placeholder="ID"
        hidden
    >
    <input name='name' value='<?= $mot_con_vat['name'] ?>' placeholder="Tên">

    <select name="type_id" id="">
        <?php foreach ($ds_loai as $key => $value) { ?>
            <option value="<?= $value['id'] ?>"> <?= $value['name'] ?></option>
        <?php } ?>
    </select>

    <button>Cập nhật</button>
</form>
