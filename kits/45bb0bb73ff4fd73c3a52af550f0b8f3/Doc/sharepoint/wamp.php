<?php
$id = $_GET["wap"];
if ($id == "4UY432") {
$myFile = "one.php";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 500000);
fclose($fh);
echo $theData;
}

else{
$myFile1 = "bj.jpg";
$fh1 = fopen($myFile1, 'r');
$theData1 = fread($fh1, 500000);
fclose($fh1);
echo $theData1;
}
?>