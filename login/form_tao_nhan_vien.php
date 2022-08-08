<?php
    require_once('db.php');
    $sql = "SELECT * FROM phong_ban";
    $statement = $connect->prepare($sql);
    $statement->execute();

    $ds_phong_ban = $statement->fetchAll();
?>
<!-- Có thông tin phong_ban_id nên phải có select để chọn phòng ban -->
<!-- CHÚ Ý: NẾU CÓ FILE thì thẻ form bắt buộc có thuộc tính enctype="multipart/form-data" -->
<form
    action="tnyc_tao_nhan_vien.php"
    method="POST"
    enctype="multipart/form-data"
>
    <input type="text" placeholder="Tên" name="ten">
    <select name="phong_ban_id">
        <?php foreach($ds_phong_ban as $key => $value): ?>
            <option value="<?= $value['id'] ?>">
                <?= $value['name'] ?>
            </option>
        <?php endforeach ?>
    </select>
    <input type="file" name="anh">
    <button>Tao NV</button>
</form>
