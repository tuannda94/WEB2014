<?php
/*
# Luyện tập hàm

### Bài 1. Viết hàm tính tích 3 số bất kỳ: Nhận vào 3 tham số và trả về kết quả.
*/
function tich_ba_so ($a, $b, $c) {
    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        // 1 trong ba không phải số
        return 0;
    }

    return $a * $b * $c;
}

function tich_ba_so_ver_2 ($a, $b, $c) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        // cả 3 đồng thời phải là số
        return $a * $b * $c;
    }

    return 0;
}


/*
### Bài 2. Viết hàm tính diện tích tam giác: Nhận 3 tham số là độ dài 3 cạnh và trả về kq.
*/

/*
### Bài 3. Viết hàm kiểm tra chuỗi có độ dài phù hợp: Nhận vào 1 chuỗi bất kỳ, kiểm tra nếu chuỗi có độ dài chia hết cho độ dài tên của bạn là phù hợp.
VD: Chuỗi nhận vào: "TUANnda123456" -> độ dài 13
    Tên của bạn: Tuan -> độ dài 4
    13 không chia hết cho 4 -> Không phù hợp (false)
*/
function kiem_tra_chuoi ($chuoi_bat_ky, $ten) {
    // 1. Kiểm tra cả 2 đều là chuỗi
    if (!is_string($chuoi_bat_ky) || !is_string($ten)) {
        return false;
    }
    // 2. Tính độ dài các chuỗi
    $do_dai_chuoi = strlen($chuoi_bat_ky);
    $do_dai_ten = strlen($ten);
    // 3. Nếu tên có độ dài = 0 thì sẽ k chia đc
    if ($do_dai_ten == 0) {
        return false;
    }
    // 4. Kiểm tra chia hết -> true, không chia hết -> false
    return $do_dai_chuoi % $do_dai_ten == 0 ? true : false;
}

/*
### Bài 4. Viết hàm tìm chữ may mắn: Nhận vào 2 tham số là 1 chuỗi bất kỳ và 1 số là ngày sinh của bạn. Nếu độ dài chuỗi bằng ngày sinh thì trả về chữ đầu tiên trong chuỗi, nếu không trả về chữ cuối cùng.
VD: Chuỗi nhận vào: "ABC123def", ngày sinh 9 -> trả về A
    Chuỗi nhận vào: "xyz", ngày sinh 4 -> trả về z
*/
