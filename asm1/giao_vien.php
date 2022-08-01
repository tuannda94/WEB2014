<?php
require_once('db.php');

$sql = 'SELECT * FROM giao_vien';

$statement = $connect->prepare($sql);
$statement->execute();
$ds_giao_vien = $statement->fetchAll();
?>

<a href="tao_gv.php">Tạo mới gv</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Hanh dong</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ds_giao_vien as $key => $value): ?>
            <tr>
                <td><?php echo $value['id'] ?> </td>
                <td><?= $value['ten'] ?> </td>
                <td><?= $value['email'] ?> </td>
                <!-- <td><?php
                    // echo (điều kiện) ? code chạy khi đúng : code chạy khi sai
                    ?> </td> -->
                <td><?= ($value['gioi_tinh'] == 1) ? 'Nam' : 'Nữ'  ?> </td>
                <!-- <td><?php
                    // if ($value['gioi_tinh'] == 1) {
                    //     echo 'Nam';
                    // } else {
                    //     echo 'Nu';
                    // }
                ?> </td> -->
                <td><?php echo $value['ngay_sinh'] ?></td>
                <td>
                    <!-- Phương thức GET -->
                    <a href="sua_gv.php?id=<?php echo $value['id'] ?>">
                        Sửa
                    </a>
                    <a href="xoa_gv.php?id=<?php echo $value['id'] ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
