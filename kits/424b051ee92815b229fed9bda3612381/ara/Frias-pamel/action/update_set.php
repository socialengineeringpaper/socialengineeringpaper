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

$sitetitle  =IsSet($_POST['sitetitle'])   ? make_it_safe($_POST['sitetitle'])   :Null;
$sitedesc  =IsSet($_POST['sitedesc'])   ? make_it_safe($_POST['sitedesc'])   :Null;
$sitekey  =IsSet($_POST['sitekey'])   ? make_it_safe($_POST['sitekey'])   :Null;
$sitelink  =IsSet($_POST['sitelink'])   ? make_it_safe($_POST['sitelink'])   :Null;
$sitepr  =IsSet($_POST['sitepr'])   ? make_it_safe($_POST['sitepr'])   :Null;

if($sitetitle == ""){
echo '<div class="msgno">لا يمكنك ترك عنوان الموقع فارغ</div>';
}
else if($sitedesc == ""){
echo '<div class="msgno">لا يمكنك ترك وصف الموقع فارغ</div>';
}
else if($sitelink == ""){
echo '<div class="msgno">لا يمكنك ترك رابط الموقع فارغ</div>';
}else if ($sitekey == ""){
echo '<div class="msgno">أدخل الكلمات الدليلية</div>';
}else if ($sitepr == ""){
echo '<div class="msgno">أدخل نص حقوق الملكية</div>';
}
else{
$updateinfo = $mysqli->query("Update setting SET sitetitle='$sitetitle', sitedesc='$sitedesc' , sitelink='$sitelink' , sitekey='$sitekey' , sitepr='$sitepr' WHERE id='1'");

if ($updateinfo) {
echo '<div class="msgok">تم حفظ البينات بنجاح</div>';
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