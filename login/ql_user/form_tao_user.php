<!-- UPLOAD FILE -->
<!-- CHÚ Ý: khi form có file, bắt buộc form phải có thuộc tính -->
<!-- enctype="multipart/form-data" -->
<form
    action="tnyc_tao_user.php"
    method='POST'
    enctype="multipart/form-data"
>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Mật khẩu">
    <input type="file" name="avatar">
    <button>Tạo mới</button>
</form>
