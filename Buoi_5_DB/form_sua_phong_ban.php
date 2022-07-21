<?php
// 1. Đưa connect db vào
require_once('db.php');
// 2. Định nghĩa câu truy vấn
if (!isset($_GET['id']) || $_GET['id'] == '') {
     // Nếu không tồn tại id trên url thì quay về danh sách
    header('location: phong_ban.php');
}
$phong_ban_id = $_GET['id'];
$sql = "SELECT * FROM phong_ban where id = $phong_ban_id";
// 3. Nạp truy vấn
$statement = $connect->prepare($sql);
// 4. Thực thi
$statement->execute();
// 5. Lấy dữ liệu
$phong_ban = $statement->fetch();
// Sử dụng fetch để lấy ra 1 phần tử thay vì fetchAll lấy ra 1 mảng các phần tử
if($phong_ban == false) {
    header('location: phong_ban.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sửa phòng ban</title>
</head>
<body>
    <div class='container'>
        <h1>Form chỉnh sửa phòng ban</h1>
        <form
            action="sua_phong_ban.php"
            method="POST"
        >
            <input type="hidden" name='id'
                value="<?= $phong_ban['id']  ?>"
            >
            <div class='form-group'>
                <label for="">Tên phòng ban</label>
                <input
                    type="text" name='name'
                    class='form-control'
                    value="<?= $phong_ban['name'] ?>"
                >
            </div>
            <div class='form-group'>
                <label for="">Mô tả phòng ban</label>
                <input
                    type="text" name='description' class='form-control'
                    value="<?= $phong_ban['description'] ?>"
                >
            </div>
            <div>
                <button class='btn btn-primary' type='submit'>Cập nhật</button>
                <button class='btn btn-warning' type='reset'>Nhập lại</button>
            </div>

        </form>
    </div>
</body>
</html>

