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
<title>أكواد html فى الموقع</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){

$("#form") .submit(function(){

var header  = $("#header") .val();
var bottomheader   = $("#bottomheader") .val();
var topfooter   = $("#topfooter") .val();
var rightnews    = $("#rightnews") .val();
var leftnews     = $("#leftnews") .val();
var bottomnews     = $("#bottomnews") .val();




var s = {
"header":header,
"bottomheader":bottomheader,
"topfooter":topfooter,
"rightnews":rightnews,
"leftnews":leftnews,
"bottomnews":bottomnews
}


$.ajax({
url:'action/update_html.php',
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
<a class="link" href="index.php">الصفحة الرئيسية</a> /أكواد html فى الموقع
</div>

<div class="hed">أكواد html فى الموقع</div>
<div class="bod">
<form id="form">
<?
$select = $mysqli->query("SELECT * FROM htmlcode WHERE id = '1' LIMIT 1");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_html              = $rows ['id'];
$html_header          = $rows ['header'];
$html_bottomheader    = $rows ['bottomheader'];
$html_topfooter       = $rows ['topfooter'];
$html_rightnews       = $rows ['rightnews'];
$html_leftnews        = $rows ['leftnews'];
$html_bottomnews      = $rows ['bottomnews'];
?>
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
يرجى وضع الأكواد بحذر حتى لا تتعارض مع الموقع
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html فى الهيدر جانب اللوجو</td>
<td class="td2" width="70%">
<textarea class="textarea" name="header" id="header"><? echo $html_header; ?></textarea>
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html اسفل الهيدر</td>
<td class="td2" width="70%">
<textarea class="textarea" name="bottomheader" id="bottomheader"><? echo $html_bottomheader; ?></textarea>
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html أعلى الفوتر</td>
<td class="td2" width="70%">
<textarea class="textarea" name="topfooter" id="topfooter"><? echo $html_topfooter; ?></textarea>
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html يمين الخبر</td>
<td class="td2" width="70%">
<textarea class="textarea" name="rightnews" id="rightnews"><? echo $html_rightnews; ?></textarea>
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html يسار الخبر</td>
<td class="td2" width="70%">
<textarea class="textarea" name="leftnews" id="leftnews"><? echo $html_leftnews; ?></textarea>
</td>
</tr>
<tr>
<td class="td1" width="30%">كود html أسفل الخبر</td>
<td class="td2" width="70%">
<textarea class="textarea" name="bottomnews" id="bottomnews"><? echo $html_bottomnews; ?></textarea>
</td>
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
