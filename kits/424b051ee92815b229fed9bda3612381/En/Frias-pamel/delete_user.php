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
<title>حذف ناشر</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="../style/css/tipsy.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/tipsy.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$(".showaction").tipsy({gravity:'e'});


$(".deletecat") .click(function(){
var id_user = $(this).attr('rel');

var s = {
"id_user":id_user
}
$.ajax({
url:'action/delete_user_check.php',
type:'POST',
data:s,
beforeSend: function (){
		$(".loading[rel="+id_user+"]") .html("<img src=\"../style/img/load.gif\" alt=\"Loading ....\" />");
		},
success:function(data){
$("tr[rel="+id_user+"]") .fadeOut();
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / حذف ناشر
</div>

<div class="hed">عرض الناشرين</div>
<div class="bod">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">

<td class="td1" width="85%" align="center">اسم الناشر</td>
<td class="td2" width="15%" align="center">حذف</td>
</tr>
<?php
$select = $mysqli->query("SELECT * FROM users");
$num = $select->num_rows;

while ($rows = $select->fetch_array(MYSQL_ASSOC)){

$id1         = $rows ['id'];
$username      = $rows ['username'];

?>
<tr rel="<? echo $id1; ?>">
<td class="td1" width="85%" align="center"><? echo $username ; ?></td>
<td class="td2" width="15%" align="center">
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