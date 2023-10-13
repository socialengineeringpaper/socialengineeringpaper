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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل الصفحة</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="editor/jquery.cleditor.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
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
<?
$id_msg      =IsSet($_GET['id'])    ? make_it_safe($_GET['id'])    :Null;

$select = $mysqli->query("SELECT * FROM msgs where id='$id_msg' limit 1");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_1         = $rows ['id'];
$yourname        = $rows ['yourname'];
$msgmail        = $rows ['msgmail'];
$msgname        = $rows ['msgname'];
$msg        = $rows ['msg'];
$pics        = $rows ['pics'];

$updateshow = $mysqli->query("Update msgs Set shown='1' WHERE id='$id_1 ' ");
?>
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> 
</div>

<div class="hed"><? echo $msgname; ?> </div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الرسالة</td>
<td class="td2" width="70%">
<? echo $msgname; ?>
</td>
</tr>

<tr>
<td class="td1" width="30%">بواسطة</td>
<td class="td2" width="70%">
<? echo $yourname; ?> / البريد : <? echo $msgmail; ?>
</td>
</tr>

<tr>
<td class="td1" width="30%">الرسالة</td>
<td class="td2" width="70%">
<? echo $msg; ?> 
<br />
المرفقات
<br />
<?

$showpics = explode(",", $pics);

$numphoto = count($showpics);

for($x = 0; $x < $numphoto; $x++ ){
?>
<a href="../files/<? echo $showpics[$x]; ?>" target="_blank">
<img src="../files/<? echo $showpics[$x]; ?>" height="50" width="50" />
</a>
<?
}
?>

</td>
</tr>



<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<a class="greenbutton" style="padding:5px; text-decoration: none;" href="add_news_msg.php?id=<? echo $id_msg;?>">تحويل إلى خبر</a>
</td>
</tr>
</table>
</form>
</div>
<?
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
