<?php
session_start();
if(!isset($_SESSION['user'])) {
    $errors = 'Bạn cần đăng nhập để sử dụng tính năng!';
    header("location: login-form.php?errors=$errors");
}

require_once('db.php');
$sql = "SELECT nhan_vien.id,nhan_vien.ten,nhan_vien.link_anh,phong_ban.name as pb_name FROM nhan_vien "
    . "JOIN phong_ban ON nhan_vien.phong_ban_id = phong_ban.id";
$statement = $connect->prepare($sql);
$statement->execute();

$ds_nhan_vien = $statement->fetchAll();
// var_dump($ds_nhan_vien);
?>
<div>
    <a href="form_tao_nhan_vien.php">Tạo NV mới</a>
</div>
<table>
    <thead>
        <tr>
            <th>Ten NV</th>
            <th>Ten PB</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ds_nhan_vien as $key => $value): ?>
            <tr>
                <td><?= $value['ten'] ?></td>
                <td><?= $value['pb_name'] ?></td>
                <td><img width="100" src="<?= $value['link_anh'] ?>" alt=""></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
