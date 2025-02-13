<?php include 'includes/header.php'; ?>

<h2>ثبت‌نام</h2>
<form action="register.php" method="post">
    <label for="username">نام کاربری:</label>
    <input type="text" id="username" name="username" required>
    <label for="email">ایمیل:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">رمز عبور:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">ثبت‌نام</button>
</form>

<?php include 'includes/footer.php'; ?>
