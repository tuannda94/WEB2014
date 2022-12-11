<?php
include 'connect.php';

$ma_user_nhan_qua_duong_dan_the_a = isset($_GET['id']) ? $_GET['id'] : 0;

if ($ma_user_nhan_qua_duong_dan_the_a != 0) {
    $sql = "DELETE FROM users WHERE id=$ma_user_nhan_qua_duong_dan_the_a";
    $statement = $connect->prepare($sql);
    $statement->execute();

    header('location: index.php');
}
