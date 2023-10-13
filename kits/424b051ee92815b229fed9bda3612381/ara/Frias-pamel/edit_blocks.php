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
<title>إضافة بلوك جديد</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var con  = $("#con") .val();
var index  = $(".index") .val();
var place  = $(".place") .val();
var id_block = $("#id_block") .val();

var s = {
"title":title,
"con":con,
"index":index,
"place":place,
"id_block":id_block
}

if(title == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل عنوان البلوك</div>').delay(2000).fadeOut();
}
else if(con == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل محتوى البلوك</div>').delay(2000).fadeOut();
}else{

$.ajax({
url:'action/update_block.php',
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
$id_block      =IsSet($_GET['id'])    ? make_it_safe($_GET['id'])    :Null;

$select = $mysqli->query("SELECT * FROM blocks where id='$id_block' limit 1");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_1         = $rows ['id'];
$title        = $rows ['title'];
$con        = $rows ['con'];
$index        = $rows ['indexi'];
$place        = $rows ['place'];
?>
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / <a class="link" href="blocks.php">تعديل البلوكات</a> /  تعديل : <? echo $title; ?>
</div>

<div class="hed">تعديل <? echo $title; ?></div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان البلوك</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" maxlength="255" type="text" value="<? echo $title; ?>" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">محتوى البلوك</td>
<td class="td2" width="70%">
<textarea id="con" name="con" class="textarea"><? echo $con; ?></textarea>
</td>
</tr>

<tr>
<td class="td1" width="30%">ظهور البلوك</td>
<td class="td2" width="70%">
<select class="index" name="index">
<option <? if($index == 1){?> selected="selected" <? } ?> value="1">فى الرئيسية فقط</option>
<option <? if($index == 2){?> selected="selected" <? } ?> value="2">فى جميع الصفحات</option>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">المكان</td>
<td class="td2" width="70%">
<select class="place" name="place">
<option <? if($place == 1){?> selected="selected" <? } ?> value="1">أعلى القائمة</option>
<option <? if($place == 2){?> selected="selected" <? } ?> value="2">أسفل القائمة</option>
</select>
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" name="id_block" id="id_block" value="<? echo $id_1; ?>" />
<input type="submit" class="greenbutton" value="تحديث" />
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
