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
<title>إضافة صفحة تفاعلية</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var pic  = $("#pic") .val();
var ds  = $("#ds") .val();
var min_pic  = $("#min_pic") .val();
var order  = $("#order") .val();

var s = {
"title":title,
"pic":pic,
"ds":ds,
"min_pic":min_pic,
"order":order
}

if(title == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل عنوان الصفحة</div>').delay(2000).fadeOut();
}
else if(ds == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل وصف الصفحة</div>').delay(2000).fadeOut();
}
else if(pic == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل صورة الصفحة</div>').delay(2000).fadeOut();
}
else if(min_pic == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل صورة الصفحة المصغرة</div>').delay(2000).fadeOut();
}
else if (order == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل نوع القسم</div>').delay(2000).fadeOut();
}else{

$.ajax({
url:'action/add_min_page_check.php',
type:'post',
data:s,
beforeSend: function (){
		$(".showmsg") .show();
		$(".showmsg") .html("انتظر جارى التحميل....");
		},
success:function(data){
$(".showmsg").html(data);
$(".hed") .hide();
$(".bod") .hide();
}
});

}

return false;
});

});
</script>
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / إضافة صفحة تفاعلية
</div>

<div class="hed">إضافة صفحة تفاعلية</div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الصفحة</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%"> صورةالصفحة</td>
<td class="td2" width="70%">
<input size="50" id="pic" name="pic"type="text" class="inputtext" />
</td>
</tr>


<tr>
<td class="td1" width="30%">الصورة المصغرة</td>
<td class="td2" width="70%">
<input size="50" id="min_pic" name="min_pic" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">وصف الصفحة</td>
<td class="td2" width="70%">
<textarea id="ds" name="ds" class="textarea"></textarea>
</td>
</tr>

<tr>
<td class="td1" width="30%">ترتيب الصفحة</td>
<td class="td2" width="70%">
<input size="5" id="order" name="order" maxlength="5" value="1" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="إضافة الصفحة" />
<input type="reset" class="redbutton" value="إعادة تعيين" />
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
