<?php
if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");
include("includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
$(document).ready(function(){

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
</head>
<body>
<?php
$id_news  = intval(IsSet($_POST['id_news'])  ? make_it_safe($_POST['id_news'])  :Null);
$id_2  = intval(IsSet($_POST['id_2'])  ? make_it_safe($_POST['id_2'])  :Null);

$select_comm = $mysqli->query("SELECT * FROM comment where id_news='$id_news' and id > '$id_2' and show_index = '1' LIMIT 10");
$num_comm = $select_comm->num_rows;

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
?>
<div class="loadcomm"></div>
<div align="center" style="margin-top:-5px;">
<button class="more" rel="<? echo $id_news; ?>" dir="<? echo $id_comm; ?>">Show more comments</button>
</div>
</body>
</html>
