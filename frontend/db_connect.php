<?php
// معلومات الاتصال بقاعدة البيانات
$servername = "localhost"; // اسم الخادم (عادة ما يكون localhost)
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة المرور (إذا كانت فارغة في حالة الـ localhost)
$dbname = "KidsLibrary"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
