<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tạo môn học</title>
</head>
<body>
    <div class='container'>
        <form
            action="tao_mon_hoc.php"
            method="POST"
        >
            <div class='form-group'>
                <label for="">Tên môn học</label>
                <input type="text" name='name'
                    class='form-control'
                >
            </div>
            <div class='form-group'>
                <label for="">Mã môn học</label>
                <input type="text" name='code'
                    class='form-control'
                >
            </div>
            <div>
                <button>Tạo mới</button>
                <button type='reset'>Nhập lại</button>
            </div>
        </form>
    </div>
</body>
</html>
