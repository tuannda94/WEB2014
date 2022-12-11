<?php
    $ten = isset($_POST["ten"]) ? $_POST["ten"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $mat_khau = isset($_POST["mat_khau"]) ? $_POST["mat_khau"] : '';
    $anh_dai_dien = $_FILES["anh_dai_dien"];

    if ($ten == '') {
        $message = 'Vui lòng nhập tên';
        header("location: tao_moi_user.php?tin_nhan=$message");
    }

    echo '<pre>';
    // Nhận thông tin và lưu trữ
    var_dump($anh_dai_dien);
    // Mục tiêu là tạo file mới từ file đã tải lên và lưu vào bộ nhớ, sau đó lấy đường dẫn đến file mới đó lưu vào CSDL
    $save_file_url = '';
    // Kiểm tra nếu có file thì tạo và lưu
    if ($anh_dai_dien['size'] > 0) {
        // Tạo tên thư mục lưu file trùng với thư mục đã tạo vừa xong, CHÚ Ý phân quyền để có thể lưu được ảnh vào
        $duong_dan_thu_muc_luu_file = 'anh_dai_dien/';
        $ten_file_moi = uniqid() . $anh_dai_dien['name'];
        // Lưu file vào trong thư mục và cầm đường dẫn "anh_dai_dien/6394aacfa5170Seminar trello background.jpg" để lưu vào DB
        $file_se_luu = $anh_dai_dien['tmp_name'];
        $duong_dan_luu_file = $duong_dan_thu_muc_luu_file . $ten_file_moi;
        // Nếu file được lưu thành công
        if(move_uploaded_file($file_se_luu, $duong_dan_luu_file)) {
            $save_file_url = $duong_dan_luu_file;
        }
    }

    // Mã hoá mật khẩu
    $mat_khau_da_duoc_ma_hoa = password_hash($mat_khau, PASSWORD_BCRYPT);

    // Lưu toàn bộ thông tin $ten, $email, $mat_khau_da_duoc_ma_hoa, $save_file_url vào DB
    include 'connect.php';
    $sql = "INSERT INTO users (name, email, password, avatar) VALUES ('$ten', '$email', '$mat_khau_da_duoc_ma_hoa', '$save_file_url')";
    $statement = $connect->prepare($sql);
    $statement->execute();

    header('location: index.php');

