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
<title>التحكم فى الأخبار</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="../style/css/tipsy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/tipsy.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$(".showaction").tipsy({gravity:'e'});


$(".deletenews") .click(function(){
var id_news = $(this).attr('rel');

var s = {
"id_news":id_news
}
$.ajax({
url:'action/delete_min_news.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_news+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_news+"]") .fadeOut();
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / التحكم فى الأخبار
</div>

<div class="hed">بحث عن خبر</div>
<div class="bod">
<form action="search_min_news.php" method="post">
<div align="center">
أكتب اسم الخبر :
<input type="text" placeholder="بحث عن خبر ..." class="inputtext" size="50" name="search" />
<input type="submit" class="greenbutton" value="بحث" />
</div>
</form>
</div>

<div class="hed">عرض الأخبار</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<tr>
<td class="td1" width="60%" align="center">عنوان الخبر</td>
<td class="td2" width="15%" align="center">بواسطة</td>
<td class="td2" width="10%" align="center">مشاهدات</td>
<td class="td2" width="10%" align="center">تعديل</td>
</tr>
<?php
$select_news = $mysqli->query("SELECT * FROM min_news ORDER BY id DESC LIMIT 20");
$num_news = $select_news->num_rows;

while ($rows_news = $select_news->fetch_array(MYSQL_ASSOC)){

$id_news         = $rows_news ['id'];
$title_news      = $rows_news ['title'];
$pic_news        = $rows_news ['pic'];
$imgtypenews     = $rows_news ['imgtype'];
$news_news       = $rows_news ['news'];
$time_news       = $rows_news ['time'];
$userpost       = $rows_news ['userpost'];
$views       = $rows_news ['views'];
?>
<tr rel="<? echo $id_news; ?>">
<td class="td1" width="60%" align="center">
<a href="../minnews-<? echo $id_news; ?>.html" class="link2" target="_blank"><? echo $title_news; ?></a>
</td>
<td class="td2" width="15%" align="center"><? echo $userpost; ?></td>
<td class="td2" width="10%" align="center"><? echo $views; ?></td>
<td class="td2" width="10%" align="center">
<a href="edit_min_news.php?id=<? echo $id_news; ?>"><img src="style/img/edit.gif" class="showaction" title="تعديل" /></a> /
<a rel="<? echo $id_news; ?>" class="deletenews" href="#"><img src="style/img/del.gif" class="showaction" title="حذف" /></a>
<span class="loading" rel="<? echo $id_news; ?>"></span>
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
