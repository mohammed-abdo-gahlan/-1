<?php
$host = "localhost";
$db   = "my_database";
$user = "root";
$pass = "";

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);

    // ضبط وضع الأخطاء لإظهار الاستثناءات
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "تم الاتصال بنجاح باستخدام PDO";
} catch (PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}
