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
<title>التحكم فى الكاريكاتير</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="../style/css/tipsy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/tipsy.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$(".showaction").tipsy({gravity:'e'});


$(".deletecat") .click(function(){
var id_comic = $(this).attr('rel');

var s = {
"id_comic":id_comic
}
$.ajax({
url:'action/delete_comic_check.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_comic+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_comic+"]") .fadeOut();
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / حذف كاريكاتير
</div>

<div class="hed">عرض الكاريكاتير</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<td class="td1" width="70%" align="center">عنوان كاريكاتير</td>
<td class="td2" width="15%" align="center">حذف</td>
</tr>
<?php
$select_cats = $mysqli->query("SELECT * FROM comic order by id desc");
$num_cats = $select_cats->num_rows;

while ($rows_cats = $select_cats->fetch_array(MYSQL_ASSOC)){

$id_cat         = $rows_cats ['id'];
$title_cat      = $rows_cats ['title'];
$linkimg     = $rows_cats ['linkimg'];
?>
<tr rel="<? echo $id_cat; ?>">
<td class="td1" width="80%" align="center"><a class="link2" href="../cat-<? echo $id_cat; ?>.html" target="_blank"><? echo $title_cat ; ?></a></td>
<td class="td2" width="20%" align="center">
<a rel="<? echo $id_cat; ?>" class="deletecat" href="#"><img src="style/img/del.gif" class="showaction" title="حذف" /></a>
<span class="loading" rel="<? echo $id_cat; ?>"></span>
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