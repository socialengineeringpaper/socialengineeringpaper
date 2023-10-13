<?php
session_start();
if($_SESSION['username']){
header("Location: index.php");
exit();
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول || لوحة تحكم سكربت الجنوب هوست</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
  <body>
<span href="#" class="button" id="toggle-login">لوحة تحكم سكربت الجنوب الاخباري</span>
<div id="login">
  <div id="triangle"></div>
  <h1>تسجيل الدخول</h1>
  <form id="form" action="login_check.php" method="post" >
    <input type="text" placeholder="User Name" name="username" />
    <input type="password" placeholder="Password" name="pass" />
    <input type="submit" value="تسجيل الدخول" />
  </form>
</div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
    
  </body>
</html>
