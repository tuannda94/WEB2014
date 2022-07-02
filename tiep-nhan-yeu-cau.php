<?php
// File tiếp nhận yêu cầu sau khi người dùng submit form
// ở file gui-yeu-cau.php

//1. Xem phương thức người dùng gửi là gì
// 2. Nếu là GET sẽ dùng biến toàn cục $_GET để lấy dữ liệu
// $data = $_GET;
var_dump($_GET);

?>
<h1>Thông tin người dùng gửi lên:</h1>
<p>Tên: <?php echo $_GET['name'] ?></p>
<p>Email: <?php echo $_GET['email'] ?></p>

<p>Tên: <?= $_GET['name'] ?></p>
<p>Email: <?= $_GET['email'] ?></p>

