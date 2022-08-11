<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=PHP1_WE17315',
    'root',
    ''
);

// hằng số
define('IS_FETCH', 1);
define('IS_FETCH_ALL', 2);
define('IS_NOTHING', 3);

// 1. Định nghĩa truy vấn -> KHÁC NHAU
// 2. Prepare
// 3. Execute
// 4. Lấy dữ liệu -> FETCH/FETCH_ALL/KHÔNG LÀM GÌ
function kq_truy_van($sql, $loai_lay_du_lieu) {
    // Biến định nghĩa ngoài hàm không gọi được trực tiếp
    // Biến truyền vào từ tham số, biến định nghĩa trong hàm -> biến cục bộ
    global $connect; // đưa biến $connect vào trong hàm
    $statement = $connect->prepare($sql);
    $statement->execute();
    // Kiểm tra điều kiện theo giá trị trong switch
    // Case là trường hợp sẽ chạy vào
    switch ($loai_lay_du_lieu) {
        case IS_FETCH:
            return $statement->fetch();
            // break; không cần nếu ở trên có return
        case IS_FETCH_ALL:
            return $statement->fetchAll();
            // break;
        case IS_NOTHING:
            return true;
            // break;

        default:
            break;
    }
}
