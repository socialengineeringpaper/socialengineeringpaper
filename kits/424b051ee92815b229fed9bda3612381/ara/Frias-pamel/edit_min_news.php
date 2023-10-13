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
<title>تعديل خبر</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="editor/jquery.cleditor.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" src="editor/jquery.cleditor.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () { $("#news").cleditor(); });
  </script>
<script type="text/javascript">
$(document).ready(function(){


$("#delete_thisphoto").click(function(){

var id_news = $(this).attr('rel');

var s = {
"id_news":id_news
}

$.ajax({
url:'action/delete_photo.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loadingphoto") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("#delete_thisphoto").hide();
$(".photonow").hide();
$(".imgpic2").show();
}
});

});



$('#form').submit(function(){
			$(".showmsg") .show();
				$('.greenbutton').attr('disable', ''); // disable upload button
				//show uploading message
				$(".showmsg").html('من فضلك انتظر ,, جارى التحميل ...');
				$(this).ajaxSubmit({
					target: '.showmsg',
					success:  afterSuccess //call function after success
				});
				return false;
			});
			return false;
        });

		function afterSuccess()  {
			$('.greenbutton').removeAttr('disabled'); //enable submit button

		}
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
<?
$id_news      =IsSet($_GET['id'])    ? make_it_safe($_GET['id'])    :Null;

$select = $mysqli->query("SELECT * FROM min_news where id='$id_news' limit 1");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_news1         = $rows ['id'];
$title_news      = $rows ['title'];
$pic_news        = $rows ['pic'];
$imgtype        = $rows ['imgtype'];
$news_news       = $rows ['news'];
$time            = $rows ['time'];
$minpage            = $rows ['minpage'];
$show_index            = $rows ['show_index'];
?>
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> /<a class="link" href="news.php">التحكم فى الأخبار</a>/ <? echo $title_news; ?>
</div>

<div class="hed">تعديل : <? echo $title_news; ?></div>
<div class="bod">
<form id="form" action="action/update_min_news.php" method="post" enctype="multipart/form-data">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="td1" width="30%">عنوان الخبر</td>
<td class="td2" width="70%"><input size="50" value="<? echo $title_news; ?>" name="title" maxlength="255" type="text" class="inputtext" /></td>
</tr>

<tr>
<td class="td1" width="30%">صفحة الخبر</td>
<td class="td2" width="70%">
<select name="news_cat">
<?
$select = $mysqli->query("SELECT * FROM min_page");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id_cat       = $rows ['id'];
$title_cat       = $rows ['title'];
?>
<option <? if($news_cat == $id_cat){?> selected="selected" <? } ?> value=" <? echo $id_cat; ?>" ><? echo $title_cat; ?></option>
<?
}
?>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">ظهور الخبر فى السلايد شو</td>
<td class="td2" width="70%">
<select name="show_index">
<option value="1" <? if($show_index == 1){ ?> selected="selected" <? } ?> >نعم</option>
<option value="2" <? if($show_index == 2){ ?> selected="selected" <? } ?> >لا</option>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">صورة الخبر</td>
<td class="td2" width="70%">
رابط : <input type="text" <? if($imgtype == "pic1"){ ?> value="<? echo $pic_news; ?>" <? } ?> class="inputtext" size="50" name="pic1" />
<br />
أو
<br />
<? if($imgtype == "pic2"){
?>
<div class="loadingphoto"></div>
<img class="photonow" src="../imgnews/<? echo $pic_news; ?>" height="100" width="100" />
<div class="imgpic2" style="display: none;">
رفع صورة : <input type="file" name="pic2" />
</div>
<br />
<div id="delete_thisphoto" style="width: 200px;" rel="<? echo $id_news; ?>" class="redbutton">حذف هذة الصورة ورفع صورة أخرى</div>
<?
}else{
?>
رفع صورة : <input type="file" name="pic2" />
<?
}
?>
<br />
<br />
إذا لم يتم تحديد صورة ستأخذ أول صورة بالموضوع كصورة للخبر وإذا لم يوجد صور بالموضوع سوف يعطى صورة مكتوب عليها لا يوجد صورة للخبر.
</td>
</tr>

<tr>
<td class="tdall" colspan="2" align="center">
نص الخبر

</td>
</tr>

<tr>
<td class="tdall" colspan="2" align="center">
<div dir="ltr">
<textarea class="ckeditor" cols="80" id="news" name="news" rows="10"><? echo $news_news; ?></textarea>
</div>
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="hidden" name="id_news" value="<? echo $id_news1; ?>" />
<input type="submit" class="greenbutton" value="تحديث الخبر" />
</td>
</tr>
</table>
</form>
<br />
<div style="display: none;" class="showmsg"></div>
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