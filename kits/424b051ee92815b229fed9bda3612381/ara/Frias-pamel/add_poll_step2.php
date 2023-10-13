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

$title  =IsSet($_POST['title'])   ? make_it_safe($_POST['title'])   :Null;
$agwba  = intval (IsSet($_POST['agwba'])   ? make_it_safe($_POST['agwba'])   :Null);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title>إضافة استطلاع رأى - الخطوة الثانية</title>
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / <a class="link" href="add_poll.php">إضافة استطلاع رأى</a> / الخطوة الثانية
</div>

<div class="hed">إضافة استطلاع رأى</div>
<div class="bod">
<form action="add_poll_step3.php" method="post">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الأستطلاع</td>
<td class="td2" width="70%">
<input size="50" value="<? echo $title; ?>" id="title" name="title" maxlength="255" type="text" class="inputtext" />
</td>
</tr>
<?php
for($i=1; $i<=$agwba; $i++) {
?>
<tr>
<td class="td1" width="30%">إجابة الأستطلاع رقم <? echo $i; ?></td>
<td class="td2" width="70%">
<input size="50" name="<? echo $i; ?>" maxlength="255" type="text" class="inputtext" />
</td>
</tr>
<?
}
?>
<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" id="agwba" name="agwba" value="<? echo $agwba; ?>" />
<input type="submit" class="greenbutton" value="الخطوة التالية" />
</td>
</tr>
</table>
</form>
</div>
<div style="display: none;" class="showmsg"></div>
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