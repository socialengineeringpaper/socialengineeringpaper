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
<title>التحكم فى الصفحات</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="../style/css/tipsy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/tipsy.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$(".showaction").tipsy({gravity:'e'});


$(".deletecat") .click(function(){
var id_page = $(this).attr('rel');

var s = {
"id_page":id_page
}
$.ajax({
url:'action/delete_page.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_page+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_page+"]") .fadeOut();
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / التحكم فى الصفحات
</div>

<div class="hed">عرض الصفحات</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<td class="td1" width="85%" align="center">عنوان الصفحة</td>
<td class="td2" width="15%" align="center">تعديل</td>
</tr>
<?php
$select = $mysqli->query("SELECT * FROM pages");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id1         = $rows ['id'];
$title      = $rows ['title'];

?>
<tr rel="<? echo $id1; ?>">
<td class="td1" width="85%" align="center"><? echo $title ; ?></td>
<td class="td2" width="15%" align="center">
<a href="edit_page.php?id=<? echo $id1; ?>"><img src="style/img/edit.gif" class="showaction" title="تعديل" /></a> /
<a rel="<? echo $id1; ?>" class="deletecat" href="#"><img src="style/img/del.gif" class="showaction" title="حذف" /></a>
<span class="loading" rel="<? echo $id1; ?>"></span>
</td>
</tr>

<?
}
?>

</table>
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