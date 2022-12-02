<?php
include 'connect.php';
// Nhận giá trị id của bản ghi muốn xoá bằng $_GET
// do được gửi sang bằng thẻ <a>
$id_bi_xoa = isset($_GET['id']) ? $_GET['id'] : 0;

$sql_xoa = "DELETE FROM pets WHERE id=$id_bi_xoa";

$statement = $connect->prepare($sql_xoa);

// var_dump($sql_xoa, $statement->execute());
// die; // Khi chạy đến dòng này sẽ dừng
$message = '';
if ($statement->execute()) {
    $message = "Xoá thành công";
} else {
    $message = "Xoá lỗi!";
}

header("location: danh_sach.php?thong_bao=$message");

