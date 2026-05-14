<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $user_type = $_POST['user_type'];  

   
    $sql = "INSERT INTO users (first_name, last_name, email, password, user_type) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$user_type')";
    
    if ($conn->query($sql) === TRUE) {
        echo "تم التسجيل بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التسجيل</title>
    <script src="script.js"></script> 
     <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png" type="image/png">
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
   <div class="form-container">
    <h2>التسجيل</h2>
    <form method="POST" onsubmit="return validatePassword()">
        <label for="first_name">الاسم الأول:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">الاسم الأخير:</label>
        <input type="text" name="last_name" required><br>

        <label for="email">البريد الإلكتروني:</label>
        <input type="email" name="email" required><br>

        <label for="password">كلمة المرور:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="user_type">تسجيل ك:</label>
        <select name="user_type" required>
            <option value="child">طفل</option>
            <option value="parent">والدين</option>
        </select><br>

        <input type="submit" value="تسجيل">
    </form>
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
