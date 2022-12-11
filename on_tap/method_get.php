<?php
// GET: việc gửi dữ liệu đến nơi tiếp nhận yêu cầu thông qua đường dẫn trình duyệt
$ten = isset($_GET['ten']) ? $_GET['ten'] : '';
$tuoi = isset($_GET['tuoi']) ? $_GET['tuoi'] : '';

$ten_post = isset($_POST['ten']) ? $_POST['ten'] : '';
$tuoi_post = isset($_POST['tuoi']) ? $_POST['tuoi'] : '';

?>
<a href="method_get.php?ten=NVA&tuoi=20">Gửi dữ liệu bằng method GET thông qua thẻ a về chính file này</a>

<p><?= $ten ?></p>
<p><?= $tuoi ?></p>
<p><?= $ten_post ?></p>
<p><?= $tuoi_post ?></p>


<form action="" method="GET">
    <input type="text" name="ten">
    <input type="text" name="tuoi">
    <button>Gửi dữ liệu qua form với method GET</button>
</form>

<form action="" method="POST">
    <input type="text" name="ten">
    <input type="text" name="tuoi">
    <button>Gửi dữ liệu qua form với method POST</button>
</form>
