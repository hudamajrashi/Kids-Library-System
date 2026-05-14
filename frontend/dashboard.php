<?php

include('db_connect.php');





// 1. إضافة نشاط
if (isset($_POST['add_activity'])) {
    $activity_name = $_POST['activity_name'];
    $activity_image = $_POST['activity_image']; 
    $insertActivity = "INSERT INTO activities (activity_name, activity_image) VALUES ('$activity_name', '$activity_image')";
    $conn->query($insertActivity);
    header("Location: dashboard.php");
}

// 2. إضافة قصة
if (isset($_POST['add_story'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $age_group = $_POST['age_group'];
    $category = $_POST['category'];
    $insertStory = "INSERT INTO stories (title, description, image, age_group, category) VALUES ('$title', '$description', '$image', '$age_group', '$category')";
    $conn->query($insertStory);
    header("Location: dashboard.php");
}

// 3. تحديث نشاط
if (isset($_POST['update_activity'])) {
    $activity_id = $_POST['activity_id'];
    $activity_name = $_POST['activity_name'];
    $activity_image = $_POST['activity_image'];
    $updateActivity = "UPDATE activities SET activity_name = '$activity_name', activity_image = '$activity_image' WHERE id = $activity_id";
    $conn->query($updateActivity);
    header("Location: dashboard.php");
}

// 4. تحديث قصة
if (isset($_POST['update_story'])) {
    $story_id = $_POST['story_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $age_group = $_POST['age_group'];
    $category = $_POST['category'];
    $updateStory = "UPDATE stories SET title = '$title', description = '$description', image = '$image', age_group = '$age_group', category = '$category' WHERE id = $story_id";
    $conn->query($updateStory);
    header("Location: dashboard.php");
}


$activitiesQuery = "SELECT * FROM activities";
$activitiesResult = $conn->query($activitiesQuery);

$storiesQuery = "SELECT * FROM stories";
$storiesResult = $conn->query($storiesQuery);

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="لوحة التحكم لإدارة القصص والأنشطة">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="الشعار"> 
        </div>
        <nav>
            <ul>
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="Story.php">القصص</a></li>
                <li><a href="activities.php">الأنشطة</a></li>
                  <li><a href="Recommendations.php">التوصيات</a></li>
                    <li><a href="certificate.php">شهادات التحفيز</a></li>
            </ul>
        </nav>
    </header>
    <div class="dashboard-container">
        <h1>لوحة التحكم - إدارة القصص والأنشطة</h1>

  
        <h2>إضافة نشاط جديد</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="activity_name">اسم النشاط</label>
            <input type="text" name="activity_name" required>

            <label for="activity_image">صورة النشاط</label>
            <input type="file" name="activity_image" required>

            <button type="submit" name="add_activity">إضافة النشاط</button>
        </form>

      
        <h2>إضافة قصة جديدة</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="title">العنوان</label>
            <input type="text" name="title" required>

            <label for="description">الوصف</label>
            <textarea name="description" required></textarea>

            <label for="image">صورة القصة</label>
            <input type="file" name="image" required>

            <label for="age_group">الفئة العمرية</label>
            <select name="age_group" required>
                <option value="+5">+5</option>
                <option value="+7">+7</option>
                <option value="+3">+3</option>
            </select>

            <label for="category">الفئة</label>
            <select name="category" required>
                <option value="اسلامية">اسلامية</option>
                <option value="علمية">علمية</option>
                <option value="عامة">عامة</option>
            </select>

            <button type="submit" name="add_story">إضافة القصة</button>
        </form>

        
        <h2>تحديث النشاط</h2>
        <form method="POST">
            <label for="activity_id">اختار النشاط لتحديثه</label>
            <select name="activity_id" required>
                <?php while ($row = $activitiesResult->fetch_assoc()) : ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['activity_name']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="activity_name">اسم النشاط</label>
            <input type="text" name="activity_name" required>

            <label for="activity_image">صورة النشاط</label>
            <input type="file" name="activity_image" required>

            <button type="submit" name="update_activity">تحديث النشاط</button>
        </form>

   
        <h2>تحديث القصة</h2>
        <form method="POST">
            <label for="story_id">اختار القصة لتحديثها</label>
            <select name="story_id" required>
                <?php while ($row = $storiesResult->fetch_assoc()) : ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="title">العنوان</label>
            <input type="text" name="title" required>

            <label for="description">الوصف</label>
            <textarea name="description" required></textarea>

            <label for="image">صورة القصة</label>
            <input type="file" name="image" required>

            <label for="age_group">الفئة العمرية</label>
            <select name="age_group" required>
                <option value="+5">+5</option>
                <option value="+7">+7</option>
                <option value="+3">+3</option>
            </select>

            <label for="category">الفئة</label>
            <select name="category" required>
                <option value="اسلامية">اسلامية</option>
                <option value="علمية">علمية</option>
                <option value="عامة">عامة</option>
            </select>

            <button type="submit" name="update_story">تحديث القصة</button>
        </form>

                </div>


</body>
</html>

<?php
$conn->close(); 
?>
