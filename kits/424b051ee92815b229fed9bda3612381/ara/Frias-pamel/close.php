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
<title>إغلاق وتشغيل الموقع</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#form") .submit(function(){

var close  = $(".close") .val();
var msgclose   = $("#msgclose") .val();


var s = {
"close":close,
"msgclose":msgclose
}


$.ajax({
url:'action/update_close.php',
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / إغلاق وتشغيل الموقع
</div>

<div class="hed">إغلاق وتشغيل الموقع</div>
<div class="bod">
<form id="form">
<?
$select = $mysqli->query("SELECT * FROM setting WHERE id = '1' LIMIT 1");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_set       = $rows ['id'];
$sitetitle       = $rows ['sitetitle'];
$sitedesc      = $rows ['sitedesc'];
$sitekey      = $rows ['sitekey'];
$sitelink      = $rows ['sitelink'];
$sitepr      = $rows ['sitepr'];
$close      = $rows ['close'];
$close_msg      = $rows ['close_msg'];
?>
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="td1" width="30%">هل تريد إغلاق الموقع</td>
<td class="td2" width="70%">
<select name="close" class="close">
<option <? if($close == 1){?> selected="selected" <? } ?> value="1">نعم</option>
<option <? if($close == 2){?> selected="selected" <? } ?> value="2">لا</option>
</select>
</td>
<tr>
<td class="td1" width="30%">رسالة الإغلاق</td>
<td class="td2" width="70%">
<textarea class="textarea" name="msgclose" id="msgclose"><? echo $close_msg; ?></textarea>
</td>
</tr>
<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="حفظ البينات" />
</td>
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
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>