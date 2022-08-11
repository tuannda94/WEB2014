<?php
require_once('db.php');
$id = $_GET['id'];

$sql = "DELETE FROM dien_thoai WHERE id=$id";
kq_truy_van($sql, IS_NOTHING);
header('location: Bai_4.php');
