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
<script type="text/javascript" src="editor/jquery.cleditor.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () { $("#con").cleditor(); });
  </script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var con  = $("#con") .val();
var id_page  = $("#id_page") .val();
var show_index = $(".show_index") .val();
var s = {
"title":title,
"con":con,
"id_page":id_page,
"show_index":show_index
}

if(title == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل عنوان الصفحة</div>').delay(2000).fadeOut();
}
else{

$.ajax({
url:'action/edit_page_check.php',
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
$id_page      =IsSet($_GET['id'])    ? make_it_safe($_GET['id'])    :Null;

$select = $mysqli->query("SELECT * FROM pages where id='$id_page' limit 1");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_1         = $rows ['id'];
$title        = $rows ['title'];
$con        = $rows ['con'];
$show_index        = $rows ['conshow_index'];
?>
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / <a class="link" href="pages.php">التحكم فى الصفحات</a> / تعديل : <? echo $title; ?>
</div>

<div class="hed">تعديل <? echo $title; ?></div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الصفحة</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" value="<? echo $title; ?>" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">ظهور الصفحة</td>
<td class="td2" width="70%">
<select class="show_index" name="show_index">
<option <? if($show_index == 1){ ?> selected="selected" <? } ?> value="1">نعم</option>
<option <? if($show_index == 2){ ?> selected="selected" <? } ?> value="2">لا</option>
</select>
</td>
</tr>

<tr>
<td class="tdall" colspan="2" align="center">
محتوى الصفحة
</td>
</tr>

<tr>
<td class="tdall" colspan="2" align="center">
<div dir="ltr">
<textarea cols="80" id="con" name="con" rows="10"><? echo $con; ?></textarea>
</div>
</td>
</tr>
<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" name="id_page" id="id_page" value="<? echo $id_1; ?>" />
<input type="submit" class="greenbutton" value="تحديث" />
</td>
</tr>
</table>
</form>
</div>
<?
}
?>
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
