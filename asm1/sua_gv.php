<?php
require_once('db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM giao_vien WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();
$mot_giao_vien = $statement->fetch();
var_dump($mot_giao_vien);
?>

<form action="tiepnhansuagv.php" method="POST">
    <div>
        <label for="Giới tính">
            <input type="text" name="ten" value="<?php echo $mot_giao_vien['ten'] ?>">
            <input
                type="radio"
                value="1"
                name="gioi_tinh"
                <?php echo $mot_giao_vien['gioi_tinh'] == 1 ? 'checked' : '' ?>
            > Nam
            <input
                type="radio"
                value="0"
                name="gioi_tinh"
                <?php
                    if($mot_giao_vien['gioi_tinh'] == 0) {
                        echo 'checked';
                    }
                ?>
            > Nữ
        </label>
    </div>
</form>
