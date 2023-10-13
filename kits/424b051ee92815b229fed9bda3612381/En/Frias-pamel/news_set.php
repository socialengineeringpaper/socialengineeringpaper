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
<title>إعدادات الأخبار</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#form") .submit(function(){

var news_df  = $(".news_df") .val();
var comment_mode  = $(".comment_mode") .val();
var new_news  = $(".new_news") .val();
var new_comm  = $(".new_comm") .val();



var s = {
"news_df":news_df,
"comment_mode":comment_mode,
"new_news":new_news,
"new_comm":new_comm
}


$.ajax({
url:'action/update_news_set.php',
type:'post',
data:s,
beforeSend: function (){
		$(".showmsg") .show();
		$(".showmsg") .html("انتظر جارى التحميل....");
		},
success:function(data){
$(".showmsg").html(data);
}
});

return false;
});

});
</script>
</head>
<body>
<?
include("includes/hed.php"); 
?>
<div id="body">
<table width="100%" cellpadding="0" cellspacing="0" align="center" border="0">
<tr>
<td valign="top" width="25%">
<? include("includes/menu.php"); ?>
</td>
<td valign="top" width="75%">
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / إعدادات الأخبار
</div>

<div class="hed"> إعدادات الأخبار</div>
<div class="bod">
<form id="form">
<?
$select = $mysqli->query("SELECT * FROM news_page WHERE id = '1' LIMIT 1");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_set        = $rows ['id'];
$news_df       = $rows ['news_df'];
$comment_mode  = $rows ['comment_mode'];
$new_news      = $rows ['new_news'];
$new_comm      = $rows ['new_comm'];
?>
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="td1" width="30%">قسم الخبر الأفتراضى</td>
<td class="td2" width="70%">
<select name="news_df" class="news_df">
<?
$select = $mysqli->query("SELECT * FROM cats");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_cat       = $rows ['id'];
$title_cat       = $rows ['title'];
?>
<option <? if($news_df == $id_cat){?> selected="selected" <? } ?> value='<? echo $id_cat; ?>' ><? echo $title_cat; ?></option>
<?
}
?>
</select>
هو قسم يتم تحديدة اوتوماتك إذا لم يتم تحديد قسم عند إضافة الخبر
</td>
</tr>

<tr>
<td class="td1" width="30%"> طريقة عرض الكومنتات </td>
<td class="td2" width="70%">
<select name="comment_mode" class="comment_mode">
<option value="1" <? if($comment_mode == 1){ ?> selected="selected" <? } ?> >الطريقة الأفقية</option>
<option value="2" <? if($comment_mode == 2){ ?> selected="selected" <? } ?> >الطريقة الرأسية</option>
</select>
</td>

<tr>
<td class="td1" width="30%">عرض الأخبار الأكثر مشاهدة على حسب</td>
<td class="td2" width="70%">
<select name="new_news" class="new_news">
<option value="1" <? if($new_news == 1){ ?> selected="selected" <? } ?> >اليوم</option>
<option value="2" <? if($new_news == 2){ ?> selected="selected" <? } ?> >دائما</option>
</select>
</td>


<tr>
<td class="td1" width="30%">عرض الأخبار الأكثر تعليقا على حسب</td>
<td class="td2" width="70%">
<select name="new_comm" class="new_comm">
<option value="1" <? if($new_comm == 1){ ?> selected="selected" <? } ?> >اليوم</option>
<option value="2" <? if($new_comm == 2){ ?> selected="selected" <? } ?> >دائما</option>
</select>
</td>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="حفظ البينات" />
</td>
</tr>
</table>
<?
}
?>
</form>
<br />
<div style="display: none;" class="showmsg"></div>
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
