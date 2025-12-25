<?php
// تحديد المنطقة الزمنية (مثلاً القاهرة)
date_default_timezone_set('Africa/Cairo');

echo "تاريخ اليوم: " . date("Y/m/d") . "<br>"; // مخرجات مثل: 2025/12/25
echo "الوقت الحالي: " . date("h:i:s a") . "<br>"; // مخرجات مثل: 05:30:15 pm

// تحويل نص إلى تاريخ
$nextWeek = strtotime("+1 week");
echo "تاريخ الأسبوع القادم: " . date("Y-m-d", $nextWeek);
