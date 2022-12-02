<?php
// Tách ra, các file khác chỉ cần include file này vào là có $connect
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=quan_ly_vat_nuoi',
    'root',
    ''
);
