<? include("config.php"); 
$id_news = $_GET['id_news'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.elastic.js"></script>
<script type="text/javascript">

$("#comment").elastic().css("height","30px");

$(function(){

$("#add_comment") .submit(function(){

var name  = $("#name") .val();
var mail  = $("#mail") .val();
var comment  = $("#comment") .val();
var id_news  = $("#id_news") .val();


var s  = {
"name":name,
"mail":mail,
"comment":comment,
"id_news":id_news
}

$.ajax({
url:'add_comment.php',
type:'post',
data:s,
beforeSend: function (){
		$(".loadingcomm") .html("<img src=\"style/img/load.gif\" alt=\"جارى التحميل ....\" />");
		},
success:function(data){
$(".loadingcomm").html(data);
}
});


return false;
});

$(".more").click(function(){
$(this)	.hide();
var id_news = $(this).attr('rel');
var id_2 = $(this).attr('dir');

var s = {
"id_news":id_news,
"id_2":id_2
}
if(id_2){

$.ajax({
url :"more_comment.php",
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
<style type="text/css">
.showcomm {
	padding: 5px;
	border-bottom: solid 1px #ccc;
	margin-bottom: 5px;
}
.commname {
	font-weight: bold;
}
.comm {}
.hedcomm {
	font-family: newb;
	font-size: 14px;
	padding: 5px;
	border-bottom: solid 1px #ccc;
}
</style>
</head>
<body>
<?
$select_comm1 = $mysqli->query("SELECT * FROM comment where id_news='$id_news' and show_index = '1'");
$num_comm1 = $select_comm1->num_rows;
?>

<?php
$select_comm = $mysqli->query("SELECT * FROM comment where id_news='$id_news' and show_index = '1' LIMIT 5");
$num_comm = $select_comm->num_rows;
?>
<div class="hedcomm">التعليقات (<? echo $num_comm1;?>)</div>
<?
if($num_comm == 0){
echo "لا يوجد تعليقات على الخبر";
}

while ($rows_comm = $select_comm->fetch_array(MYSQL_ASSOC)){
$id_comm         = $rows_comm ['id'];
$name_comm      = $rows_comm ['names'];
$comment      = $rows_comm ['comment'];
?>
<table class="showcomm" align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width=" 10%" valign="top"><img src="style/img/avatar.png" height="50" width="50" /></td>
<td width=" 90%" valign="top">
<div class="commname"><? echo $name_comm; ?></div> 
<div class="comm"><? echo $comment; ?></div> 
</td>
</tr>
</table>
<?
}
if($num_comm1 > 5){
?>
<div class="showmorecomm"></div>
<div class="loadcomm"></div>
<div align="center" style="margin-top:-5px;">
<button class="more" rel="<? echo $id_news; ?>" dir="<? echo $id_comm; ?>">عرض المزيد من التعليقات</button>
</div>
<?
}
?>
<div class="hedcomm">أضف تعليق</div>
<form id="add_comment">
<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width=" 30%" style="padding: 3px;">اسمك : </td>
<td width=" 70%" style="padding: 3px;"><input type="text" class="inputtext" name="name" id="name" size="50" /></td>
</tr>
<tr>
<td width=" 30%" style="padding: 3px;">بريدك الألكترونى : </td>
<td width=" 70%" style="padding: 3px;"><input type="text" class="inputtext" name="mail" id="mail" size="50" /></td>
</tr>
<tr>
<td width=" 30%" style="padding: 3px;">التعليق : </td>
<td width=" 70%" style="padding: 3px;">
<textarea placeholder="تعليقك ..." class="textarea" name="comment" maxlength="500" id="comment"></textarea>
</td>
</tr>
<tr>
<td width=" 100%" style="padding: 3px;" colspan="2" align="center">
<input type="hidden" value="<? echo $id_news; ?>" name="id_news" id="id_news" />
<input type="submit" style=" font-family: newb; font-size: 14px; text-shadow: 1px 1px 3px #333;" class="small color blue button" value="تعليق" />
</td>
</tr>
</table>
</form>
<br />
<div class="loadingcomm"></div>
</body>
</html>
