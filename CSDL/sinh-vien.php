<?php
// 1. Đưa nội dung file db.php vào
require_once('db.php');
// sẽ có biến $connect
// 2. Định nghĩa câu truy vấn
$min = 1;
// $sql = 'SELECT id,name,code,email FROM students WHERE id > ' . $min;
// $sql = "SELECT id,name,code,email FROM students";
$sql = "SELECT students.id,students.name,students.code,students.email,subjects.name as subject_name "
    . "FROM students "
    . "LEFT JOIN subjects ON students.subject_id = subjects.id";
// 3. Nạp truy vấn
$statement = $connect->prepare($sql); // $connect trong file db.php
// 4. Thực thi
$statement->execute();
// 5. Lấy dữ liệu
$students = $statement->fetchAll(); // nếu lấy ra 1 bản ghi là fetch();
// echo '<pre>';
// var_dump($students);
// mảng kq gồm các phần tử, mỗi phần tử có các key: id, name, email, subject_name
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DS SINH VIÊN</title>
</head>
<body>
    <div class='container'>
        <a href="form_tao_sv.php">
            <button class='btn btn-primary'>Tạo SV</button>
        </a>
        <table class='table table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Email</th>
                    <th>Tên môn đang học</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['code'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['subject_name'] ?></td>
                        <td>
                            <a href="form_sua_sv.php?id=<?= $value['id'] ?>">
                                <button class='btn btn-warning'>Sửa</button>
                            </a>
                            <a href="xoa_sinh_vien.php?id=<?= $value['id'] ?>">
                                <button class='btn btn-danger'>Xoá</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
</html>
