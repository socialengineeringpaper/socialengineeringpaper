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
<title>لوحة التحكم</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
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
الصفحة الرئيسية
</div>

<?
$select_comm = $mysqli->query("SELECT * FROM comment where show_index = '2'");
$num_comm = $select_comm->num_rows;

$select_msg = $mysqli->query("SELECT * FROM msgs where shown = '2'");
$num_msg = $select_msg->num_rows;

if($num_msg > 0){
?>
<br />
<div class="msgnt">
يوجد <? echo $num_msg; ?> رسالة جديدة <a href="msgs.php" class="link2">اضغط هنا لرؤيتهم</a>
</div>
<br />
<?
}
?>
<br />
<?
if($num_comm > 0){
?>
<br />
<div class="msgnt">
يوجد <? echo $num_comm; ?> تعليق بانتظار الموافقة <a href="comments.php" class="link2">اضغط هنا لرؤيتهم</a>
</div>
<br />
<?
}
?>
<div class="hed">عن الأسكربت</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="td1" width="30%">اسم الأسكربت</td>
<td class="td2" width="70%">سكربت شركة الفيض للمقاولات العامة المحدودة</td>
</tr>
<tr>
<td class="td1" width="30%">برمجة وتصميم</td>
<td class="td2" width="70%">د . فراس الغزي</td>
</tr>
<tr>
  <td class="td1">الشركة المبرمجة</td>
  <td class="td2">شركة الجنوب هوست</td>
</tr>
<tr>
<td class="td1" width="30%">رقم الإصدار</td>
<td class="td2" width="70%">الإصدار الأول v 1.0</td>
</tr>
</table>
</div>

<div class="hed">أكثر الأخبار مشاهدة</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="60%" align="center">عنوان الخبر</td>
<td class="td2" width="15%" align="center">بواسطة</td>
<td class="td2" width="10%" align="center">مشاهدات</td>
</tr>
<?php
$select_news = $mysqli->query("SELECT * FROM news ORDER BY views DESC LIMIT 20");
$num_news = $select_news->num_rows;

while ($rows_news = $select_news->fetch_array(MYSQL_ASSOC)){

$id_news         = $rows_news ['id'];
$title_news      = $rows_news ['title'];
$pic_news        = $rows_news ['pic'];
$imgtypenews     = $rows_news ['imgtype'];
$news_news       = $rows_news ['news'];
$time_news       = $rows_news ['time'];
$userpost       = $rows_news ['userpost'];
$views       = $rows_news ['views'];
?>
<tr>
<td class="td1" width="60%" align="center">
<a href="../news-<? echo $id_news; ?>.html" class="link2" target="_blank"><? echo $title_news; ?></a>
</td>
<td class="td2" width="15%" align="center"><? echo $userpost; ?></td>
<td class="td2" width="10%" align="center"><? echo $views; ?></td>
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
<? include("includes/footer.php"); ?>
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>