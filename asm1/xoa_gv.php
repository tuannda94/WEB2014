<?php
require_once('db.php');
$id = $_GET['id']; //id trong $_GET chính là giá trị truyền từ url sang

$sql = "DELETE FROM giao_vien WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();
// Quay về danh sách
header('location: giao_vien.php');
