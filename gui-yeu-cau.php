<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form gửi yêu cầu</title>
</head>
<body>
    <div class='container'>
        <!-- Gửi yêu cầu đi đâu? Gửi bằng phương thức nào? -->
        <!-- trong thẻ form có thuộc tính action: nơi nhận yêu cầu, method: phương thức -->
        <!-- GET: tất cả thông tin người dùng gửi lên sẽ được thể hiện ở URL -->
        <!-- đường dẫn?name1=giá_trị_input_1&name2=giá_trị_input_2 -->
        <form action="tiep-nhan-yeu-cau.php" method='GET'>
            <p>Gửi yêu cầu bằng phương thức get sang file tiep-nhan-yeu-cau.php</p>
            <div class='form-group'>
                <label for="">Tên</label>
                <input type="text" name='name' class='form-control'>
            </div>
            <div class='form-group'>
                <label for="">Email</label>
                <input type="email" name='email' class='form-control'>
            </div>
            <div>
                <button class='btn btn-success'>Gửi yêu cầu</button>
            </div>
        </form>
    </div>
    <!-- Sau khi bấm submit, chuyển sang:
    http://localhost/PHP1_WE17315/tiep-nhan-yeu-cau.php?name=tuannda3&email=tuan%40gmail.com
    -->

</body>
</html>
