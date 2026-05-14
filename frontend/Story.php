<?php
// تضمين الاتصال بقاعدة البيانات
include('db_connect.php');


$age_group_filter = isset($_GET['age_group']) ? $_GET['age_group'] : '';
$category_filter = isset($_GET['category']) ? $_GET['category'] : '';


$sql = "SELECT DISTINCT * FROM stories WHERE 1=1"; // استخدام DISTINCT للتأكد من عرض القصص مرة واحدة فقط


if ($age_group_filter) {
    $sql .= " AND age_group = '$age_group_filter'"; // إضافة فلتر الفئة العمرية
}

if ($category_filter) {
    $sql .= " AND category = '$category_filter'"; 
}

$result = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>القصص - مكتبة الأطفال</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
       <style>
      

        .stories-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px; /* الحد الأقصى لعرض الحاوية */
            width: 100%; /* عرض الحاوية 100% */
            margin: 0 auto; /* توسيط الحاوية داخل الصفحة */
        }

        .story-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 2px solid #e0e0e0;
            transition: transform 0.3s ease;
        }

        .story-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .story-title {
            font-size: 20px;
            color: #333;
            margin: 0;
        }

        .story-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .filter-section label {
            font-size: 16px;
            margin-right: 10px;
            margin-left: 10px;
            display: inline-block;
        }

        .filter-section select {
            font-size: 16px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .filter-section input[type="submit"] {
            font-size: 16px;
            padding: 8px 16px;
            background-color: #68bbff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-section input[type="submit"]:hover {
            background-color: #5599cc;
        }

        .filter-section .filter-container {
            display: flex;
            flex-direction: column; /* عمودي */
            align-items: flex-end; /* محاذاة العناصر إلى اليمين */
            margin-bottom: 20px;
        }


    </style>
       
</head>
<body>

   <header>
        <div class="logo">
            <img src="logo.png" alt="الشعار"> <!-- ضع رابط الشعار هنا -->
        </div>
        <nav>
            <ul>
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="story.php">القصص</a></li>
                <li><a href="activities.php">الأنشطة</a></li>
                  <li><a href="Recommendations.php">التوصيات</a></li>
                    <li><a href="certificate.php">شهادات التحفيز</a></li>
            </ul>
        </nav>
    </header>
<div class="filter-section">
    <form method="GET" action="story.php">
        <div class="filter-container">
            <label for="age_group">الفئة العمرية:</label>
            <select name="age_group">
                <option value="">جميع الفئات</option>
                <option value="+5" <?php echo $age_group_filter == '+5' ? 'selected' : ''; ?>>+5</option>
                <option value="+7" <?php echo $age_group_filter == '+7' ? 'selected' : ''; ?>>+7</option>
                <option value="+3" <?php echo $age_group_filter == '+3' ? 'selected' : ''; ?>>+3</option>
            </select>

            <label for="category">التصنيف:</label>
            <select name="category">
                <option value="">جميع التصنيفات</option>
                <option value="اسلامية" <?php echo $category_filter == 'اسلامية' ? 'selected' : ''; ?>>إسلامية</option>
                <option value="علمية" <?php echo $category_filter == 'علمية' ? 'selected' : ''; ?>>علمية</option>
                <option value="عامة" <?php echo $category_filter == 'عامة' ? 'selected' : ''; ?>>عامة</option>
            </select>

            <input type="submit" value="تصفية">
        </div>
    </form>
</div>

<div class="stories-container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='story-item'>";
            echo "<img src='" . $row['image'] . "' alt='" . $row['title'] . "' class='story-image'>";
            echo "<h3 class='story-title'>" . $row['title'] . "</h3>";
            echo "</div>";
        }
    } else {
        echo "<p>لا توجد قصص لعرضها</p>";
    }
    ?>
</div>
<footer style="background-color: #e9f9ff;
    padding: 60px 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    direction: rtl;
    position: relative;">
    <!--  -->
    <div style="text-align: right; margin-bottom: 20px;">
        <img src="logo.png" alt="Logo" style="max-width: 150px;">
    </div>

    <div style="margin-bottom: 20px;">
        <p>تواصل معنا:</p>
        <p>البريد الإلكتروني: <a href="" style="color: #68bbff;">KidsLaibrary@gmail.com</a></p>
        <p>رقم الهاتف: <a href="" style="color: #68bbff;">+966 555555555</a></p>
    </div>

    <div>
        <p>روابط سريعة:</p>
        <ul style="list-style: none; padding: 0; display: flex; justify-content: center;">
            <li><a href="/" style="color: #68bbff; margin: 0 15px;">الرئيسية</a></li>
            <li><a href="" style="color: #68bbff; margin: 0 15px;">عن الموقع</a></li>
            <li><a href="" style="color: #68bbff; margin: 0 15px;">اتصل بنا</a></li>
            <li><a href="" style="color: #68bbff; margin: 0 15px;">سياسة الخصوصية</a></li>
        </ul>
    </div>

</footer>
</body>
</html>
