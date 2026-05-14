<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شهادات الأطفال</title>
     <link rel="icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
        }
        .certificate-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }
        .certificate-box {
            border: 5px solid #fed856;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 4px 8px fed856(0, 0, 0, 0.1);
            text-align: center;
        }
        .certificate-box img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .certificate-box h3 {
            margin: 10px 0;
            color: #5a9fd2;
        }
        .certificate-box p {
            font-size: 16px;
            color: #666;
        }
        .download-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #68bbff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .download-btn:hover {
            background-color: #5a9fd2;
        }
    </style>
</head>
<body>
     <header>
        <div class="logo">
            <img src="logo.png" alt="الشعار"> 
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

    <h1 style="text-align: center;">شهادات للأطفال</h1>

    <div class="certificate-container">
      
        <div class="certificate-box">
            <img src="boy.png" alt="شهادة للأولاد">
            <h3>شهادة للولد المميز</h3>
            <p>مبروك لك على إنجازاتك الرائعة</p>
            <a href="https://noory-static-public.fra1.digitaloceanspaces.com/wp-content/uploads/2022/11/14083454/%D8%B4%D9%87%D8%A7%D8%AF%D8%A9-%D8%AA%D9%82%D8%AF%D9%8A%D8%B1-%D9%84%D9%84%D8%A3%D9%88%D9%84%D8%A7%D8%AF.png" class="download-btn" target="_blank">تحميل الشهادة</a>
        </div>

       
        <div class="certificate-box">
            <img src="girl.png" alt="شهادة للبنات">
            <h3>شهادة للبنت المميزة</h3>
            <p>أنتِ رائعة وملهمة! استمري في التألق</p>
            <a href="https://noory-static-public.fra1.digitaloceanspaces.com/wp-content/uploads/2022/11/14083811/%D8%B4%D9%87%D8%A7%D8%AF%D8%A9-%D8%AA%D9%82%D8%AF%D9%8A%D8%B1-%D9%84%D9%84%D8%A8%D9%86%D8%A7%D8%AA.png" class="download-btn" target="_blank">تحميل الشهادة</a>
        </div>
    </div>
<footer style="background-color: #e9f9ff;
    padding: 60px 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    direction: rtl;
    position: relative;">
   
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
