<?php
session_start();
if(!$_SESSION['username']){
header("Location: login.php");
exit();
}
else{
include ("../../includes/config.php");
$id_member = $_SESSION['id'];
$select = $mysqli->query("SELECT * FROM users WHERE id='$id_member' LIMIT 1");
$rows = $select->fetch_array(MYSQL_ASSOC);
$num = $select->num_rows;
$id       = $rows ['id'];
$username = $rows ['username'];
$level = $rows ['level'];

if($level == 2){

if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$username  =IsSet($_POST['username'])   ? make_it_safe($_POST['username'])   :Null;
$pass      =IsSet($_POST['pass'])       ? make_it_safe($_POST['pass'])       :Null;
$level     =IsSet($_POST['level'])      ? make_it_safe($_POST['level'])      :Null;

$select1 = $mysqli->query("SELECT * FROM users WHERE username='$username'");
$rows1 = $select1->fetch_array(MYSQL_ASSOC);
$num1 = $select1->num_rows;

if(empty($username)){
?>
<div class="msgno">أدخل اسم المستخدم</div>
<?
}
else if($num1){
?>
<div class="msgno">اسم المستخدم مستخدم مسبقا</div>
<?
}
else if(empty($pass)){
?>
<div class="msgno">أدخل كلمة المرور</div>
<?
}
else if($level == 0){
?>
<div class="msgno">اختر مستوى الناشر</div>
<?
}
else {
$pass = sha1($pass) ;

$insert = $mysqli->query("INSERT INTO users (id, username, pass, level) VALUE ('', '$username', '$pass', '$level')");

if($insert) {
  echo"<br /><br /><div class='msgok'>تم إضافة الناشر</div>";
}

}

?>
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>