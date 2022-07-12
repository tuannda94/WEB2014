Tiếp nhận yêu cầu login

<p>Tên đăng nhập: <?php echo $_GET['username'] ?></p>
<p>Mật khẩu: <?php echo $_GET['pwd'] ?></p>

<p>Tên đăng nhập: <?= $_GET['username'] ?></p>
<p>Mật khẩu: <?= $_GET['pwd'] ?></p>

<?php
var_dump($_GET, $_POST);
