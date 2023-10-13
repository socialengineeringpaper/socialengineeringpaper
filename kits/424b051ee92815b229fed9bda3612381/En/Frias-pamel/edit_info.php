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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title>تعديل بينات حسابك</title>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){
$("#sendform") .submit(function(){

var username  = $("#username") .val();
var pass  = $("#pass") .val();
var pass1  = $("#pass1") .val();
var repass1  = $("#repass1") .val();

var s = {
"username":username,
"pass":pass,
"pass1":pass1,
"repass1":repass1
}

$.ajax({
url:'action/edit_info_check.php',
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
<? include("includes/hed.php"); ?>
<div id="body">
<table width="100%" cellpadding="0" cellspacing="0" align="center" border="0">
<tr>
<td valign="top" width="25%">
<? include("includes/menu.php"); ?>
</td>
<td valign="top" width="75%">
<div id="top">
<a class="link" href="index.php">الصفحة الرئيسية</a> / تعديل بينات حسابك
</div>
<div class="hed">تعديل بينات حسابك</div>
<div class="bod">
<form id="sendform">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="30%">اسم المستخدم</td>
<td class="td2" width="70%">
<input size="50" id="username" value="<? echo $username; ?>" name="username" maxlength="255" type="text" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">كلمة المرور القديمة</td>
<td class="td2" width="70%">
<input size="30" id="pass" name="pass" maxlength="255" type="password" placeholder="كلمة المرور القديمة" class="inputtext" />
</td>
</tr>

<tr>
<td class="td1" width="30%">كلمة المرور الجديدة</td>
<td class="td2" width="70%">
<input size="30" id="pass1" name="pass1" maxlength="255" type="password" placeholder="كلمة المرور الجديدة" class="inputtext" />
<input size="30" id="repass1" name="repass1" maxlength="255" type="password" placeholder="إعادة كلمة المرور" class="inputtext" />
</td>
</tr>

<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="حفظ البينات" />
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