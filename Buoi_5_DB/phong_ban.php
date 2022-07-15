<?php
    require_once('db.php');

    // $sql = 'select * from phong_ban where name like "%IT%"'; // câu truy vấn
    $sql = 'select * from phong_ban'; // câu truy vấn
    $statement = $connect->prepare($sql); // nạp
    $statement->execute(); // thực thi
    $phong_ban = $statement->fetchAll(); // nhận kq
    var_dump($phong_ban);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bảng phòng ban + Bootstrap</title>
</head>
<body>
    <div class='container'>
        <table class='table table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên phòng ban</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($phong_ban as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['description'] ?></td>
                        <td>
                            <button class='btn btn-danger'>Xoá</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
