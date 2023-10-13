<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_date = "localhost";
$database_date = "alfaidha_ara";
$username_date = "alfaidha_user";
$password_date = "gnUQk7B}V,.D";
$date = mysql_pconnect($hostname_date, $username_date, $password_date) or trigger_error(mysql_error(),E_USER_ERROR); 
?>