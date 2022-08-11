<?php
// Định nghĩa hàm
// function lay_ten_bai() {
//     echo "Bai_1.php"; // hiển thị ra màn hình
//     // return để trả về kq khi gọi hàm
//     return 1;
// }
// // Gọi hàm
// lay_ten_bai(); // Chạy các câu lệnh trong hàm
// // Nhận kq từ hàm
// $kq_ham = lay_ten_bai(); // giá trị return sẽ được gán cho biến

// echo $kq_ham;

// trả về kq là Bai_xxx.php, có thể nhận kq để sử dụng ở chỗ khác
function lay_ten_bai($so_bai) {
    return "Bai_" . $so_bai . ".php";
}
// Hiển thị các đường link có tên bài tương ứng
function lay_duong_link() {
    // 1. Định nghĩa số bài tối đa;
    $so_bai_toi_da = 100;
    // Lặp để chạy hiển thị các đường link theo số bài
    for ($i = 0; $i < $so_bai_toi_da; $i++) {
        $so_bai = $i + 1;
        $ten_bai = lay_ten_bai($so_bai); // Bai_1.php
        echo "<a href='$ten_bai'>Bai $so_bai / $so_bai_toi_da</a>";
        echo '<br>';
    }
}

lay_duong_link();
?>
<!-- <a href="Bai_1.php">Bài 1</a>
<a href="Bai_2.php">Bài 2</a>
<a href="Bai_3.php">Bài 3</a>
<a href="Bai_4.php">Bài 4</a> -->
