<?php
include 'connect.php';

// Lấy ra id được đặt vào thẻ a trong màn ds
$id_food = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT * FROM foods WHERE id=$id_food";
$statement = $connect->prepare($sql);
$statement->execute();
$mon_mon_an = $statement->fetch();

var_dump($mon_mon_an);
