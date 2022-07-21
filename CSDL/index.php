<?php
// 1. Tạo kết nối với CSDL
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=PHP1_WE17315',
    'root',
    ''
);
// 2. Định nghĩa câu truy vấn
$sql = 'SELECT * FROM subjects';

// 3. Nạp câu truy vấn vào
$statement = $connect->prepare($sql);

// 4. Thực thi câu truy vấn
$statement->execute();

// 5. Lấy kết quả
$subjects = $statement->fetchAll(); // lấy ra toàn bộ các bản ghi nhận được

// var_dump($subjects);
?>
<a href="form_tao_mon_hoc.php">
    <button>Tạo môn học</button>
</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên môn</th>
            <th>Mã môn</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < count($subjects); $i++) { ?>
            <tr>
                <td><?= $subjects[$i]['id'] ?></td>
                <td><?= $subjects[$i]['name'] ?></td>
                <td><?= $subjects[$i]['code'] ?></td>
                <td>
                    <a href="xoa_mon_hoc.php?id=<?= $subjects[$i]['id'] ?>">
                        <button>Xoá môn học</button>
                    </a>
                </td>
            </tr>
        <?php } ?>

        <?php foreach($subjects as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['code'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
