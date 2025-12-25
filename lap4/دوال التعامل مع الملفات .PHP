<?php
$file_name = "example.txt";

// 1. فتح الملف للكتابة (w تعني write)
$file = fopen($file_name, "w") or die("غير قادر على فتح الملف!");
$txt = "أهلاً بك في دورة PHP\n";
fwrite($file, $txt);
fclose($file);

// 2. قراءة الملف (r تعني read)
$file = fopen($file_name, "r");
echo fread($file, filesize($file_name));
fclose($file);
