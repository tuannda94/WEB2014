<?php
include 'connect.php';
// Lấy dữ liệu ds các bản ghi trong CSDL để hiển thị
$sql = "SELECT * FROM users";
$statement = $connect->prepare($sql);
$statement->execute();

$danh_sach_user = $statement->fetchAll();
?>
<div>
    <a href="tao_moi_user.php"><button>Tạo mới user</button></a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Avatar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($danh_sach_user as $index => $user) { ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['email']?></td>
                <td><img src="<?= $user['avatar']?>" alt="<?= $user['name']?>" width="100"></td>
                <td><a href="tnyc_xoa_user.php?id=<?= $user['id'] ?>" onclick="return confirm('Bạn có muốn xoá không?');"><button>Xoá user</button></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
