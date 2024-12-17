<?php

define("DB_SERVER", "localhost"); // Tegilmaydi
define("DB_USERNAME", "setapi"); // Mysql baza nomi
define("DB_PASSWORD", "setapi"); // Mysql baza paroli
define("DB_NAME", "setapi"); // Mysql baza nomi

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connect, "utf8mb4");
if($connect){
    echo "Ulandi.";
}

?>
/*
⌯⁞ قنـاه خاصة بالبرمجة والتطويـر ٠
⌯⁞ نقـوم بنـشر البوتات الخدميه المميزة •
⌯⁞ نقـوم بنشر الملفات والتطبيقات المدفوعة •
⌯⁞ تنشر كل ما يخص مجال البرمجة والتطوير •

⌯⁞ قنوات ذات صلة ↯
⌯⁞ تيم مستر اكس مصر ⋙ @AX_GB⌯
⌯⁞ تيم محمد عراق ⋙ @php88⌯
ـ @O_1_W ⌯
*/