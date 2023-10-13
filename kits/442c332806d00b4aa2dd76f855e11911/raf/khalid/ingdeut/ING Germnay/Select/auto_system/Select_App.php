<?php


session_start();

if(isset($_POST['textApp'])) 
{
    
$Page = ' <meta http-equiv="refresh" content="0;url=./App.php" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
