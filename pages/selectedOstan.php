
<!DOCTYPE html>
<?php include '../includes/header.php'; ?>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>انتخاب استان و شهرستان</title>
    <style>
       
    </style>
    <script>
        // داده‌های استان‌ها و شهرستان‌ها
        const citiesData = {
        "تهران": ["تهران", "شهریار", "ورامین"],
        "لرستان": ["ازنا","دورود","الشتر" ,"الیگودرز", "خرم آباد"],
        "اصفهان": ["اصفهان", "کاشان", "خمینی‌شهر"]
    };

    function loadCities() {
        const province = document.getElementById("province").value;
        const citySelect = document.getElementById("city");
        citySelect.innerHTML = "<option value=''>لطفاً شهرستان را انتخاب کنید</option>";
        if (province && citiesData[province]) {
            citiesData[province].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        }
    }

    function validateForm() {
        const province = document.getElementById("province").value;
        const city = document.getElementById("city").value;
        if (!province || !city) {
            alert("لطفاً استان و شهرستان را انتخاب کنید.");
            return false;
        }
        return true;
    }
    </script>
</head>
<body>

<div class="form-containerOStan">
    <h2>انتخاب استان و شهرستان</h2>
    <form action="home.php" method="post" onsubmit="return validateForm()">

        <!-- انتخاب استان -->
        <!-- <label for="province">استان:</label> -->
        <select id="province" name="province" onchange="loadCities()" required>
            <option value="">لطفاً استان را انتخاب کنید</option>
            <option value="تهران">تهران</option>
            <option value="لرستان">لرستان</option>
            <option value="اصفهان">اصفهان</option>
        </select>

        <!-- انتخاب شهرستان -->
        <!-- <label for="city">شهرستان:</label> -->
        <select id="city" name="city" required>
            <option value="">لطفاً ابتدا استان را انتخاب کنید</option>
        </select>

        <!-- دکمه ارسال -->
        
        <button type="submit">ثبت</button>
    </form>
</div>


<?php include '../includes/footer.php'; ?>
</body>
</html>
