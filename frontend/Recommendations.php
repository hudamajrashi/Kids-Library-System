<?php
include('db_connect.php');

$stories_sql = "SELECT id, title, image FROM stories ORDER BY RAND() LIMIT 5"; 
$stories_result = $conn->query($stories_sql);

$activities_sql = "SELECT id, activity_name, activity_image FROM activities ORDER BY RAND() LIMIT 5"; // 5 أنشطة عشوائية
$activities_result = $conn->query($activities_sql);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التوصيات</title>
    <link rel="icon" href="favicon.png" type="image/png">
    
    <link rel="stylesheet" href="styles.css"> 
    <style>
    
   /* السلايدر الأساسي */
.slider { 
    width: 50%; /* تقليص عرض السلايدر إلى 80% من العرض الكامل */
    overflow: hidden; 
    position: relative; 
    margin: auto; /* محاذاة السلايدر في منتصف الصفحة */
}

.slider-content { 
    display: flex; 
    transition: transform 1s ease; 
}

.slider-item { 
    width: 100%; 
    flex-shrink: 0; 
}

/* التنسيق للصور */
.slider img { 
    width: 60%; /* تقليص عرض الصورة إلى 80% من عرض السلايدر */
    height: auto; 
    margin: 0 auto; /* محاذاة الصورة في منتصف السلايدر */
    display: block; /* تأكد من أن الصورة تكون عنصرًا كتلة */
}

/* تخصيص النصوص */
.recommendations { 
    text-align: center; 
    margin: 20px 0; 
}

.recommendations h2 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #ff6b6b; 
     font-family: 'Amiri', serif;;
 font-weight: 600;
  font-style: normal;
}

.recommendations h3 {
    font-size: 18px;
    margin: 10px 0;
      color: #5a9fd2;
       font-family: 'Amiri', serif;;
 font-weight: 600;
  font-style: normal;
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
    <!-- توصيات القصص -->
    <div class="recommendations">
        <h2>توصيات القصص</h2>
        <div class="slider" id="story-slider">
            <div class="slider-content">
                <?php while($story = $stories_result->fetch_assoc()): ?>
                    <div class="slider-item">
                        <h3><?php echo $story['title']; ?></h3>
                        <img src="<?php echo $story['image']; ?>" alt="Story Image">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <!-- توصيات الأنشطة -->
    <div class="recommendations">
        <h2>توصيات الأنشطة</h2>
        <div class="slider" id="activity-slider">
            <div class="slider-content">
                <?php while($activity = $activities_result->fetch_assoc()): ?>
                    <div class="slider-item">
                        <h3><?php echo $activity['activity_name']; ?></h3>
                        <img src="<?php echo $activity['activity_image']; ?>" alt="Activity Image">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <script>
        function moveSlider(sliderId) {
            const slider = document.getElementById(sliderId);
            const sliderContent = slider.querySelector('.slider-content');
            let index = 0;

            setInterval(() => {
                index++;
                if (index >= sliderContent.children.length) {
                    index = 0;
                }
                sliderContent.style.transform = 'translateX(' + (-index * 100) + '%)';
            }, 3000);
        }

        moveSlider('story-slider');
        moveSlider('activity-slider');
    </script>
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
