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
<title>إعدادات الموقع</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#form") .submit(function(){

var sitetitle  = $("#sitetitle") .val();
var sitedesc   = $("#sitedesc") .val();
var sitelink   = $("#sitelink") .val();
var sitekey    = $("#sitekey") .val();
var sitepr     = $("#sitepr") .val();



var s = {
"sitetitle":sitetitle,
"sitedesc":sitedesc,
"sitekey":sitekey,
"sitelink":sitelink,
"sitepr":sitepr
}


$.ajax({
url:'action/update_set.php',
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / إعدادات الموقع
</div>

<div class="hed">إعدادات الموقع</div>
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
<td class="td1" width="30%">عنوان الموقع</td>
<td class="td2" width="70%">
<input size="50" value="<? echo $sitetitle; ?>" name="sitetitle" id="sitetitle" maxlength="255" type="text" class="inputtext" />
</td>
</tr>
<tr>
<td class="td1" width="30%">وصف الموقع</td>
<td class="td2" width="70%">
<input size="50" value="<? echo $sitedesc; ?>" name="sitedesc" id="sitedesc" maxlength="255" type="text" class="inputtext" />
</td>
</tr>
<tr>
<td class="td1" width="30%">رابط الموقع</td>
<td class="td2" width="70%"><input size="50" value="<? echo $sitelink; ?>" name="sitelink" id="sitelink" maxlength="255" type="text" class="inputtext" /></td>
</tr>
<tr>
<td class="td1" width="30%">الكلمات الدليلية</td>
<td class="td2" width="70%"><textarea name="sitekey" id="sitekey" class="textarea"><? echo $sitekey; ?></textarea></td>
</tr>
<tr>
<td class="td1" width="30%">نص الحقوق</td>
<td class="td2" width="70%"><input size="50" value="<? echo $sitepr; ?>" name="sitepr" id="sitepr" maxlength="255" type="text" class="inputtext" /></td>
</tr>
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
