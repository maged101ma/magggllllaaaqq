<?php
error_reporting(0);

header('Content-Type: application/json');
$link = $_GET["link"];
$key = $_GET["key"];
$service = $_GET["service"];
$action = $_GET["action"];
$quantity = $_GET["quantity"];
$api_key = file_get_contents("step/api.txt");
define("API_KEY","7876665636:AAE3NGm78SpM3Yprb6vKVgDTTvZpKx0VIyU ");

require ("sql.php");

function api($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$cid = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM api WHERE api = '$key'"))['user_id'];
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = '$cid'"))['pul'];


if($action == "status"){
if($key != null){
$service_status = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$key_key&action=status&order=$service"),1);
if($service_status['error'] != "Incorrect order ID"){
echo json_encode([
"xolat"=>file_get_contents("https://setapi.tk/api/v1/index.php?text=".$service_status["status"]."&qaysi_tilga=uz&qaysi_tildan=en"),
"miqdor"=>$service_status['remains'],
]);
}else{
echo bm([
"xato"=>"$service - raqamli buyurtma topilmadi!",
]);
}
}else{
echo json_encode([
"xato"=>"Token topilmadi!",
]);
}
}

if($action == "balance"){
if($key != null){
echo json_encode([
"balance"=>$pul,
"currency"=>"so'm"
]);
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}


//Telegram obunachilar

if($action == "add" and $service == "100"){
if($key != null){
if($quantity >= 100 and $quantity <= 50000){
$max = $pul / 4.5;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=153&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Arzon obunachi",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Arzon obunachi
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 4.5;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 50000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "101"){
if($key != null){
if($quantity >= 100 and $quantity <= 5000){
$max = $pul / 8;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=194&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Tezkor obunachi",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Tezkor obunachi
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 8;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 5000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "102"){
if($key != null){
if($quantity >= 100 and $quantity <= 10000){
$max = $pul / 13.5;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=201&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Rus obunachi",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Rus obunachi
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 13.5;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 10000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "103"){
if($key != null){
if($quantity >= 100 and $quantity <= 10000){
$max = $pul / 18;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=202&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Xitoy obunachi (Tez)",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Xitoy obunachi (Tez)
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 18;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 10000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "104"){
if($key != null){
if($quantity >= 100 and $quantity <= 10000){
$max = $pul / 18;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=203&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Arab obunachi (Tez)",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Arab obunachi (Tez)
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 18;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 50000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}


//Telegram Ko'rishlar

if($action == "add" and $service == "105"){
if($key != null){
if($quantity >= 50 and $quantity <= 100000){
$max = $pul / 0.2;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=123&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Arzon ko'rish",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Arzon ko'rish
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 0.2;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 50 ta 
max: 100000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "106"){
if($key != null){
if($quantity >= 100 and $quantity <= 100000){
$max = $pul / 2;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=128&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"Avto ko'rish",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> Avto ko'rish
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 2;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 100000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
}

if($action == "add" and $service == "107"){
if($key != null){
if($quantity >= 100 and $quantity <= 20000){
$max = $pul / 4;
$maxmember = floor($max);
if($maxmember >= $quantity){
$add_service = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=add&service=133&link=$link&quantity=$quantity"),1);
echo json_encode([
"buyurtma"=>$add_service["order"],
"xizmat"=>"O'zbek ko'rish",
]);
api('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🆕 Yangi buyurtma:

📦 Buyurtma turi:</b> O'zbek ko'rish
🧮    <b>Buyurtma miqdori:</b> $quantity ta
🔗 <b>Havola:</b> $link

🆔 <b>Buyurtma ID si:</b>".$add_service['order']."",
'parse_mode'=>"html",
]);
$plus = $quantity * 4;
$a = $pul - $plus;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $cid");
}else{
echo json_encode([
"xato"=>"API hisobida mablag' mavjud emas!",
]);
}
}else{
echo json_encode([
"xato"=>"Xato 
min: 100 ta 
max: 20000 ta",
]);
}
}else{
echo json_encode([
"xato"=>"Token aniqlanmadi!",
]);
}
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