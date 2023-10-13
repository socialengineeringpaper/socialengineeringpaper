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
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var pic  = $("#pic") .val();
var ds  = $("#ds") .val();
var min_pic  = $("#min_pic") .val();
var order  = $("#order") .val();
var id_page  = $("#id_page") .val();

var s = {
"title":title,
"pic":pic,
"ds":ds,
"min_pic":min_pic,
"order":order,
"id_page":id_page
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
url:'action/edit_min_page_check.php',
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / تعديل الصفحة
</div>

<?

$id_page_get    =IsSet($_GET['id'])   ? make_it_safe($_GET['id'])   :Null;

$select = $mysqli->query("SELECT * FROM min_page where id='$id_page_get' limit 1");
$num = $select->num_rows;
$rows = $select->fetch_array(MYSQL_ASSOC);
$id_page         = $rows ['id'];
$title_page         = $rows ['title'];
$ds_page         = $rows ['descr'];
$ord_show         = $rows ['ord_show'];
$pic         = $rows ['pic'];
$min_pic         = $rows ['minpic'];
?>
<div class="hed">تعديل الصفحة</div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الصفحة</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" value="<? echo $title_page; ?>" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%"> صورةالصفحة</td>
<td class="td2" width="70%">
<input size="50" id="pic" value="<? echo $pic; ?>" name="pic"type="text" class="inputtext" />
</td>
</tr>


<tr>
<td class="td1" width="30%">الصورة المصغرة</td>
<td class="td2" width="70%">
<input size="50" id="min_pic" value="<? echo $min_pic; ?>" name="min_pic" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">وصف الصفحة</td>
<td class="td2" width="70%">
<textarea id="ds" name="ds" class="textarea"><? echo $ds_page; ?></textarea>
</td>
</tr>

<tr>
<td class="td1" width="30%">ترتيب الصفحة</td>
<td class="td2" width="70%">
<input size="5" id="order" name="order" maxlength="5" value="<? echo $ord_show; ?>" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" value="<? echo $id_page_get; ?>" name="id_page" id="id_page" />
<input type="submit" class="greenbutton" value="تحديث الصفحة" />
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
