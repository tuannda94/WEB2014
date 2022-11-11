<?php
// Thông tin đưa vào form
$thong_tin_sinh_vien = [
    'id' => 'PH12345',
    'name' => 'tuannda3',
    'email' => 'tuannda3@fe.edu.vn',
    'gender' => 1, // 1: Nam, 2: Nữ, 3: Không xác định
    'status' => 1
];

// Đổi thành mảng 2 chiều gồm nhiều thông tin sv
$ds_sinh_vien = [
    [
        'id' => 'PH12345',
        'name' => 'tuannda3',
        'email' => 'tuannda3@fe.edu.vn',
        'gender' => 1, // 1: Nam, 2: Nữ, 3: Không xác định
        'status' => 1
    ],
    [
        'id' => 'PH12346',
        'name' => 'tuannda4',
        'email' => 'tuannda4@fe.edu.vn',
        'gender' => 2, // 1: Nam, 2: Nữ, 3: Không xác định
        'status' => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện bằng Bootstrap</title>
    <!-- Sử dụng thêm thư viện bootstrap bằng thẻ link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary">BTN</button>
        <!-- Tiêu đề MSV + Họ tên -->
        <!-- Form Nhập thông tin sinh viên
            Input mã sinh viên
            Input tên sinh viên
            Input email sinh viên
            Radio chọn giới tính
            1 Checkbox chọn Trạng thái tài khoản
            1 nút submit thông tin
        -->

        <h1>PH12345 - Nguyễn Văn A</h1>
        <form action="">
            <div class="form-group">
                <label for="msv">MSV</label>
                <input id="msv" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="ten_sv">Tên SV</label>
                <input id="ten_sv" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio" name="gender" value="1" <?php echo $thong_tin_sinh_vien['gender'] == 1 ? 'checked' : '' ?> > Nam
                <input type="radio" name="gender" value="2" <?= $thong_tin_sinh_vien['gender'] == 2 ? 'checked' : '' ?> > Nữ
                <input type="radio" name="gender" value="3" <?= $thong_tin_sinh_vien['gender'] == 3 ? 'checked' : '' ?> > KXD
            </div>
            <div><button class="btn btn-success">Submit</button></div>
        </form>



    <!-- Bảng Thông tin sinh viên
        MSV, Tên SV, Email, Giới tính, Trạng thái tk
-->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>msv</th>
                <th>tên</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($ds_sinh_vien); $i++) { ?>
                <tr>
                    <td><?= $ds_sinh_vien[$i]['id'] ?></td>
                    <td><?= $ds_sinh_vien[$i]['name'] ?></td>
                    <td><?= $ds_sinh_vien[$i]['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </div>



</body>
</html>
