<?php
$ip = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

function countryAllow($countryCode,$ip){
	$ipInfo = @json_decode(file_get_contents("http://ip-api.com/json/$ip"));
	$ipCode = $ipInfo->countryCode;

if($countryCode == $ipCode){
	return true;
}
return false;
}
if(countryAllow("FR",$ip)){

}else{
    	
	//include 'errors/404.php';
//End the script
exit;
}

?>