<?php
ob_start();
error_reporting(0);
date_Default_timezone_set('Asia/Tashkent');
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
define("AlijonovUz",'7876665636:AAE3NGm78SpM3Yprb6vKVgDTTvZpKx0VIyU');
$admin = array("7073317127","7073317127");
$bot = bot('getme',['bot'])->result->username;
$soat = date('H:i:s');
$sana = date("d.m.Y");

require ("sql.php");

function deleteFolder($path){
if(is_dir($path) === true){
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file)
deleteFolder(realpath($path) . '/' . $file);
return rmdir($path);
}else if (is_file($path) === true)
return unlink($path);
return false;
}

function bot($method,$datas=[]){
  $url = 'https://api.telegram.org/bot'.AlijonovUz.'/'.$method;
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

$AlijonovUz = json_decode(file_get_contents('php://input'));
$message = $AlijonovUz->message;
$text = $message->text;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$tx = $message->text;
$cid = $message->chat->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;

$query = $AlijonovUz->callback_query;
$data = $query->data;
$qid = $query->id;
$cid2 = $query->message->chat->id;
$mid2 = $query->message->message_id;
$name2 = $query->from->first_name;
$username2 = $query->from->username;

if(file_get_contents("step/holat.txt")){
	}else{
		if(file_put_contents("step/holat.txt",'Yoqilgan'));
}

$res = mysqli_query($connect,"SELECT*FROM user_id WHERE user_id = $chat_id");
while($a = mysqli_fetch_assoc($res)){
$user_id = $a['user_id'];
$reg = $a['reg'];
}

$res = mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $chat_id");
while($a = mysqli_fetch_assoc($res)){
$us_id = $a['user_id'];
$pul = $a['pul'];
$odam = $a['odam'];
$ban = $a['ban'];
}

$res = mysqli_query($connect,"SELECT*FROM api WHERE user_id = $chat_id");
while($a = mysqli_fetch_assoc($res)){
$use_id = $a['user_id'];
$api = $a['api'];
}

$step = file_get_contents("step/$cid.step");
$save = file_get_contents("step/$cid.txt");
$api_key = file_get_contents("step/api.txt");
$holat = file_get_contents("step/holat.txt");
$baza = file_get_contents("https://u4923.xvest5.ru/AlijonovUz/step/baza.txt");
$key = uniqid(uniqid());
mkdir('step');

function replyKeyboard($keyboard) {
    return json_encode([
        'resize_keyboard'=>true,
        'keyboard'=> $keyboard
    ]);
}

$panel = replyKeyboard([
[['text'=>"⚙ الإعدادات الأساسية"]],
[['text'=>"📊 إحصائيات"],['text'=>"✉ ارسل رسالة"]],
[['text'=>"🔎 كشف بى ايدي"]],
[['text'=>"🔒 نسخة من بوت"],['text'=>"◀️ رجوع لى خلف"]]
]);

$asosiy = replyKeyboard([
[['text'=>"🤖 فتح بوت"],['text'=>"ضفapi"]],
[['text'=>"🗄 لوحة تحكم"]]
]);

$menu = replyKeyboard([
[['text'=>"📂 خدمات بوت رشق"]],
[['text'=>"💵 جمع المال"],['text'=>"حسابك"]],
[['text'=>"📨 تواصل معي مبرمج بوت"],['text'=>"⚙ إعدادات"]]
]);

$menus = replyKeyboard([
[['text'=>"📂 خدمات بوت رشق"]],
[['text'=>"💵 جمع المال"],['text'=>"حسابك"]],
[['text'=>"📨 تواصل معي مبرمج بوت"],['text'=>"⚙ إعدادات"]],
[['text'=>"🗄 لوحة تحكم"]]
]);

$back = replyKeyboard([
[['text'=>"◀️ رجوع لى خلف"]],
]);

$bosh = replyKeyboard([
[['text'=>"🗄 لوحة تحكم"]],
]);

if($text){
	if($ban == "ban"){
	exit();
}else{
}
}

if($data){
$ban = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['ban'];
	if($ban == "ban"){
	exit();
}else{
}
}

if($text){
 if($holat == "O'chirilgan"){
	if(in_array($cid,$admin)){
}else{
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"⛔️ <b>Bot vaqtinchalik o'chirilgan!</b>

<i>Botda ta'mirlash ishlari olib borilayotgan bo'lishi mumkin!</i>",
'parse_mode'=>'html',
]);
exit();
}
}else{
}
}

if($data){
 if($holat == "O'chirilgan"){
	if(in_array($cid2,$admin)){
}else{
	bot('answerCallbackQuery',[
		'callback_query_id'=>$qid,
		'text'=>"⛔️ Bot vaqtinchalik o'chirilgan!

Botda ta'mirlash ishlari olib borilayotgan bo'lishi mumkin!",
		'show_alert'=>true,
		]);
exit();
}
}else{
}
}

//@AX_GB

if(isset($message)){
$result = mysqli_query($connect,"SELECT * FROM user_id WHERE user_id = $cid");
$rew = mysqli_fetch_assoc($result);
if($rew){
}else{
mysqli_query($connect,"INSERT INTO user_id(`user_id`,`reg`) VALUES ('$cid','$sana | $soat')");
}
}

if(isset($message)){
$result = mysqli_query($connect,"SELECT * FROM kabinet WHERE user_id = $cid");
$rew = mysqli_fetch_assoc($result);
if($rew){
}else{
mysqli_query($connect,"INSERT INTO kabinet(`user_id`,`pul`,`odam`,`ban`) VALUES ('$cid','0','0','unban')");
}
}

if(isset($message)){
$result = mysqli_query($connect,"SELECT * FROM api WHERE user_id = $cid");
$rew = mysqli_fetch_assoc($result);
if($rew){
}else{
mysqli_query($connect,"INSERT INTO api(`user_id`,`api`) VALUES ('$cid','$key')");
}
}
if($data == "tasdiq"){
	if(mb_stripos($baza,$cid2)!==false){
if(in_array($cid2,$admin)){
	bot('deleteMessage',[
        'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menus,
]);
exit();
}else{
	bot('deleteMessage',[
        'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
]);
exit();
}
}else{
bot('deleteMessage',[
        'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
	'text'=>"❗  <b>Botdan foydalanishni davom ettirish uchun quyidagi botlarimizga obuna bo'ling!</b>",
'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"➕ Obuna bo'lish",'url'=>"https://t.me/AlijonovUzBot"]],
[['text'=>"✅ تأكيد",'callback_data'=>"tasdiq"]],
]
])
]);
return false;
}
}

if(mb_stripos($text,"set")!==false){
$refid = str_replace("/start set","",$text);
if(strlen($refid)>0 and $refid>0){
if($refid == $cid){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
exit();
}else{
if(mb_stripos($user_id,"$cid")!==false){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'reply_markup'=>$menu
]);
exit();
}else{
$a = $pul + 250;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $refid");
$b = $odam + 1;
mysqli_query($connect,"UPDATE kabinet SET odam = $b WHERE user_id = $refid");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
    'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
bot('SendMessage',[
'chat_id'=>$refid,
'text'=>"🔗 <b>Sizda taklif bor.</b>",
'parse_mode'=>'html',
]);
exit();
}
}
}
}

if($text == "/start"){
	if(in_array($cid,$admin)){
bot('Sendmessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menus,
]);
exit();
  }else{
bot('Sendmessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
]);
exit();
}
}

if($text == "◀️ رجوع لى خلف"){
	if(in_array($cid,$admin)){
bot('Sendmessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menus,
]);
unlink("step/$cid.step");
exit();
}else{
bot('Sendmessage',[
'chat_id'=>$cid,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
]);
unlink("step/$cid.step");
exit();
}
}

if($data == "back"){
	if(in_array($cid2,$admin)){
	bot('deleteMessage',[
   'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menus,
]);
exit();
}else{
		bot('deleteMessage',[
   'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>$menu,
]);
exit();
}
}

if($text == "حسابك"){
	bot('sendMessage',[
	'chat_id'=>$cid,
   'text'=>"<b>🔑 ايدي حسابك :</b> <code>$cid</code>

💵 <b>رصيدك الإجمالي :</b> $pul دولار
👥 <b>عدد العروض الخاصة بك :</b> $odam ta",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"💳 إيداع الأموال",'callback_data'=>"oplata"]],
]
])
]);
exit();
}

if($data == "kabinet"){
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['pul'];
$odam = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['odam'];
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>🔑 ايدي حسابك :</b> <code>$cid</code>

💵 <b>رصيدك الإجمالي :</b> $pul دولار
👥 <b>عدد العروض الخاصة بك :</b> $odam ta",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"💳 إيداع الأموال",'callback_data'=>"oplata"]],
]
])
]);
exit();
}

if($data == "oplata"){
        bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
        'text'=>"*💳 اختر أحد طرق الدفع التالية*",
'parse_mode'=>"Markdown",
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🐤 اسياه اسيل",'callback_data'=>"pay-اسياه اسيل-حط رقمك فى اسياه"],['text'=>"💠 باير",'callback_data'=>"pay-باير-حط رقمك فى باير"]],
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "orqa"){
        bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"*💳 اختر أحد طرق الدفع التالية*",
'parse_mode'=>"Markdown",
       'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🐤 اسياه اسيل",'callback_data'=>"pay-اسياه اسيل-حط رقمك فى اسياه"],['text'=>"💠 باير",'callback_data'=>"pay-باير-حط رقمك فى باير"]],
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"orqa"]],
]
])
]);
}

if(mb_stripos($data, "pay-")!==false){
	$ex = explode("-",$data);
	$turi = $ex[1];
	$wallet = $ex[2];
	bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
	'text'=>"<b>📋 نظام الدفع:</b> $turi

<b>💳 المحفظة (أو البطاقة):</b> <code>$wallet</code>
<b>📝 ايدي:</b> <code>$cid2</code>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✅ دفع ألان",'callback_data'=>"money"]],
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "money"){
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid2,
	'text'=>"💵 <b>أدخل مبلغ الدفع:</b>",
	'parse_mode'=>'html',
'reply_markup'=>$back,
	]);
	file_put_contents("step/$cid2.step",'oplata');
	exit();
}

if($step == "oplata"){
if(is_numeric($text)=="true"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"🧾 <b>أرسل  لقطة الشاشة بي دفع هنا :</b>",
	'parse_mode'=>'html',
	]);
file_put_contents("step/$cid.step","rasm-$text");
exit();
}else{
bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>لم يتم قبول القيمة، يرجى المحاولة مرة أخرى</b>",
	'parse_mode'=>'html',
]);
exit();
}
}

if(mb_stripos($step, "rasm-")!==false){
	$ex = explode("-",$step);
	$miqdor = $ex[1];
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
bot('sendPhoto',[
        'chat_id'=>$admin[0],
        'photo'=>$file,
        'caption'=>"📑 <a href='https://t.me/$username'>$cid</a> <b>معلومات الدفع من:</b>

• <b>مبلغ الدفع:</b> $miqdor",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✅ اقبل",'callback_data'=>"on-$cid-$miqdor"],['text'=>"❌ رفض",'callback_data'=>"off-$cid-$miqdor"]],
]
])
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"❇️ <b>تم إرسال معلومات حول إكمال حسابك إلى المسؤول الرئيسي. <u>إذا كانت هناك معلومات حول الدفع الخاص بك،</u> سيتم تعبئة حسابك.</b>",
'parse_mode'=>'html',
'reply_markup'=>$menu
]);
unlink("step/$cid.step");
exit();
}


if(mb_stripos($data, "on-")!==false){
	$ex = explode("-",$data);
	$id = $ex[1];
        $miqdor = $ex[2];
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $id"))['pul'];
$a = $pul + $miqdor;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $id");
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$id,
	'text'=>"<b>لقد تم $miqdor دولار ga قبول طلبك لتعبئة حسابك!</b>",
	'parse_mode'=>'html',
	]);
		bot('SendMessage',[
	'chat_id'=>$admin[0],
	'text'=>"<b>لقد تم $miqdor دولار ga قبول طلبك لتعبئة حسابك!</b>",
	'parse_mode'=>'html',
	]);      
	exit();
}

if(mb_stripos($data, "off-")!==false){
	$ex = explode("-",$data);
	$id = $ex[1];
        $miqdor = $ex[2];
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$id,
	'text'=>"<b>تم رفض طلبك  $miqdor دولار المستخدم لتعبئة حسابه بمبلغ!</b>",
	'parse_mode'=>'html',
	]);
		bot('SendMessage',[
	'chat_id'=>$admin[0],
	'text'=>"<b>تم رفض طلبك  $miqdor دولار المستخدم لتعبئة حسابه بمبلغ!</b>",
	'parse_mode'=>'html',
	]);	
	exit();
}

if($text == "💵 جمع المال"){
    bot('sendMessage',[
    'chat_id'=>$cid,
'text'=>"<b>اختر واحد من ما يلي:</b>",
'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🖇 رابط دعوة",'callback_data'=>"taklif"]],
]
])
]);
exit();
}

if($data == "ortga"){
    bot('deleteMessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$cid2,
	'text'=>"<b>اختر واحد من ما يلي:</b>",
'parse_mode'=>"html",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"🖇 رابط دعوة",'callback_data'=>"taklif"]],
]
])
]);
exit();
}


if($data == "taklif"){
$odam = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['odam'];
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
       'text'=>"⚡️<b> روابط الإحالة الخاصة بك:</b>

<code>https://t.me/$bot?start=set$cid2</code>
<code>tg://resolve?domain=$bot&start=set$cid2</code>

<b>سيتم منح 250 دولار لي شخص الواحد (عند تسجيل فى بوت).

اقتراحاتك: $odam ta</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"↗️ مشاركة رابط دعوه",'url'=>"https://t.me/share/url?url=https://t.me/$bot?start=set$cid2"]],
	        [['text'=>"◀️ رجوع لى خلف",'callback_data'=>"ortga"]],
        ]
        ])
]);
}

if($text == "📨 تواصل معي مبرمج بوت"){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>أدخل رسالتك:</b>",
'parse_mode'=>'html',
'reply_markup'=>$back
]);
file_put_contents("step/$cid.step","Bog'lanish");
exit();
}

if($step == "Bog'lanish"){
bot('SendMessage',[
'chat_id'=>$admin[0],
    'text'=>"💬 <a href='https://t.me/$username'>$cid</a> <b>رسالة جديدة من:</b> $text",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>تم استلام الطلب. انتظر الجواب!</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu
]);
unlink("step/$cid.step");
exit();
}

if($text == "⚙ إعدادات"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>اختر واحد من ما يلي:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🔑 لى تغير api",'callback_data'=>"setapi"]],
]
])
]);
exit();
}

//@AX_GB

if($data == "settings"){
	bot('deleteMessage',[
   'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('sendMessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>اختر واحد من ما يلي:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🔑 لى تغير api",'callback_data'=>"setapi"]],
]
])
]);
}

if($data == "setapi"){
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['pul'];
$api = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM api WHERE user_id = $cid2"))['api'];
	bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
     'text'=>"<b>Yuklanmoqda...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
	'text'=>"<b>🔑 مفتاح API الخاص بك:</b> <pre>$api</pre>

💵 <b>رصيدك:</b> $pul دولار",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🔄 تغير API",'callback_data'=>"reset_api"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"settings"]]
]
])
]);
}

if($data == "reset_api"){
	bot('editMessageText',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
   'text'=>"<b>⚠️ هل أنت متأكد أنك تريد استبدال مفتاح API الخاص بك بمفتاح جديد؟?</b>

❔ <i>عندما يتم تجديد مفتاح API الخاص بك، لن تتمكن من استخدام مفتاح API السابق.</i>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"✅ تأكيد",'callback_data'=>"resetapi"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"setapi"]]
]
])
]);
}


if($data == "resetapi"){
mysqli_query($connect, "DELETE FROM `api` WHERE user_id = '$cid2'");
mysqli_query($connect,"INSERT INTO api(`user_id`,`api`) VALUES ('$cid2','$key')");
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
   'text'=>"<b>✅ تم تغير api قديم.

api جديد تبعك:</b> <pre>$key</pre>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"setapi"]]
]
])
]);
}

	if($text == "📂 خدمات بوت رشق"){
	bot('SendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"<b>📱 اختر موقع الى تبغى ترشق لة:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🗂 Telegram",'callback_data'=>"telegram"]],
	[['text'=>"📑 الاقسام الرئيسيه",'callback_data'=>"mal"]]
]
])
]);
exit();
}

if($data == "servis"){
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('SendMessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>📱 اختر موقع الى تبغى ترشق لة:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🗂 Telegram",'callback_data'=>"telegram"]],
	[['text'=>"📑 الاقسام الرئيسيه",'callback_data'=>"mal"]]
]
])
]);
exit();
}


if($data == "telegram"){
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
'text'=>"<b>⬇️ اختر نوع الخدمة التي تحتاجها:</b>",
'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"👤 مشتركين",'callback_data'=>"obunachi"]],
	[['text'=>"🗨👁 مشهدات",'callback_data'=>"korish"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"servis"]]
]
])
]);
}

if($data == "obunachi"){
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
'text'=>"<b>⬇️ اختر نوع الخدمة التي تحتاجها:</b>",
'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"مشتركين سعر رخيص ",'callback_data'=>"xiz-معلومات طلبك -100-13-100-50000"]],
	[['text'=>"مشترك فوري",'callback_data'=>"xiz-طلب مشترك فوري-101-15-100-5000"]],
	[['text'=>"المشترك الروسي",'callback_data'=>"xiz-طلب مشتركين روسى-102-11-100-50000"]],
	[['text'=>"المشترك الصيني (سريع)",'callback_data'=>"xiz-طلب مشتركين صين-103-14-100-10000"]],
	[['text'=>"مشترك عربي (سريع)",'callback_data'=>"xiz-طلب مشتركين عرب-104-5-100-10000"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"servis"]]
]
])
]);
}

if($data == "korish"){
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
'text'=>"<b>⬇️ اختر نوع الخدمة التي تحتاجها:</b>",
'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"مشهدات رخيصة",'callback_data'=>"xiz-طلب مشهدات -105-3-50-100000"]],
	[['text'=>"مشهدات حقيقية",'callback_data'=>"xiz-طلب مشهدات حقيقية-106-6-100-100000"]],
	[['text'=>"مشهدات سريعة",'callback_data'=>"xiz-طلب مشهدات سريعة-107-13-1000-20000"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"servis"]]
]
])
]);
}

if(mb_stripos($data,"xiz-")!==false){
$xiz = explode("-",$data)[1];
$service = explode("-",$data)[2];
$narx = explode("-",$data)[3];
$min = explode("-",$data)[4];
$max = explode("-",$data)[5];
	bot('editMessageText',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"📦 <b><u>$xiz</u></b>

🔑 <b><u>ايدى خدمه:</u></b> <pre>$service</pre>
💵 <b><u>سعر (1000): </u></b> $narx دولار

🔽 <b><u>أقل كمية ممكن طلبها:</u></b> $min شخص
🔼 <b><u>الحد الأقصى لكمية الطلب:</u></b> $max شخص",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"servis"]],
]
])
]);
}

if($data == "mal"){
	bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
     'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
	'text'=>"<b>اختر واحد من ما يلي:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"📑 معلومات مبرمج بوت",'callback_data'=>"qollan"]],
	[['text'=>"🛍 طلب",'callback_data'=>"buyurtma"],['text'=>"💵 اموال",'callback_data'=>"hisob"]],
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"servis"]]
]
])
]);
}

if($data == "qollan"){
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
   'text'=>"<b>اذه كنت تريد تنصيب بوت لك:</b>

اهلا بك يا عزيزي في قسم معلومات البوت هنا عزيزي يوجد معلومات المطور البوت مطور البوت مستر اكس مستر اكس يتمني  لكم عيدا سعيدا وهذا الملف البوت هديه لكم بمناسبه راس السنه قناه بوت

<b>قناة بوت :</b> @AX_GB",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"qollanma"]]
]
])
]);
}

if($data == "buyurtma"){
$api = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM api WHERE user_id = $cid2"))['api'];
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
   'text'=>"📦 <b><u>طلبni tekshirish</u></b>

<b><u>key:</u></b> ادخل رمز api خاص بكkeningiz
<b><u>action:</u></b> status
<b><u>order:</u></b> طلب ID si

🖇 <b><u>Manzil:</u></b> https://setapi.tk/api/v1?key=$api&action=status&order=153
✅ <b><u>Natija:</u></b> { status: Completed }",
	'disable_web_page_preview'=>true,
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"qollanma"]]
]
])
]);
}

if($data == "hisob"){
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $cid2"))['pul'];
$api = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM api WHERE user_id = $cid2"))['api'];
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
   'text'=>"📦 <b><u>تأكيد الحساب</u></b>

<b><u>key:</u></b> ادخل رمز api خاص بك
<b><u>action:</u></b> balance

🖇 <b><u>Manzil:</u></b> https://t.me/AX_GB +عدل على سطر وى ادخل رابط موقعك
✅ <b><u>Natija:</u></b> {   balance: $pul,
    currency: دولار }",
	'disable_web_page_preview'=>true,
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"qollanma"]]
]
])
]);
}


//<---- Admin panel By: @AlijonovUz---->

if(($text == "🗄 لوحة تحكم") and (in_array($cid,$admin))){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>أنت في لوحة التحكم:</b>",
   'parse_mode'=>'html',
	'reply_markup'=>$panel,
]);
unlink("step/$cid.step");
unlink("step/$cid.txt");
exit();
}

if($data == "foydalanuvchi"){
$save = file_get_contents("step/$cid2.txt");
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['pul'];
$odam = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['odam'];
$ban = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['ban'];
if($ban == unban){
	$bans = "🔔 حظر";
}
if($ban == "ban"){
	$bans = "🔕 منع ";
}
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$save'>$save</a>
<b>Balans: $pul دولار
رابط دعوة: $odam ta</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"$bans",'callback_data'=>"ban"]],
	[['text'=>"➕ Pul qo'shish",'callback_data'=>"plus"],['text'=>"➖ Pul ayirish",'callback_data'=>"minus"]]
	]
	])
]);
unlink("step/$cid2.step");
exit();
}

if($text == "🔎 كشف بى ايدي"){
		if(in_array($cid,$admin)){
	bot('SendMessage',[
'chat_id'=>$cid,
	'text'=>"<b>إرسال رقم ايدي المستخدم المطلوب:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$bosh
	]);
file_put_contents("step/$cid.step",'iD');
exit();
}
}

if($step == "iD"){
		if(in_array($cid,$admin)){
$user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"));
if(mb_stripos($user, $text)!==false){
file_put_contents("step/$cid.txt",$text);
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['pul'];
$odam = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['odam'];
$ban = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $text"))['ban'];
if($ban == unban){
	$bans = "🔔 حظر";
}
if($ban == "ban"){
	$bans = "🔕 منع ";
}
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>البحث عن...</b>",
'parse_mode'=>'html',
]);
bot('editMessageText',[
'chat_id'=>$cid,
'message_id'=>$mid + 1,
'text'=>"<b>البحث عن...</b>",
'parse_mode'=>'html',
]);
bot('editMessageText',[
'chat_id'=>$cid,
'message_id'=>$mid + 1,
'text'=>"<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$text'>$text</a>
<b>Balans: $pul دولار
رابط دعوة: $odam ta</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"$bans",'callback_data'=>"ban"]],
	[['text'=>"➕ Pul qo'shish",'callback_data'=>"plus"],['text'=>"➖ Pul ayirish",'callback_data'=>"minus"]]
	]
	])
]);
unlink("step/$cid.step");
exit();
}else{
bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>لم يتم العثور على المستخدم.</b>

حاول ثانية:",
'parse_mode'=>'html',
]);
exit();
}
}
}


//qo'shish
if($data == "plus"){
$save = file_get_contents("step/$cid2.txt");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<a href='tg://user?id=$save'>$save</a> <b>ning hisobiga qancha pul qo'shmoqchisiz?</b>",
'parse_mode'=>"html",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"foydalanuvchi"]]
]
])
]);
file_put_contents("step/$cid2.step",'plus');
exit();
}

if($step == "plus"){
	if(in_array($cid,$admin)){
if(is_numeric($text)=="true"){
bot('sendMessage',[
'chat_id'=>$save,
'text'=>"<b>Adminlar tomonidan hisobingiz $text دولار to'ldirildi</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Foydalanuvchi hisobiga $text دولار qo'shildi!</b>",
'parse_mode'=>"html",
'reply_markup'=>$panel,
]);
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $save"))['pul'];
$a = $pul + $text;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $save");
unlink("step/$cid.txt");
unlink("step/$cid.step");
exit();
}else{
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Faqat raqamlardan foydalaning!</b>",
'parse_mode'=>'html',
'protect_content'=>true,
]);
exit();
}
}
}

//ayirish
if($data=="minus"){
$save = file_get_contents("step/$cid2.txt");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<a href='tg://user?id=$save'>$save</a> <b>ning hisobiga qancha pul ayirmoqchisiz?</b>",
'parse_mode'=>"html",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"foydalanuvchi"]]
]
])
]);
file_put_contents("step/$cid2.step",'minus');
exit();
}

if($step == "minus"){
		if(in_array($cid,$admin)){
if(is_numeric($text)=="true"){
bot('sendMessage',[
'chat_id'=>$save,
'text'=>"<b>Adminlar tomonidan hisobingizdan $text دولار olib tashlandi</b>",
'parse_mode'=>"html",
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Foydalanuvchi hisobidan $text دولار olib tashlandi!</b>",
'parse_mode'=>"html",
'reply_markup'=>$panel,
]);
$pul = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $save"))['pul'];
$a = $pul - $text;
mysqli_query($connect,"UPDATE kabinet SET pul = $a WHERE user_id = $save");
unlink("step/$cid.txt");
unlink("step/$cid.step");
exit();
}else{
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Faqat raqamlardan foydalaning!</b>",
'parse_mode'=>'html',
]);
exit();
}
}
}

if($data=="ban"){
$save = file_get_contents("step/$cid2.txt");
if($admin[0] == $save){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"Asosiy adminlarni blocklash mumkin emas!",
'show_alert'=>true,
]);
}else{
$ban = mysqli_fetch_assoc(mysqli_query($connect,"SELECT*FROM kabinet WHERE user_id = $save"))['ban'];
	if($ban == "ban"){
		mysqli_query($connect,"UPDATE kabinet SET ban = 'unban' WHERE user_id = $save");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>Foydalanuvchi ($save) bandan olindi!</b>",
'parse_mode'=>"html",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"foydalanuvchi"]]
]
])
]);
exit();
}else{
	mysqli_query($connect,"UPDATE kabinet SET ban = 'ban' WHERE user_id = $save");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>Foydalanuvchi ($save) banlandi!</b>",
'parse_mode'=>"html",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"foydalanuvchi"]]
]
])
]);
exit();
}
}
}

if($text == "✉ ارسل رسالة"){
if(in_array($cid,$admin)){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>حدد نوع الرسالة المراد إرسالها;</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"لى شخص ",'callback_data'=>"user"]],
	[['text'=>"جميع",'callback_data'=>"send"]],
	]
	])
	]);
	exit();
}
}

if($data == "user"){
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>أدخل رقم ايدي المستخدم</b>",
'parse_mode'=>'html',
'reply_markup'=>$bosh,
]);
file_put_contents("step/$cid2.step",'user');
exit();
}

if($step == "user"){
if(in_array($cid,$admin)){
if(is_numeric($text)=="true"){
file_put_contents("step/$cid.txt",$text);
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Xabaringizni kiriting:</b>",
	'parse_mode'=>'html',
	]);
file_put_contents("step/$cid.step",'xabar');
exit();
}else{
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Faqat raqamlardan foydalaning!</b>",
'parse_mode'=>'html',
]);
exit();
}
}
}

if($step == "xabar"){
if(in_array($cid,$admin)){
	bot('SendMessage',[
	'chat_id'=>$save,
	'text'=>"$text",
        'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'protect_content'=>true,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Xabaringiz yuborildi ✅</b>",
       'parse_mode'=>'html',
        'reply_markup'=>$panel,
	]);
	unlink("step/$cid.step");
	unlink("step/$cid.txt");
	exit();
}
}

if($data == "send"){
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('SendMessage',[
'chat_id'=>$cid2,
    'text'=>"*أدخل نص الرسالة:*",
'parse_mode'=>'MarkDown',
'reply_markup'=>$bosh,
    ]);
file_put_contents("step/$cid2.step","sendpost");
exit();
}

if($step == "sendpost"){
if(in_array($chat_id,$admin)){
  unlink("step/$chat_id.step");
$res = mysqli_query($connect,"SELECT * FROM `user_id`");
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"✅ <b>Xabar Yuborish Boshlandi!</b>",
'parse_mode'=>'html',
  ]);
$x=0;
$y=0;
while($a = mysqli_fetch_assoc($res)){
$id = $a['user_id'];
	$key=$message->reply_markup;
	$keyboard=json_encode($key);
	$ok=bot('copyMessage',[
'from_chat_id'=>$chat_id,
'chat_id'=>$id,
'message_id'=>$mid,
])->ok;
if($ok==true){
}else{
$okk=bot('copyMessage',[
'from_chat_id'=>$chat_id,
'chat_id'=>$id,
'message_id'=>$mid,
])->ok;
}
if($okk==true or $ok==true){
$x=$x+1;
bot('editMessageText',[
  'chat_id'=>$chat_id,
'message_id'=>$mid,
'text'=>"✅ <b>وصل:</b> $x

❌ <b>فشل فى الارسال:</b> $y",
'parse_mode'=>'html',
]);
}elseif($okk==false){
mysqli_query($connect, "DELETE FROM `user_id` WHERE user_id = '$id'");
mysqli_query($connect, "DELETE FROM `kabinet` WHERE user_id = '$id'");
mysqli_query($connect, "DELETE FROM `api` WHERE user_id = '$id'");
$y=$y+1;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$mid + 1,
'text'=>"✅ <b>وصل:</b> $x

❌ <b>فشل فى الارسال:</b> $y",
'parse_mode'=>'html',
]);
}
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$mid + 1,
'text'=>"✅ <b>وصل:</b> $x

❌ <b>فشل فى الارسال:</b> $y",
'parse_mode'=>'html',
]);
}
exit();
}


if($text == "📊 إحصائيات"){
	if(in_array($cid,$admin)){
$res = mysqli_query($connect, "SELECT * FROM `user_id`");
$us = mysqli_num_rows($res);
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>📊 عدد مستخدمي البوت: $us ta</b>",
'parse_mode'=>'html',
]);
exit();
}
}

if($text == "🔒 نسخة من بوت"){
		if($cid == $admin[0]){
bot('sendDocument',[
'chat_id'=>$admin[0],
'document'=>new CURLFile(__FILE__),
'caption'=>"<b>@$bot kodi</b>",
'parse_mode'=>'html',
]);
exit();
}else{
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"⛔ <b>Bot scriptini faqat asosiy admin olishi mumkin.</b>",
	'parse_mode'=>'html',
]);
exit();
}
}


if($text == "⚙ الإعدادات الأساسية"){
		if(in_array($cid,$admin)){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>⚙️ مرحبًا بك في قسم الإعدادات الرئيسية! ماذا نغير؟</b>

<i>اختر ماذه تريد من الاوامر</i>",
	'parse_mode'=>'html',
	'reply_markup'=>$asosiy,
	]);
	exit();
}
}

if($text == "🤖 فتح بوت"){
	if(in_array($cid,$admin)){
	if($holat == "Yoqilgan"){
		$xolat = "❌ مقفل";
	}
	if($holat == "O'chirilgan"){
		$xolat = "✅مفعل";
	}
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>الحالة الحالية:</b> $holat",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"$xolat",'callback_data'=>"bot"]],
]
])
]);
exit();
}
}

if($data == "xolat"){
	if($holat == "Yoqilgan"){
		$xolat = "❌ مقفل";
	}
	if($holat == "O'chirilgan"){
		$xolat = "✅مفعل";
	}
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>الحالة الحالية:</b> $holat",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
[['text'=>"$xolat",'callback_data'=>"bot"]],
]
])
]);
exit();
}

if($data == "bot"){
if($holat == "Yoqilgan"){
file_put_contents("step/holat.txt","O'chirilgan");
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
       'text'=>"<b>تم التغيير بنجاح</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"xolat"]],
]
])
]);
exit();
}else{
file_put_contents("step/holat.txt","Yoqilgan");
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
       'text'=>"<b>تم التغيير بنجاح</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"xolat"]],
]
])
]);
exit();
}
}

if($text == "ضفapi"){
		if(in_array($cid,$admin)){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>مفتاح API الحالي:</b> 
<code>$api_key</code>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"استبدل API بأخرى جديدة",'callback_data'=>"api"]],
	[['text'=>"عرض الرصيد",'callback_data'=>"balans"]],
	]
	])
	]);
	exit();
}
}

if($data == "api1"){
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid2,
'text'=>"<b>مفتاح API الحالي:</b> 
<code>$api_key</code>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"استبدل API بأخرى جديدة",'callback_data'=>"api"]],
	[['text'=>"عرض الرصيد",'callback_data'=>"balans"]],
	]
	])
	]);
	exit();
}

if($data == "api"){
	bot('deleteMessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	]);
	bot('SendMessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>أرسل مفتاح API الخاص بك:</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$bosh,
	]);
	file_put_contents("step/$cid2.step",'api');
	exit();
}

if($step == "api"){
		if(in_array($cid,$admin)){
	if(isset($text)){
	file_put_contents("step/api.txt",$text);
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>تم التغيير بنجاح</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$asosiy,
	]);
	unlink("step/$cid.step");
	exit();
}
}
}

if($data == "balans"){
if($api_key == null){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"API mavjud emas!",
'show_alert'=>true,
]);
}else{
$balans = json_decode(file_get_contents("https://uzgram.ru/api/v1?key=$api_key&action=balance"),true);
bot('editMessageText',[
        'chat_id'=>$cid2,
        'message_id'=>$mid2,
        'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
       bot('editMessageText',[
      'chat_id'=>$cid2,
     'message_id'=>$mid2 + 1,
'text'=>"<b>Kuting...</b>",
       'parse_mode'=>'html',
]);
     bot('editMessageText',[
        'chat_id'=>$cid2,
       'message_id'=>$mid2,
       'text'=>"<b>💵 رصيدك فى api:</b> ".$balans['balance']." دولار",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ رجوع لى خلف",'callback_data'=>"api1"]],
]
])
]);
exit();
}
}

if(isset($message)){
		if(in_array($cid,$admin)){
		bot('SendMessage',[
		'chat_id'=>$cid,
		'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
		'parse_mode'=>'html',
		'reply_markup'=>$menus,
		]);
	}else{
		bot('SendMessage',[
		'chat_id'=>$cid,
		'text'=>"🖥 <b>اهلا بك عزيزى مستخدم أنت في القائمة الرئيسية.</b>",
		'parse_mode'=>'html',
		'reply_markup'=>$menu,
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