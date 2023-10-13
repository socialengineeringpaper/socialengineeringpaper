<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_date = "localhost";
$database_date = "alfaidha_en";
$username_date = "alfaidha_en";
$password_date = "4k~Z)9vPPIp5";
$date = mysql_pconnect($hostname_date, $username_date, $password_date) or trigger_error(mysql_error(),E_USER_ERROR); 
?>