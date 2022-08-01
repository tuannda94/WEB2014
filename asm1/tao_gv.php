<!-- 1. Giao diện tạo gv cho khách: form -->
<!-- 2. Nơi tiếp nhận yêu cầu tạo khi khách gửi: action -->
<!-- 3. Phương thức tiếp nhận yêu cầu: method -->
<form
    action="tiep_nhan_yc_tao_gv.php"
    method="POST"
>
    <input type="text" name='ten' placeholder="Ten gv">
    <input type="email" name='email' placeholder="Email gv">
    <input type="radio" name='gioi_tinh' value="0" checked>Nữ
    <input type="radio" name='gioi_tinh' value="1">Nam
    <input type="date" name="ngay_sinh">
    <button>Tạo mới</button>
</form>
