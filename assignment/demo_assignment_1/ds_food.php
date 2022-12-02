<?php
// Thêm file connect.php vào để có biến $connect
include 'connect.php';
// Truy vấn
$sql = "SELECT * FROM foods";
// Nạp
$statement = $connect->prepare($sql);
// Thực thi
$statement->execute();
// Lấy dữ liệu
$foods = $statement->fetchAll();
?>
<table>
    <tr><th>
        <td>tên</td>
        <td>cân nặng</td>
    </th></tr>
    <?php foreach ($foods as $key => $value) { ?>
        <tr>
            <td><?= $value['name'] ?></td>
            <td><?= $value['weight'] ?> kg</td>
            <td>
                <a href="cs_food.php?id=<?= $value['id']?>">Sửa</a>
            </td>
        </tr>
    <?php } ?>
</table>
