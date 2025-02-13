<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
 
</head>
<body>

<header>
    ورود به حساب کاربری
</header>

<div class="login-container">
    <h2>لطفاً وارد شوید</h2>
    <form action="" method="post">
        <input type="text" class="input-field" name="username" placeholder="نام کاربری" required>
        <input type="password" class="input-field" name="password" placeholder="رمز عبور" required>
        <button type="submit" class="login-button">ورود</button>
    </form>
    <!-- اگر خطایی وجود دارد، اینجا نمایش داده می‌شود -->
    <div class="error-message">
        <!-- پیام خطا -->
    </div>
</div>

</body>
</html>
