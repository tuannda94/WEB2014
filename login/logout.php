<!-- Đây là file xoá thông tin user trong $_SESSION -->
<?php
session_start(); // Muốn thao tác với session cần start trước
// Huỷ thông tin user trong session
unset($_SESSION['user']);
// hàm unset sẽ xoá bỏ key user và value của nó trong mảng $_SESSION

// Quay về màn login
header('location: login.php');
