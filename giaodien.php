<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Buổi 1 PHP1</title>

    <style>
        .color-red {
            color: red;
        }
    </style>
</head>
<body>
    <p class='color-red'>WE17309</p>
    <button class='btn btn-primary'>Đây là nút style bằng bootstrap</button>
    <p class='text-primary'>
        <?php
            $username = 'tuannda3';
            echo $username;
        ?>
    </p>
    <p class='text-danger'>
        <?php
            $classroom = 'D210';
            echo $classroom;
        ?>
    </p>
    <p class='text-warning'>
        <?php
            echo '<h1>' . $classroom . ' ' . $username . '</h1>';
        ?>
    </p>


</body>
</html>
