<?php
ob_start();
session_start();
if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("Error Not Found");

include ("../includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title>تسجيل الدخول لوحة التحكم</title>
</head>
<body>
<br />
<br />
<br />
<?
$username =addslashes($_POST['username']);
$pass     =addslashes($_POST['pass']);

if(empty($username)){
?>
<div class="msgno">أدخل اسم المستخدم</div>
<?
}
else if(empty($pass)){
?>
<div class="msgno">أدخل كلمة المرور</div>
<?
}
else {
$pass = sha1($pass) ;

$select = $mysqli->query("SELECT * FROM users WHERE username='$username' AND pass='$pass' LIMIT 1");
$rows = $select->fetch_array(MYSQL_ASSOC);
$num = $select->num_rows;
$id       = $rows ['id'];
$username = $rows ['username'];


if($num == 1){
$_SESSION['id'] = $id ;
$_SESSION['username'] = $username ;

 setcookie("username",$_SESSION['username'],time()+2592000);  
 setcookie("id",$_SESSION['id'],time()+2592000);
?>
<div class="msgok">تم تسجيل الدخول بنجاح <br /> جارى تحويلك للوحة التحكم ...</div>
<meta http-equiv="refresh" content="2;URL=index.php" />
<?
}else{
?>
<div class="msgno">خطأ فى اسم المستخدم أو كلمة المرور</div>
<?
}
}
?>
</body>
</html>
