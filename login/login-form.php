<?php
// Khởi động session
session_start();
// Sử dụng biến $_SESSION để kiểm tra
var_dump($_SESSION);

// Nếu trên URL có biến errors được truyền vào theo method GET
$errors = isset($_GET['errors']) ? $_GET['errors'] : '';
?>
<!-- Thì hiển thị lỗi ra -->
<div style="color: red;">
    <?php echo $errors ?>
</div>
<?php if(isset($_SESSION['user'])) { ?>
    <h1>Chào <?= $_SESSION['user']['email'] ?>!</h1>
    <a href="logout.php">Đăng xuất</a>
<?php } else { ?>
    <form
        action="post-login.php"
        method="POST"
    >
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="mat_khau" placeholder="Password">
        <button>Đăng nhập</button>
    </form>
<?php } ?>
