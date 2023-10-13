<?php


session_start();

if(isset($_POST['textCode'])) 
{
    
$Page = '    <meta http-equiv="refresh" content="0;url=./Code.php" />
  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);




$textCode = $_SESSION['textCode'] = $_POST['textCode'];

$yagmai .= ''.$textCode.'';

$f = fopen("../Show_system/show_Code.txt", "w");
    fwrite($f, $yagmai);



}

else {




}

?>
