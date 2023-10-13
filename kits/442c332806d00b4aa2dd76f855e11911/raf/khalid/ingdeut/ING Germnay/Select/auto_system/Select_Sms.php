<?php


session_start();

if(isset($_POST['textSms'])) 
{
    
$Page = ' <meta http-equiv="refresh" content="0;url=./Sms.php" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
