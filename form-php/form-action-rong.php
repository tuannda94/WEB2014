<h1>Form khảo sát nyc</h1>
<!-- tên, tuổi, địa chỉ, có bao nhiêu nyc -->
<!-- Khi action để trống sẽ gọi lại chính file này -->
<form action="" method="get">
    <input
        placeholder="Họ tên"
        name="ho_ten"
    >
    <input
        type="number"
        placeholder="Tuổi"
        name="tuoi"
    >
    <input
        placeholder="Địa chỉ"
        name="dia_chi"
    >
    <input type="number"
        placeholder="Số người yêu cũ"
        name="so_nyc"
    >
    <button type="submit">Gửi khảo sát</button>
</form>

<?php
// dữ liệu gửi bằng method get sẽ đẩy vào biến $_GET
var_dump($_GET);
function checkData($data, $default = 'Chưa nhập') {
    if (!isset($data) || $data === '') {
        return $default;
    }

    return $data;
}
?>
<!-- Nhận kq khảo sát và hiển thị -->
<!-- Nếu $_GET có phần tử, hay không phải lần đầu vào -->
<?php if (count($_GET) != 0) { ?>
<p>Họ tên: <?php echo
    isset($_GET['ho_ten'])
        ? $_GET['ho_ten']
        : 'Chưa nhập'
?></p>
<p>Tuổi: <?= checkData($_GET['tuoi']) ?></p>

<?php } ?>
