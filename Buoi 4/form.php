<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form PHP</title>
</head>
<body>
    <div class="container">
        <h1>Form login</h1>
        <!-- action: Nơi tiếp nhận yêu cầu gửi đi -->
        <!-- method: phương thức gửi yêu cầu -->
        <!-- type submit để khi bấm sẽ gửi yêu cầu đi -->
        <!-- CHÚ Ý: phải có thuộc tính name trong input -->
        <!-- GET: dữ liệu người dùng gửi lên sẽ được đẩy vào url
        dưới dạng ?name1=gia_tri1&name2=gia_tri2
            nhận được qua $_GET
    -->
    <!-- POST: dữ liệu người dùng gửi lên ngầm và nhận được qua $_POST -->
        <form action="tiep_nhan_yeu_cau.php" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pwd">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
