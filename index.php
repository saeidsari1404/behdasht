<?php
// شروع سشن

session_start();

// اتصال به دیتابیس
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // گرفتن داده‌ها از فرم و جلوگیری از حملات XSS
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $_SESSION['error_message'] = "لطفاً نام کاربری و رمز عبور را وارد کنید.";
    } else {
        $sql = "SELECT * FROM users WHERE UserName = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // بررسی اینکه آیا کاربر یافت شد
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        
            // بررسی رمز عبور بدون هش
            if ($password === $user['Password']) {
                $_SESSION['username'] = $username;
                header("Location: pages/selectedOstan.php");
                exit();
            } else {
               
                $_SESSION['error_message'] = "نام کاربری یا رمز عبور اشتباه است.";
               
            }
        } else {
            $_SESSION['error_message'] = "نام کاربری یا رمز عبور اشتباه است.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<?php include 'includes/header.php'; ?>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-container">
    <h2>ورود به حساب کاربری</h2>
    <form action="" method="post">
        <input type="text" class="input-field" name="username" placeholder="نام کاربری" required>
        <input type="password" class="input-field" name="password" placeholder="رمز عبور" required>
        <button type="submit" class="login-button">ورود</button>
    </form>

    <!-- نمایش پیام خطا -->
    <?php
if (isset($_SESSION['error_message'])) {
    echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']);
}
?>
</div>

    
   


<?php include 'includes/footer.php'; ?>

</body>
</html>