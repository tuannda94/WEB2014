<?php
require_once('db.php');
// LEFT JOIN lấy theo bảng sau FROM
// RIGHT JOIN lấy theo bảng sau JOIN
// INNER JOIN lấy phần chung của 2 bảng
$sql = "SELECT dien_thoai.id,dien_thoai.ten,dien_thoai.gia,danh_muc.ten as ten_danh_muc "
    . "FROM dien_thoai "
    . "LEFT JOIN danh_muc ON dien_thoai.danh_muc_id = danh_muc.id";

$ds_dien_thoai = kq_truy_van($sql, IS_FETCH_ALL);

// function select($col = [], $table) {
//     $query = "SELECT ";
//     for ($i = 0; $i < count($col); $i++) {
//         $query .= $col[$i];
//         if ($i < (count($col) - 1)) {
//             $query .= ',';
//         }
//     }
//     $query .= " FROM $table";
//     return $query;
// }
echo '<pre>';
// var_dump(select(['dien_thoai.ten', 'dien_thoai.gia'], 'dien_thoai'));
// var_dump($sql);
var_dump($ds_dien_thoai);
?>
<table>
    <thead>
        <tr>
            <th>Tên ĐT</th>
            <th>Giá ĐT</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ds_dien_thoai as $key => $value): ?>
            <tr>
                <td><?= $value['ten'] ?></td>
                <td><?= $value['gia'] ?></td>
                <td><?= $value['ten_danh_muc'] ?></td>
                <td>
                    <a href="xoa_dt.php?id=<?= $value['id']?>">
                        <button onclick="return confirm('Bạn có muốn xoá không?')">Xoá</button>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
