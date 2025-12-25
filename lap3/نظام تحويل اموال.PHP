<?php

$host = "localhost";
$db   = "bank";
$user = "root";
$pass = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // بيانات التحويل
    $fromAccount = 1;
    $toAccount   = 2;
    $amount      = 100;

    // بدء المعاملة
    $pdo->beginTransaction();

    // 1️⃣ التحقق من الرصيد
    $stmt = $pdo->prepare("SELECT balance FROM accounts WHERE id = ?");
    $stmt->execute([$fromAccount]);
    $balance = $stmt->fetchColumn();

    if ($balance < $amount) {
        throw new Exception("الرصيد غير كافٍ");
    }

    // 2️⃣ خصم الرصيد من الحساب الأول
    $stmt = $pdo->prepare(
        "UPDATE accounts SET balance = balance - ? WHERE id = ?"
    );
    $stmt->execute([$amount, $fromAccount]);

    // 3️⃣ إضافة الرصيد للحساب الثاني
    $stmt = $pdo->prepare(
        "UPDATE accounts SET balance = balance + ? WHERE id = ?"
    );
    $stmt->execute([$amount, $toAccount]);

    // 4️⃣ تسجيل العملية
    $stmt = $pdo->prepare(
        "INSERT INTO transactions (from_account, to_account, amount)
         VALUES (?, ?, ?)"
    );
    $stmt->execute([$fromAccount, $toAccount, $amount]);

    // تنفيذ المعاملة
    $pdo->commit();

    echo "تم التحويل بنجاح";
} catch (Exception $e) {
    // إلغاء العملية عند أي خطأ
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    echo "فشل التحويل: " . $e->getMessage();
}
