<?php
require_once('db.php');

$name = isset($_POST['name']) ? $_POST['name'] : '';
$code = isset($_POST['code']) ? $_POST['code'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$birthday = isset($_POST['birthday']) ? $_POST['birthday'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

$sql = "INSERT INTO students "
    . "(name,code,email,birthday,phone,address) "
    . "VALUES ('$name','$code','$email','$birthday','$phone','$address')";

$statement = $connect->prepare($sql);
$statement->execute();
header('location: sinh-vien.php');
