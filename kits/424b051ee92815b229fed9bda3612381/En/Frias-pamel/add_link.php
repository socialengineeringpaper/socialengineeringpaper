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
<title>إضافة رابط جديد</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#sendform") .submit(function(){

var title  = $("#title") .val();
var link1  = $("#link1") .val();

var s = {
"title":title,
"link1":link1
}

if(title == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل عنوان الرابط</div>').delay(2000).fadeOut();
} else if(link1 == ""){
$(".showmsg") .fadeIn().html('<div class="msgno">أدخل الرابط</div>').delay(2000).fadeOut();
}
else{

$.ajax({
url:'action/add_link_check.php',
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / إضافة رابط جديد
</div>

<div class="hed">إضافة رابط جديد</div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">عنوان الرابط</td>
<td class="td2" width="70%">
<input size="50" id="title" name="title" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">الرابط</td>
<td class="td2" width="70%">
<input size="50" id="link1" value="http://" name="link1" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="إضافة الرابط" />
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
