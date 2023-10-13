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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>التحكم فى الأخبار</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
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
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / الرسايل جميع
</div>



<div class="hed">الرسايل جميع</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="80%" align="center">عنوان الرسالة</td>
<td class="td2" width="20%" align="center">بواسطة</td>
</tr>
<?php
$select_news = $mysqli->query("SELECT * FROM msgs WHERE shown='1' ORDER BY id DESC");
$num_news = $select_news->num_rows;

while ($rows_news = $select_news->fetch_array(MYSQL_ASSOC)){

$id_msg         = $rows_news ['id'];
$yourname      = $rows_news ['yourname'];
$msgmail        = $rows_news ['msgmail'];
$msgname     = $rows_news ['msgname'];
$msg       = $rows_news ['msg'];
$shown       = $rows_news ['shown'];
?>
<tr rel="<? echo $id_news; ?>">
<td class="td1" width="80%" align="center">
<a href="show_msg.php?id=<? echo $id_msg; ?>" class="link2"><? echo $msgname; ?></a>
</td>
<td class="td2" width="20%" align="center"><? echo $yourname; ?></td>
</tr>
<?
}
?>
</table>
</div>
</td>
</tr>
</table>
</div>

</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>
