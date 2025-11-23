دوال النصوص والمصفوفات في لغة PHP

أولاً: دوال النصوص (String Functions)

1. strlen()
تحسب طول النص وترجع عدد الحروف
مثال:
echo strlen("Hello");   // تحسب طول النص

2. str_word_count()
تحسب عدد الكلمات داخل النص
echo str_word_count("Hello world");

3. strrev()
تعكس ترتيب الحروف
echo strrev("Hello");

4. strpos()
تبحث عن كلمة داخل نص وتعيد موقعها
echo strpos("Hello world", "world");

5. str_replace()
تستبدل كلمة بكلمة أخرى
echo str_replace("world", "PHP", "Hello world");

6. strtolower()
تحول النص إلى حروف صغيرة
echo strtolower("HELLO");

7. strtoupper()
تحول النص إلى حروف كبيرة
echo strtoupper("hello");

8. trim()
تزيل الفراغات من بداية ونهاية النص
echo trim("   hello   ");

9. substr()
تقطع جزء من النص
echo substr("Hello world", 0, 5);

10. explode()
تقسم النص إلى مصفوفة باستخدام فاصل
print_r(explode(" ", "Hello world"));

11. implode()
تجمع عناصر المصفوفة داخل نص
echo implode("-", ["Hello", "world"]);

---

ثانياً: دوال المصفوفات (Array Functions)

1. count()
تحسب عدد العناصر
echo count([1,2,3]);

2. array_push()
تضيف عنصر جديد في آخر المصفوفة
$arr = [1,2];
array_push($arr, 3);

3. array_pop()
تحذف آخر عنصر
$arr = [1,2,3];
array_pop($arr);

4. array_shift()
تحذف أول عنصر
$arr = [1,2,3];
array_shift($arr);

5. array_unshift()
تضيف عنصر في بداية المصفوفة
$arr = [2,3];
array_unshift($arr, 1);

6. array_merge()
دمج مصفوفتين
array_merge([1,2], [3,4]);

7. in_array()
تتحقق من وجود قيمة داخل المصفوفة
in_array(3, [1,2,3]);

8. array_search()
تبحث عن قيمة وترجع موقعها
array_search("apple", ["banana","apple"]);

9. sort()
ترتيب تصاعدي
$arr = [3,1,2];
sort($arr);

10. rsort()
ترتيب تنازلي
$arr = [1,3,2];
rsort($arr);

11. array_reverse()
تعكس ترتيب العناصر
array_reverse([1,2,3]);