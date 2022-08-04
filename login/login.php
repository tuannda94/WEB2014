<?php
    session_start(); // Bắt đầu sử dụng session ở màn hình này
    var_dump($_SESSION);

    // Nếu lần đầu tiên hoặc không có lỗi thì sẽ không có key errors trong $_GET
    // /login.php?errors=...
    $errors = isset($_GET['errors']) ? $_GET['errors'] : '';
?>
<!-- Hiển thị kết quả lỗi ở trên url -->
<div style="color: red;">
    <?php echo $errors ?>
</div>
<?php if (isset($_SESSION['user'])){ ?>
    Đã đăng nhập. Chào <?= $_SESSION['user']['email'] ?> !
    <a href="logout.php">Đăng xuất</a>
<?php } else { ?>
<form
    action="post-login.php"
    method="POST"
>
    <input type="email" placeholder="Email" name="email">
    <input type="password" placeholder="Password" name="password">
    <button>Login</button>
</form>
<?php } ?>
