<?php


$db_server = "localhost";
$db_user   = "alfaidha_en";
$db_pass   = "4k~Z)9vPPIp5";
$db_name   = "alfaidha_en";

$Charset ='utf8';

$mysqli = new mysqli($db_server,$db_user,$db_pass,$db_name);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$mysqli->set_charset($Charset);

include ("function.php");
?>