<?php
// Với phương thức POST thì dữ liệu sẽ được gửi ngầm
// Không hiển thị dữ liệu trên URL
var_dump($_POST);
?>

Thông tin người dùng:
<p>username: <?= $_POST['username'] ?></p>
<p>password: <?= $_POST['password'] ?></p>
