<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form đăng ký sinh viên</title>
</head>
<body>
    <div class="container">
        <h1>Form đăng ký sinh viên</h1>
        <form action="tiep_nhan_sv.php" method="POST">
            <div class="form-group">
                <label for="">Tên sinh viên</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="">Môn học</label>
                <input type="text" class="form-control" name="subject">
            </div>
            <div class="form-group">
                <label for="">Điểm số</label>
                <input type="number" class="form-control" name="point">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label>
                <input type="radio" name="status" value="1">Qua
                <input type="radio" name="status" value="0">Trượt
            </div>
            <div class="form-group">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
