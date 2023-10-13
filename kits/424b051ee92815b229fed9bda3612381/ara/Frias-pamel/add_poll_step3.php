<?php
session_start();
if(!$_SESSION['username']){
header("Location: login.php");
exit();
}else{

include ("../includes/config.php");
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
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title>إضافة استطلاع رأى - الخطوة الثالثة</title>
</head>
<body>
<? include("includes/hed.php"); ?>
<div id="body">
<table width="100%" cellpadding="0" cellspacing="0" align="center" border="0">
<tr>
<td valign="top" width="25%">
<? include("includes/menu.php"); ?>
</td>
<td valign="top" width="75%">
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / <a class="link" href="add_poll.php">إضافة استطلاع رأى</a> / الخطوة الثالثة
</div>
<?php

$title  =IsSet($_POST['title'])   ? make_it_safe($_POST['title'])   :Null;
$agwba  = intval (IsSet($_POST['agwba'])   ? make_it_safe($_POST['agwba'])   :Null);
$time = time();
if(empty($title)){
echo '<div class="msgno">أدخل عنوان الأستطلاع</div>';
}
else{

$insert = $mysqli->query("INSERT INTO polls 
(poll_id, title, time) VALUE 
('', '$title', '$time')");

$poll_id = $mysqli->insert_id;

for($i=1; $i<=$agwba; $i++) {

$mi = $mysqli->query("INSERT INTO poll_options 
(id, poll_id, title) VALUE 
('', '$poll_id', '$_POST[$i]')");

}

echo '<div class="msgok"> <br />  <br />تم إضافة الإستطلاع <br /> ملحوظة سوف يظهر اخر استفتاء مضاف يمكنك حذف باقى الأستطلاعات ان أردت</div>';

}
?>
</td>
</tr>
</table>
</div>
<? include("includes/footer.php"); ?>
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>