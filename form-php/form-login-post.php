<!-- Method POST sẽ gửi dữ liệu ngầm thẳng từ form sang
file trong action mà không qua đường dẫn trình duyệt như GET
-->
<form action="tnyc_form-login-post.php" method="POST">
    <input
        placeholder="Username"
        name="username"
    >
    <input
        type="password"
        placeholder="Password"
        name="pwd"
    >
    <button type="submit">Login</button>
</form>
