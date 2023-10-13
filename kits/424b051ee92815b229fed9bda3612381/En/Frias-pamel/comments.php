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
<title>تعليقات قيد الموافقة</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="../style/css/tipsy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/tipsy.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$(".showaction").tipsy({gravity:'e'});


$(".greenbutton") .click(function(){
var id_comm = $(this).attr('rel');

var s = {
"id_comm":id_comm
}


$.ajax({
url:'action/accept_comm.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_comm+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_comm+"]") .fadeOut();

}
});
return false;
});

$(".redbutton") .click(function(){
var id_comm = $(this).attr('rel');

var s = {
"id_comm":id_comm
}
$.ajax({
url:'action/delete_comm.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_comm+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_comm+"]") .fadeOut();
}
});

return false;
});


$(".morecomment").click(function(){
$(this)	.hide();

var id_comm = $(this).attr('rel');

var s = {
"id_comm":id_comm
}
if(id_comm){

$.ajax({
url :"action/more_comment.php",
type:'POST',
data :s,
beforeSend: function (){
		$(".loadcomm") .html("<img src=\"style/img/load.gif\" alt=\"loading ....\" />");
		},
success: function(data){
$(".showmorecomm") .append(data);
$(".loadcomm").hide();
}

});

}else{
$(".more").hide();
}
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / تعليقات قيد الموافقة
</div>

<div class="hed">تعليقات قيد الموافقة</div>
<div class="bod">
<?php
$select_comm = $mysqli->query("SELECT * FROM comment where show_index = '2' LIMIT 20");
$num_comm = $select_comm->num_rows;

if($num_comm == 0){
?>
<div class="msgno">لا يوجد تعليقات بانتظار الموافقة</div>
<br />
<?
}else{

?>
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="50%" align="center">التعليق</td>
<td class="td2" width="25%" align="center">بواسطة</td>
<td class="td2" width="25%" align="center">&nbsp;</td>
</tr>
<?

while ($rows_comm = $select_comm->fetch_array(MYSQL_ASSOC)){

$id_comm         = $rows_comm ['id'];
$name_comm      = $rows_comm ['names'];
$usermail        = $rows_comm ['usermail'];
$comment     = $rows_comm ['comment'];
$show_index       = $rows_comm ['show_index'];
$id_news       = $rows_comm ['id_news'];

?>
<tr rel="<? echo $id_comm; ?>">
<td class="td1" width="50%" align="center">
<a href="../news-<? echo $id_news; ?>.html" class="link" target="_blank"><? echo $comment; ?></a>
</td>
<td class="td2" width="25%" align="center">
<? echo $name_comm; ?>
<br />
<? echo $usermail; ?>
</td>
<td class="td2" width="25%" align="center">
<button rel="<? echo $id_comm; ?>" class="greenbutton">موافقة</button>
<button rel="<? echo $id_comm; ?>" class="redbutton">رفض</button>
<span class="loading" rel="<? echo $id_comm; ?>"></span>
</td>
</tr>
<?
}
?>

</table>
<div class="showmorecomm"></div>
<span class="loadcomm"></span>
<div align="center">
<button rel="<? echo $id_comm; ?>" class="morecomment">عرض المزيد من التعليقات</button>
<?
}
?>
</div>
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
