<?php
// Có dữ liệu giáo viên lấy từ CSDL ra thì mới hiển thị được
require_once('db.php');

$sql = 'SELECT * FROM giao_vien';
$statement = $connect->prepare($sql);
$statement->execute();
$giao_vien = $statement->fetchAll(); // mảng kq trả về từ csdl sau khi thực thi

?>
<table>
    <thead>
        <tr>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Email</th>
            <th>SDT</th>
            <th>Giới tính</th>
            <th>Trạng thái</th>
            <th>Hanh dong</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($giao_vien as $key => $value): ?>
            <tr>
                <td><?php echo $value['ten'] ?></td>
                <td><?= $value['ngay_sinh'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['sdt'] ?></td>
                <td><?= $value['gioi_tinh'] == 1 ? 'Nam' : 'Nữ' ?></td>
                <td><?php
                    if ($value['trang_thai'] == 1) {
                        echo 'hien thi';
                    } else {
                        echo 'khong hien thi';
                    }
                ?></td>
                <td>
                    <a href="sua_gv.php?id=<?= $value['id'] ?>">Sửa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
