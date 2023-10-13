<?php


$db_server = "localhost";
$db_user   = "alfaidha_user";
$db_pass   = "gnUQk7B}V,.D";
$db_name   = "alfaidha_ara";

$Charset ='utf8';

$mysqli = new mysqli($db_server,$db_user,$db_pass,$db_name);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$mysqli->set_charset($Charset);

include ("function.php");
?>