-- Create the database named KidsLibrary
CREATE DATABASE KidsLibrary;

-- Use the newly created database
USE KidsLibrary;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('child', 'parent') NOT NULL
);

-- إنشاء جدول الأنشطة في قاعدة البيانات KidsLibrary
CREATE TABLE activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    activity_name VARCHAR(255) NOT NULL,
    activity_image VARCHAR(255) NOT NULL
);

INSERT INTO activities (activity_name, activity_image) 
VALUES ('كتيب | صُومُوا لِرُؤْيَتِهِ', 'Activitie1.png'),
       ('كتيب | وَأَرِنَا مَنَاسِكنَا', 'Activitie2.png'),
       ( 'كتيب | رَمَضَانُ يَجْمَعُنَا', 'Activitie3.png'),
       ( 'استعد للعب على الشاطئ', 'Activitie4.png'),
       ('نشاط: أسناني جميلة | فكر ووصل', 'Activitie5.png'),
       ('نشاط: إنه الخريف!' , 'Activitie6.png');

CREATE TABLE stories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    image VARCHAR(255) NOT NULL,
    age_group ENUM('+5', '+7', '+3') NOT NULL,
    category ENUM('اسلامية', 'علمية', 'عامة') NOT NULL
);

INSERT INTO stories (title, image, age_group, category) 
VALUES 
('الحب في الله', 'S1.jpg', '+5', 'اسلامية'),
('الاقرع والابرص والاعمى', 'S2.jpg', '+5', 'اسلامية'),
('التاجر وقاطع الطريق', 'S3.jpg', '+3', 'عامة'),
('الشجرة الحكيمة', 'S4.jpg', '+3', 'عامة'),
('الصياد الطماع', 'S5.jpg', '+3', 'عامة'),
('ابن حيان', 'S6.jpg', '+7', 'علمية'),
('الخوارزمي', 'S7.jpg', '+7', 'علمية'),
('ابو بكر الرازيه', 'S8.jpg', '+7', 'علمية'),
('علي بن ابي طالب رضي الله عنه', 'S9.jpg', '+5', 'اسلامية'),
('انس بن مالك رضي الله عنه', 'S10.jpg', '+5', 'اسلامية'),
('في حديقة الحيوانات', 'S11.jpg', '+3', 'عامة');
