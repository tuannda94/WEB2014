<?php
// Tách riêng phần kết nối ra 1 file để gọi khi cần
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=PHP1_WE17309;',
    'root', // username
    '' // password
);
