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
<title>تعديل القسم</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var dal  = $("#dal") .val();
var kind  = $(".kind") .val();
var ds  = $("#ds") .val();
var show  = $(".shown") .val();
var order  = $("#order") .val();
var id_cat  = $("#id_cat") .val();


var s = {
"title":title,
"dal":dal,
"kind":kind,
"ds":ds,
"show":show,
"order":order,
"id_cat":id_cat
}

if(title == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل عنوان القسم</div>').delay(2000).fadeOut();
}
else if(ds == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل وصف القسم</div>').delay(2000).fadeOut();
}
else if(dal == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل الكلمات الدليلية</div>').delay(2000).fadeOut();
}else if (kind == 0){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل نوع القسم</div>').delay(2000).fadeOut();
}else{

$.ajax({
url:'action/update_cat.php',
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
<?

$id_cat      =IsSet($_GET['id'])    ? make_it_safe($_GET['id'])    :Null;

$select = $mysqli->query("SELECT * FROM cats where id='$id_cat' limit 1");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_cat1         = $rows ['id'];
$title_cat         = $rows ['title'];
$dal_cat         = $rows ['dal'];
$kink_cat         = $rows ['kind'];
$ds_cat         = $rows ['ds'];
$show_index_cat         = $rows ['show_index'];
$ord_show_cat         = $rows ['ord_show'];

?>

<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / <a class="link" href="cats.php">التحكم فى الأقسام</a> / تعديل : <? echo $title_cat; ?>
</div>

<div class="hed">تعديل القسم</div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان القسم</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" maxlength="255" value="<? echo $title_cat; ?>" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">وصف القسم</td>
<td class="td2" width="70%">
<textarea id="ds" name="ds" class="textarea"><? echo $ds_cat; ?></textarea>
</td>
</tr>

<tr>
<td class="td1" width="30%">الكلمات الدليليه</td>
<td class="td2" width="70%">
<textarea id="dal" name="dal" class="textarea"><? echo $dal_cat; ?></textarea>
</td>
</tr>

<tr>
<td class="td1" width="30%">طريقة عرض القسم</td>
<td class="td2" width="70%">
<select class="kind" name="kind">
<option <? if($kink_cat == '1') {?> selected="selected" <? } ?> value="1">الطريقة العادية</option>
<option <? if($kink_cat == '2') {?> selected="selected" <? } ?> value="2">قسم فيديو</option>
<option <? if($kink_cat == '3') {?> selected="selected" <? } ?> value="3">مربعات</option>
<option <? if($kink_cat == '4') {?> selected="selected" <? } ?> value="4">الأقسام المهمة</option>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">عرض القسم فى الصفحة الرئيسية</td>
<td class="td2" width="70%">
<select class="shown" name="shown">
<option <? if($show_index_cat == '1') {?> selected="selected" <? } ?> value="1">نعم</option>
<option <? if($show_index_cat == '2') {?> selected="selected" <? } ?> value="2">لا</option>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">ترتيب عرض القسم</td>
<td class="td2" width="70%">
<input size="5" id="order" value="<? echo $ord_show_cat; ?>" name="order" maxlength="5" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" name="id_cat" id="id_cat" value="<? echo $id_cat1; ?>" />
<input type="submit" class="greenbutton" value="تحديث القسم" />
</td>
</tr>
</table>
</form>
</div>
<div style="display: none;" class="showmsg"></div>
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
