<?php
// 1. Khởi tạo kết nối
// $connect = new PDO(
//     'mysql:host=127.0.0.1;dbname=PHP1_WE17309;',
//     'root', // username
//     '' // password
// );
// 1.1 Khởi tạo kết nối từ file db.php sau đó nhúng vào đây
require_once('db.php');
// 2. Thực hiện viết truy vấn sql
$sql = 'select * from nhan_vien';
// 3. Nạp câu truy vấn vào kết nối
$statement = $connect->prepare($sql);
// 4. Thực thi câu truy vấn
$statement->execute();
// 5. Nhận kết quả
$nhan_vien = $statement->fetchAll();
var_dump($nhan_vien);

?>

<table border='1'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i = 0; $i < count($nhan_vien); $i++) {
        ?>
            <tr>
                <td><?= $nhan_vien[$i]['id']?></td>
                <td><?= $nhan_vien[$i]['ten']?></td>
            </tr>
        <?php
        }
        ?>
        <!--  -->
        <?php foreach($nhan_vien as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['ten'] ?></td>
            </tr>
        <?php endforeach ?>
        <!-- $nhan_vien[$i] trong for ~ $value trong foreach -->
    </tbody>
</table>
