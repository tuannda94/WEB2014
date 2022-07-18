<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <h1>Form thêm mới phòng ban</h1>
        <form
            action="tao_phong_ban.php"
            method="POST"
        >
            <div class='form-group'>
                <label for="">Tên phòng ban</label>
                <input type="text" name='name' class='form-control'>
            </div>
            <div class='form-group'>
                <label for="">Mô tả phòng ban</label>
                <input type="text" name='description' class='form-control'>
            </div>
            <div>
                <button class='btn btn-primary' type='submit'>Tạo mới</button>
                <button class='btn btn-warning' type='reset'>Nhập lại</button>
            </div>

        </form>
    </div>
</body>
</html>
