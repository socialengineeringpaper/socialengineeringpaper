
<?php


session_start();

if(isset($_POST['textExit'])) 
{
    
  $Page = ' <meta http-equiv="refresh" content="0;url=./success.php" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);




}

else {




}

?>
