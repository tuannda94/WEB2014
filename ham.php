<?php
// Hàm
// Khối lệnh thực thi 1 nghiệp vụ nào đó
// Có thể tái sử dụng, chỉ thực thi khi được gọi

// echo '<pre>';

// Cú pháp khởi tạo
function ten_ham() {
    // Nội dung hàm
    echo "Nội dung hàm ten_ham";
}
// Cú pháp gọi hàm
ten_ham(); // Nhớ phải có ()

// Ví dụ 1: hiển thị kq tổng 2 số cụ thể
function tong_hai_so() {
    $a = 2;
    $b = 3;
    echo $a + $b;
};
tong_hai_so();
tong_hai_so(); // tái sử dụng
// ------
function tong_hai_so_bat_ky($a, $b) {
    echo $a + $b;
};

tong_hai_so_bat_ky(2, 3);
tong_hai_so_bat_ky(5, 1000);
// ------
// Kết quả việc tính tổng này dùng ở nhiều chỗ
// thay vì chỉ echo ra màn hình html
function tong_hai_so_bat_ky_co_tra_ve($a, $b) {
    // return sẽ trả về giá trị khi gọi hàm
    return ($a + $b);
    echo $a + $b;
}
// Hiển thị kq này ra màn hình
$kq = tong_hai_so_bat_ky_co_tra_ve(10, 20);
echo $kq; // hàm phải có return mới có thể gán lại giá trị
tong_hai_so_bat_ky_co_tra_ve($kq, $kq + 10);


// HÀM PHẢI CÓ THAM SỐ, VÀ CÓ KẾT QUẢ TRẢ VỀ
function kiem_tra_so_chan($gia_tri) {
    // $gia_tri có phải số không
    // $gia_tri là số thì sao
    if (is_numeric($gia_tri)) {
        // đây là số thì kiểm tra tiếp
        if ($gia_tri % 2 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        // đây k phải là số
        return false;
    }
};

echo '<br>';

var_dump(kiem_tra_so_chan(124));

// Tiêu chí viết hàm
// 1. Hạn chế sử dụng else
// 2. Nếu return sẽ không chạy xuống dưới nữa
// 3. Đưa điều kiện false lên trước
function kt_chan($gia_tri) {
    // Nếu k phải số thoát hàm
    if (!is_numeric($gia_tri)) {
        return false;
    }

    // !!! Nếu đã chạy xuống dòng này -> chắc chắn là số
    if ($gia_tri %2 != 0 || !$gia_tri) {
        return false;
    }

    return true;
}

function ktra_chan_ver_3 ($gia_tri) {
    if (is_numeric($gia_tri) && $gia_tri && $gia_tri % 2 == 0) {
        return true;
    }

    return false;
}

// Hàm đếm số chẵn trong mảng
function dem_so_chan_trong_mang($mang) {
    $count = 0; // Giá trị mặc định khi bđ đếm = 0

    if (!is_array($mang)) { // Nếu không phải mảng
        return $count; // => không có số chẵn nào, thoát hàm
    }
    // Nếu là mảng thì lặp và kiểm tra sau đó tăng $count
    for ($i = 0; $i < count($mang); $i++) {
        if (ktra_chan_ver_3($mang[$i])) {
            $count++;
        }
    }
    // Trả về kq là $count cuối cùng và thoát
    return $count;
}

