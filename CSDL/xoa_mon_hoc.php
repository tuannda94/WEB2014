<?php
require_once('db.php');
// Nếu không tồn tại id hoặc giá trị id rỗng
if (!isset($_GET['id']) || $_GET['id'] == '') {
    header('location: index.php');
}
$id = $_GET['id'];
$sql = "DELETE FROM subjects WHERE id=$id";
// $sql2 = 'DELETE FROM subjects WHERE id=' . $id;
$statement = $connect->prepare($sql);
$statement->execute();
header('location: index.php');
