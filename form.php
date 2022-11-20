<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <header>HEADER</header>
    <main>
        <!-- name trong input là để làm key lấy dữ liệu nhập -->
        <!-- action ở form là nơi tiếp nhận dữ liệu -->
        <!-- khi action để trống thì chính là file hiện tại -->
        <form action="tnyc_form.php" method="get">
            <input
                type="text"
                placeholder="username"
                name="name"
            >
            <input
                type="password"
                placeholder="password"
                name="pwd"
            >
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>FOOTER</footer>
</body>
</html>
