<?php
    // 1. Kết nối PHP với CSDL MySQL
    // 1. Khởi tạo kết nối
    // 'loại_CSDL:host_lưu_trữ;dbname=tên_CSDL', tên đăng nhập, mật khẩu
    $connect = new PDO(
        'mysql:host=127.0.0.1;dbname=quan_ly_vat_nuoi;',
        'root',
        ''
    );
    // 2. Ngay sau khi đã có kết nối gán vào $connect
    // Định nghĩa câu truy vấn
    $sql = "SELECT pets.id,pets.name, types.name AS type_name FROM pets LEFT JOIN types ON pets.type_id = types.id";
    // 3. Nạp câu truy vấn
    $statement = $connect->prepare($sql);
    // 4. Thực thi câu truy vấn
    $statement->execute();
    // 5. Lấy dữ liệu về sau khi thực thi
    // 5.1 Nếu dữ liệu nhận về là 1 danh sách
    $data = $statement->fetchAll();
    // 5.2 Nếu dữ liệu nhận về là 1 bản ghi thì dùng fetch()
    echo '<pre>';
    var_dump($data);
?>
<div>
    <p><?= isset($_GET['thong_bao']) ? $_GET['thong_bao'] : '' ?></p>
    <div>
        <a href="tao_moi.php">
            <button>Tạo mới</button>
        </a>
    </div>
    <div>
        <table>
            <thead><tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Tên loại</th>
                <th>Hành động</th>
            </tr></thead>
            <tbody>
                <?php for ($i = 0; $i < count($data); $i++) {
                    $id = $data[$i]['id'];
                    $name = $data[$i]['name'];
                    $url_chinh_sua = "chinh_sua.php?id=$id";
                    $url_xoa = "xoa.php?id=$id";
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $data[$i]['type_name'] ?></td>
                        <td>
                            <a href="<?= $url_chinh_sua ?>">Sửa</a>
                            <a href="xoa.php?id=<?= $id ?>">Xoá</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
