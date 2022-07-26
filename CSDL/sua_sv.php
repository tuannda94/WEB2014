<?php
require_once('db.php');
$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$code = isset($_POST['code']) ? $_POST['code'] : '';
if (!$id) {
    header('location: form_sua_sv.php');
}
$sql = "UPDATE students "
. "SET name='$name', code='$code' "
. "WHERE id=$id";
var_dump($sql);
$statement = $connect->prepare($sql);
$statement->execute();
// header('location: sinh-vien.php');
