<?php
// Kiểm tra user đã đăng nhập chưa
session_start();
// Nếu chưa thì quay về màn login, và báo lỗi chưa đăng nhập
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}

// Danh sách người dùng trong bảng users
require_once('../db.php'); // ../ sẽ di chuyển ra thư mục bên ngoài
// Thực hiện lấy dữ liệu users
$sql = 'SELECT * FROM users';
$statement = $connect->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(); // ds users
?>

<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Ảnh đại diện</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $key => $value): ?>
            <tr>
                <td><?= $value['email'] ?></td>
                <td><img width="100" src="<?= $value['avatar'] ?>"></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
