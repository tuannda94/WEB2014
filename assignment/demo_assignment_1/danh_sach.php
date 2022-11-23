<?php
    $users = [
        [
            'id' => 1,
            'name' => 'Nguyen Van A'
        ],
        [
            'id' => 2,
            'name' => 'Nguyen Van B'
        ],
    ];
?>
<div>
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
                <th>Hành động</th>
            </tr></thead>
            <tbody>
                <?php for ($i = 0; $i < count($users); $i++) {
                    $id = $users[$i]['id'];
                    $name = $users[$i]['name'];
                    $url_chinh_sua = "chinh_sua.php?id=$id&name=$name";
                    $url_xoa = "xoa.php?id=$id";
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td>
                            <a href="<?= $url_chinh_sua ?>">Sửa</a>
                            <a href="<?= $url_xoa ?>">Xoá</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
