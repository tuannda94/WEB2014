<?php
$tn = isset($_GET['tin_nhan']) ? $_GET['tin_nhan'] : '';
?>

<p style="color: red;"><?= $tn ?></p>

<form action="tnyc_tao_moi_user.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="ten" placeholder="Tên">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="mat_khau" placeholder="Mật khẩu">
    <input type="file" name="anh_dai_dien"> Chọn ảnh đại diện
    <button>Tạo</button>
</form>
