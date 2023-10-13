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
<title>أضف صورة للصفحة</title>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="editor/jquery.cleditor.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#form').submit(function(){
			$(".showmsg") .show();
				$('.greenbutton').attr('disabled', ''); // disable upload button
				//show uploading message
				$(".showmsg").html('من فضلك انتظر ,, جارى التحميل ...');
				$(this).ajaxSubmit({
					target: '.showmsg',
					success:  afterSuccess //call function after success
				});
				return false;
			});
			return false;
        }); 

		function afterSuccess()  { 
			$('.greenbutton').removeAttr('disabled'); //enable submit button

		} 
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
<a class="link" href="index.php">الصفحة الرئيسية</a> / أضف صورة للصفحة
</div>
<div class="hed">أضف صورة للصفحة</div>
<div class="bod">
<form id="form" action="action/add_min_photo_check.php" method="post" enctype="multipart/form-data">
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="td1" width="30%">عنوان الصورة</td>
<td class="td2" width="70%"><input size="50" name="title" maxlength="255" type="text" class="inputtext" /></td>
</tr>
<tr>
<td class="td1" width="30%">صفحة الصورة</td>
<td class="td2" width="70%">
<select name="minpage">
<option value="0" selected="selected" disabled="disabled" >صفحة الصورة</option>
<?
$select = $mysqli->query("SELECT * FROM min_page");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_cat       = $rows ['id'];
$title_cat       = $rows ['title'];
echo "<option value='".$id_cat."' >".$title_cat."</option>";
}
?>
</select>
</td>
</tr>

<tr>
<td class="td1" width="30%">الصورة</td>
<td class="td2" width="70%">
<input type="file" name="upload"/>
</td>
</tr>
<tr>
<td class="tdall" style="border-bottom: 1px solid #ccc;" colspan="2" align="center">
<input type="submit" class="greenbutton" value="أضف الصورة" />
<input type="reset" class="redbutton" value="إعادة تعيين" />
</td>
</tr>
</table>
</form>
</div>
<br />
<div class="showmsg"></div>
</tr>
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
</body>
</html>
