<?php
// دریافت داده‌های ارسالی از فرم
$province = isset($_POST['province']) ? $_POST['province'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';

// بررسی اینکه آیا داده‌ها خالی نیستند
if (!empty($province) && !empty($city)) {
    // echo "استان انتخابی: " . htmlspecialchars($province) . "<br>";
    // echo "شهرستان انتخابی: " . htmlspecialchars($city);
} else {
    echo "لطفاً ابتدا استان و شهرستان را انتخاب کنید.";
    exit();
}
?>
<!DOCTYPE html>
<?php include '../includes/header.php'; ?>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>مرکز  پاییش و سلامت </title>
    <style>
       
    </style>
    <script>
    
    </script>
</head>


<div class="form-containerSeletedOstan">
    <!-- <h2>اطلاعات انتخابی</h2> -->

    <div class="info-row">
        <span class="label-title">استان انتخابی:</span>
        <span class="label-value"><?php echo htmlspecialchars($province); ?></span>

        <span class="label-title">شهرستان انتخابی:</span>
        <span class="label-value"><?php echo htmlspecialchars($city); ?></span>
    </div>
</div>

<div class="containerToolse">
    
    <!-- <div class="option-box">
    <img src="../assets/img/svg/persistence.svg" class="fa fa-heart"  alt="پایش" width="130" height="170">
    <span class="option-title">پایش</span>
    </div>
    -->

    <div class="option-box">
        <img src="../assets/img/toolse/persistence.png" alt="پایش" class="option-icon">
        <span class="option-title"> پایش</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/infrastructure.png" alt="زیر ساخت" class="option-icon">
        <span class="option-title">زیر ساخت</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/report.png" alt="گزارش فنی واجرای" class="option-icon">
        <span class="option-title">گزارش فنی واجرای</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/human_resources.png" alt="نیروی انسانی" class="option-icon">
        <span class="option-title">نیروی انسانی</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/health_indicators.png" alt="شاخص های بهداشتی" class="option-icon">
        <span class="option-title">شاخص های بهداشتی</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/procedures.png" alt="دستورالعمل ها" class="option-icon">
        <span class="option-title">دستورالعمل ها</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/training.png" alt="آموزش بسته های خدماتی" class="option-icon">
        <span class="option-title">آموزش بسته های خدماتی</span>
    </div>
    <div class="option-box">
        <img src="../assets/img/toolse/management.png" alt="مدیریت" class="option-icon">
        <span class="option-title">مدیریت</span>
    </div>
</div>






<body>


<?php include '../includes/footer.php'; ?>
</body>
</html>
