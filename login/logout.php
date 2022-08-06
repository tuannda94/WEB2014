<?php
session_start();
// Huỷ thông tin user trong session đi
unset($_SESSION['user']);
// Điều hướng quay trở lại form login
header('location: login-form.php');
