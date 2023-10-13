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
$(function(){

$(".more").click(function(){

$(this)	.hide();
var lastnews = $(this) .attr('id');
var id_cat = $(this).attr('rel');

var s = {
"lastnews":lastnews,
"id_cat":id_cat
}

$.ajax({
url :"more_news.php",
type:'POST',
data :s,
beforeSend: function (){
		$(".load") .html("<img src=\"style/img/load.gif\" alt=\"جارى التحميل ....\" />");
		},
success: function(data){
$(".showmore") .append(data);
$(".load").hide();
}

});

return false;
});

});
</script>

</head>
<body>
<?
$lastnews  = intval(IsSet($_POST['lastnews'])  ? make_it_safe($_POST['lastnews'])  :Null);
$id_cat  = intval(IsSet($_POST['id_cat'])  ? make_it_safe($_POST['id_cat'])  :Null);


$select_slide1 = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat' and id < $lastnews  ORDER BY id DESC LIMIT 10");
$num_slide1 = $select_slide1->num_rows;
while ($rows_slide1 = $select_slide1->fetch_array(MYSQL_ASSOC)){

$id_news_slide2         = $rows_slide1 ['id'];
$title_news_slide1      = $rows_slide1 ['title'];
$pic_news_slide1        = $rows_slide1 ['pic'];
$imgtype_slide1        = $rows_slide1 ['imgtype'];
$news_news_slide1       = $rows_slide1 ['news'];
$time_slide1            = $rows_slide1 ['time'];
$views            = $rows_slide1 ['views'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_slide1, $img);
$img1 = $img[1]; 
?>
<table class="shownewstbl" width="96%" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" width="25%">
<a href="news-<? echo $id_news_slide2; ?>.html">
<?php
if($imgtype_slide1  == 'pic1'){
?>
<img src="<? echo $pic_news_slide1; ?>" class="imgcat" height="100" width="150" />
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<img src="imgnews/<? echo $pic_news_slide1; ?>" class="imgcat" height="100" width="150" />
<?
}
else if($img1){
?>
<img src="<? echo $img1; ?>" class="imgcat" height="100" width="150" />
<?
}
else if($imgtype_slide1  == ""){
?>
<img src="style/img/none_photo.jpg" class="imgcat" height="150" width="100" />
<?
}
?>
</a>
</td>
<td valign="top">
<div class="hedline">
<a href="news-<? echo $id_news_slide2; ?>.html" class="linkcats" title="<? echo $title_news_slide1; ?>"><? echo mb_substr($title_news_slide1, 0, 70, 'utf-8'); ?></a>
</div>
<div class="bodtbl">
<? echo $title_news_slide1; ?>
<div style="font-weight: bold;">
عدد المشاهدات : <? echo $views; ?>
</div>
<span style="color:#666;">نشر منذ <? echo timeBetween($time_slide1,time());?></span>
</div>
</td>
</tr>
</table>
<?
}
?>
<div align="center">
<span class="loading"></span>
<button rel="<? echo $id_cat; ?>" id="<? echo $id_news_slide2; ?>" class="more">عرض المزيد من الأخبار</button>
</div>
</body>
</html>
