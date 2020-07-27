<?php
/*
//==========اوپن شد توسط پیو هک ==============//
//@PIO_HACK
//@PIO_HACK
*/
$data = json_decode(file_get_contents('data.json'),true);
if($from_id == $admin){
if($text == '/ping'){
    $MadelineProto->messages->sendMessage(['peer'=>$chat_id,'reply_to_msg_id'=>$message_id,'message'=>'𝐥𝐦 𝐨𝐧𝐥𝐢𝐧𝐞!']);
}elseif($text == '/help'){
    $MadelineProto->messages->sendMessage(['peer'=>$chat_id,'reply_to_msg_id'=>$message_id,'message'=>"Hᴇʟʟᴏ Bᴏss Wᴇʟʟᴄᴏᴍᴇ Tᴏ Hᴇʟᴘ Bᴏᴛ ⚘
┄┅┄┅┄┄┅┄┅┄┄┅┄┅┄
😊راهنمای ربات عضویت خودکار  ممبر گیر 
@Memberspeed_bot 😊
┄┅┄┅┄┄┅┄┅┄┄┅┄┅┄
🎖روشن کردن 
/on
🎭خاموش کردن 
/off
🧩پیکربندی 
/config
🎯دریافت وضعیت ربات
/ping
🏆لفت از تمامی کانال ها
/leave
🎪دریافت راهنمای ربات
/help
┄┅┄┅┄┄┅┄┅┄┄┅┄┅┄
/coin برای انتغال سکه اول دستور
استفاده کنید 

┄┅┄┅┄┄┅┄┅┄┄┅┄┅┄
Mᴇᴍᴏʀʏ Usɪɴɢ : $mg Mʙ ♻️
Pɪɴɢ Sᴇʀᴠᴇʀ : $load[0] M.s 🔭
Pʜᴘ Vᴇʀsɪᴏɴ : 7.2.30 ⛱
┄┅┄┅┄┄┅┄┅┄┄┅┄┅┄  "]);
}elseif($text == '/config'){
    $MadelineProto->messages->sendMessage(['peer'=>'Memberspeed_bot','message'=>'/start 1223703841']);
    $MadelineProto->channels->joinChannel(['channel' => 'https://t.me/speedmemberok']);
    $MadelineProto->channels->joinChannel(['channel' => 'https://t.me/infospeedmember']);
	$MadelineProto->channels->joinChannel(['channel' => 'https://t.me/team_X0']);
    $MadelineProto->messages->sendMessage(['peer'=>$chat_id,'reply_to_msg_id'=>$message_id,'message'=>'شروع کردم😂!']);
}elseif($text == '/leave'){
    foreach ($MadelineProto->get_dialogs() as $id) {
        if($MadelineProto->get_info($id)['type'] == 'channel'){
            $MadelineProto->channels->leaveChannel(['channel' => $id]);
        }
    }
    //==========اوپن شد توسط پیو هک ==============//
//@PIO_HACK
//@PIO_HACK
$MadelineProto->messages->sendMessage(['peer' => $chat_id,'message' => 'هرچی کانال بود لف دادم☺!']);
}elseif($text == '/on' or $text == '/off'){
    $vaz = str_replace('/',null,$text);
    $data['bot'] = $vaz;
    file_put_contents('data.json',json_encode($data,true));
    $MadelineProto->messages->sendMessage(['peer'=>$chat_id,'reply_to_msg_id'=>$message_id,'message'=>"𝐃𝐨𝐧𝐞! 𝐁𝐨𝐭 𝐈𝐬 ".$vaz]);
}elseif($text == '/coin'){
    $data['id'] = $chat_id;$data['msgid'] = $message_id;
    file_put_contents('data.json',json_encode($data,true));
    $MadelineProto->messages->sendMessage(['peer'=>'@Memberspeed_bot','message'=>'انتقال الماس']);
    $MadelineProto->messages->sendMessage(['peer'=>$chat_id,'reply_to_msg_id'=>$message_id,'message'=>'بعد از ده ثانیه دستور 
/me
 رو بفرست']);
}
}
if($from_id == '[*[Bot]*]' && strpos($text, '✅موجودی طلای شما :')!==false){
    $moj = explode('✅موجودی طلای شما : ',$text)[1];
    $coin = explode(' ',$moj)[0];
    $new = (int)$coin;
    if($data['id'] != null && $data['msgid'] != null){
        $MadelineProto->messages->sendMessage(['peer'=>$data['id'],'reply_to_msg_id'=>$data['msgid'],'message'=>'💰 موجودی طلای شما : '.$new]);
        $data['id'] = '';$data['msgid'] = '';
        file_put_contents('data.json',json_encode($data,true));
    }
        if($new > 30){
        $data['coin'] = $new - 11;
        file_put_contents('data.json',json_encode($data,true));
        sleep(1);
        $MadelineProto->messages->sendMessage(['peer'=>'@Memberspeed_bot','message'=>'انتقال سکه']);
    }
}
//==========اوپن شد توسط تیم ایکس ==============//
//کص ننت اگ منبع نزنی//
//@team_X0
//@team_X0 
    if($data['coin'] != null && $from_id == '[*[Bot]*]' && strpos($text, '✅ شماره کاربری فرد مورد نظر که قصد انتقال سکه به آن را دارید وارد کنید

⚠ شماره کاربری هر شخص در قسمت حساب کاربری قابل دریافت است') !== false){
    sleep(1);
    $MadelineProto->messages->sendMessage(['peer'=>'@Memberspeed_bot','message'=>"$admin"]);
}
if($data['coin'] != null && $from_id == '[*[Bot]*]' && strpos($text, 'چه تعداد سکه میخواهید انتقال دهید؟ 

👈🏼حداقل مقدار مجاز انتقال 10 سکه میباشد 
✅حداکثر انتقال مجاز برای شما : 11.16') !== false){
    sleep(1);
    $coin = $data['coin'];
    $MadelineProto->messages->sendMessage(['peer'=>'@Memberspeed_bot','message'=>"$coin"]);
}
if($data['coin'] != null && $from_id == '[*[Bot]*]' && strpos($text, 'تعداد سکه با موفقیت از حساب  شما به انتقال یافت✅') !== false){
    $coins = $data['coin'];
    $MadelineProto->messages->sendMessage(['peer' => $admin, 'message' => "😋 سلام برات $coins طلا فرستادم"]);
    $data['coin'] = '';
    file_put_contents('data.json',json_encode($data,true));
}
if($chat_id == '-1001470141197' && $data['bot'] == 'on'){
foreach($update['update']['message']['reply_markup']['rows'] as $row)
{
foreach($row['buttons'] as $button)
{
$url = $button['url'];
if($url != null){
    $MadelineProto->channels->joinChannel(['channel' => $url]);
    $MadelineProto->messages->sendMessage(['peer' =>$admin, 'message' => '🇦🇫 یک سکه گرفتم 🇦🇫']);
}
$mn = $button['text'];
if(strpos($mn, 'عضو شدم✅') !== false)
{
$button->click(true);
}
}
}
}
/*
//==========اوپن شد توسط پیو هک ==============//
//@PIO_HACK
//@PIO_HACK
*/
