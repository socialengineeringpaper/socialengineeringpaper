<?php
include("includes/config.php");
$id_page_get    = intval (IsSet($_GET['id'])   ? make_it_safe($_GET['id'])   :Null);

$select_set = $mysqli->query("SELECT * FROM  setting where id='1'");
$rows_st = $select_set->fetch_array(MYSQL_ASSOC);

$sitetitle = $rows_st['sitetitle'];
$sitedesc  = $rows_st['sitedesc'];
$sitekey   = $rows_st['sitekey'];
$sitelink  = $rows_st['sitelink'];
$sitepr    = $rows_st['sitepr'];
$siteclose = $rows_st['close'];
$closemsg  = $rows_st['close_msg'];
$links  = $rows_st['link'];

$host = $_SERVER['HTTP_HOST'];
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);

if($links == md5(sha1($matches[0]))){
$select_html = $mysqli->query("SELECT * FROM  htmlcode where id='1'");
$rows_html = $select_html->fetch_array(MYSQL_ASSOC);

$header_html = $rows_html['header'];
$bottomheader_html = $rows_html['bottomheader'];
$topfooter_html = $rows_html['topfooter'];
$rightnews_html = $rows_html['rightnews'];
$leftnews_html = $rows_html['leftnews'];
$bottomnews_html = $rows_html['bottomnews'];


$select = $mysqli->query("SELECT * FROM min_page where id='$id_page_get' limit 1");
$num = $select->num_rows;
$rows = $select->fetch_array(MYSQL_ASSOC);
$id_page         = $rows ['id'];
$title_page         = $rows ['title'];
$ds_page         = $rows ['descr'];
$ord_show         = $rows ['ord_show'];
$pic         = $rows ['pic'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="style/css/buttons.css" rel="stylesheet" type="text/css" />
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<link href="style/css/slideshow1.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<? echo $ds_page; ?>" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ticker.js"></script>
<script src="js/site.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
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
url :"more_min_news.php",
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

<title><? echo $title_page; ?></title>
</head>
<body>
<?
if($siteclose == "1"){
  echo $closemsg;
}else{
?>
<div id="mynews">
<div align="center">
<img src="<? echo $pic; ?>" />
</div>
<div id="navbar">
<ul>
	<li id="firstmenu">&nbsp;</li>
<li><a href='index.php' class='link' title='الرئيسية'>الرئيسية</a></li>
<li><a href='photos.php?id=<? echo $id_page_get; ?>' class='link' title='معرض الصور'>معرض الصور</a></li>
	<li id="lastmenu">&nbsp;</li>
</ul>
</div>
<div id="body">

<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" width="70%">
<div id="news">
<div class="hednews">جديد الأخبار فى <? echo $title_page; ?></div>
<div id="featured" >
<ul class="ui-tabs-nav">
<?php
$select_slide1 = $mysqli->query("SELECT * FROM min_news where show_index='1' and minpage = '$id_page_get' ORDER BY id DESC LIMIT 4");
$num_slide1 = $select_slide1->num_rows;
while ($rows_slide1 = $select_slide1->fetch_array(MYSQL_ASSOC)){

$id_news_slide1         = $rows_slide1 ['id'];
$title_news_slide1      = $rows_slide1 ['title'];
$pic_news_slide1        = $rows_slide1 ['pic'];
$imgtype_slide1        = $rows_slide1 ['imgtype'];
$news_news_slide1       = $rows_slide1 ['news'];
$time_slide1            = $rows_slide1 ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_slide1, $img);
$img1 = $img[1]; 
?>
<li class="ui-tabs-nav-item" id="nav-fragment-1">
<a href="#fragment-<? echo $id_news_slide1; ?>">
<?php
if($imgtype_slide1  == 'pic1'){
?>
<img src="water.php?image=<? echo $pic_news_slide1; ?>" height="50" width="80" />
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="50" width="80" />
<?
}
else if($img1){
?>
<img src="<? echo $img1; ?>" height="50" width="80" />
<?
}
else if($imgtype_slide1  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="50" width="80" />
<?
}
?>
<span><? echo mb_substr ($title_news_slide1, 0, 60, 'utf-8'); ?></span>
</a>
</li>	
<?
}
?>
</ul>
<?php
$select_slide1 = $mysqli->query("SELECT * FROM min_news WHERE show_index='1' and minpage = '$id_page_get' ORDER BY id DESC LIMIT 4");
$num_slide1 = $select_slide1->num_rows;
while ($rows_slide1 = $select_slide1->fetch_array(MYSQL_ASSOC)){

$id_news_slide1         = $rows_slide1 ['id'];
$title_news_slide1      = $rows_slide1 ['title'];
$pic_news_slide1        = $rows_slide1 ['pic'];
$imgtype_slide1        = $rows_slide1 ['imgtype'];
$news_news_slide1       = $rows_slide1 ['news'];
$time_slide1            = $rows_slide1 ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_slide1, $img);
$img1 = $img[1]; 

?>
<div id="fragment-<? echo $id_news_slide1; ?>" class="ui-tabs-panel" style="">
<?php
if($imgtype_slide1  == 'pic1'){
?>
<a href="minnews-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=<? echo $pic_news_slide1; ?>" height="250" width="450" /></a>
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<a href="minnews-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="250" width="450" /></a>
<?
}
else if($img1){
?>
<a href="minnews-<? echo $id_news_slide1; ?>.html" ><img src="<? echo $img1; ?>" height="250" width="450" /></a>
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<a href="minnews-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="250" width="450" /></a>
<?
}
else if($imgtype_slide1  == ""){
?>
<a href="minnews-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=style/img/none_photo.jpg" height="250" width="450" /></a>
<?
}
?>
<div class="info" >
<h2><a href="minnews-<? echo $id_news_slide1; ?>.html" ><? echo $title_news_slide1; ?></a></h2>
</div>
</div>
<?
}
?>
</div>
<!-- end slideshow 1 -->
</div>
<br />
<div id="news">
<div class="hednews"> <? echo $title_page; ?></div>
<?php
$select_slide1 = $mysqli->query("SELECT * FROM min_news where minpage = '$id_page_get'  ORDER BY id DESC LIMIT 4,20");
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
<a href="minnews-<? echo $id_news_slide2; ?>.html">
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
<img src="style/img/none_photo.jpg" class="imgcat" height="100" width="150" />
<?
}
?>
</a>
</td>
<td valign="top">
<div class="hedline">
<a href="minnews-<? echo $id_news_slide2; ?>.html" class="linkcats" title="<? echo $title_news_slide1; ?>"><? echo mb_substr($title_news_slide1, 0, 70, 'utf-8'); ?></a>
</div>
<div class="bodtbl">
<? echo $title_news_slide1; ?>
<div style="font-weight: bold;">
</div>
<span style="color:#666;">نشر منذ <? echo timeBetween($time_slide1,time());?></span>
</div>
</td>
</tr>
</table>
<br />
<div class="line"></div>
<?
}
?>
<div class="showmore"></div>
</div>
<div align="center">
<span class="loading"></span>
<button rel="<? echo $id_page_get; ?>" id="<? echo $id_news_slide2; ?>" class="more">عرض المزيد من الأخبار</button>
</div>
</td>
<td valign="top" width="30%">
<div id="left">


<div class="hedblock">جديد الصور</div>
<div class="bodblock">
<?php
$select_photos = $mysqli->query("SELECT * FROM photos where minpage = '$id_page_get '  ORDER BY id DESC LIMIT 6");
$num_photos = $select_photos->num_rows;

if($num_photos){
echo " <table width='100%' border='0' cellpadding='4' cellspacing='0'>
<tr> ";
$max_photos = 2;
$num_photos = 0;


while ($rows_photos = $select_photos->fetch_array(MYSQL_ASSOC)){
$num_photos++;
$id_photos         = $rows_photos ['id'];
$title_photos         = $rows_photos ['title'];
$minpage_photos         = $rows_photos ['minpage'];
$pic_photos         = $rows_photos ['pic'];

?>
<td width="50%" align="center">
<a href="imgnews/<? echo $pic_photos; ?>" target="_blank">
<img src="imgnews/<? echo $pic_photos; ?>" height="100" width="100" />
</a>
</td>
<?
if($num_photos == $max_photos){
echo "</tr>";
$num_photos = 0;
} //end if
}
}
echo "</table>";
?>
</div>


<div class="hedblock">أكثر الأخبار قراءة فى الصفحة</div>
<div class="bodblock">
<ul class="newsmenu">
<?
$select_news_cats = $mysqli->query("SELECT * FROM min_news WHERE minpage='$id_page_get'  ORDER BY views DESC LIMIT 10");
$num_news_cats = $select_news_cats->num_rows;
while ($rows_news_cats = $select_news_cats->fetch_array(MYSQL_ASSOC)){

$id_news_cats         = $rows_news_cats ['id'];
$title_news_cats      = $rows_news_cats ['title'];
$pic_news_cats        = $rows_news_cats ['pic'];
$imgtype_news_cats    = $rows_news_cats ['imgtype'];
$news_news_cats       = $rows_news_cats ['news'];
$time_news_cats       = $rows_news_cats ['time'];
$views_news_cats       = $rows_news_cats ['views'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cats, $img);
$img_cats = $img[1];
?>
<li>
<a href="minnews-<? echo $id_news_cats; ?>.html" title="<? echo $title_news_cats; ?>">
<table align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="25%" valign="top">
<?php
if($imgtype_news_cats  == 'pic1'){
?>
<img src="<? echo $pic_news_cats; ?>" class="imgcat" height="40" width="40" />
<?
}
else if($imgtype_news_cats  == 'pic2'){
?>
<img src="imgnews/<? echo $pic_news_cats; ?>" class="imgcat" height="40" width="40" />
<?
}
else if($img_cats){
?>
<img src="<? echo $img_cats; ?>" class="imgcat" height="40" width="40" />
<?
}
else if($imgtype_news_cats  == ""){
?>
<img src="style/img/none_photo.jpg" class="imgcat" height="40" width="40" />
<?
}
?>
</td>
<td width="75%" valign="top">
<? echo mb_substr ($title_news_cats, 0, 50, 'utf-8'); ?> 
<span style="font-family: newo">(<? echo $views_news_cats; ?> مشاهدة)</span>
</td>
</tr>
</table>
</a>
</li>
<?
}

?>

</div>

</div>
</td>
</tr>
</table>

</div>
</div>
<? include("includes/footer.php"); 
}
?>

</body>
</html>
<?
}else{
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title><? echo $title_news; ?></title>
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3 style=" padding: 10; margin: 10; font-size: 16px; color: #ff0000; background: #fff;">
هذا السكربت غير مرخص من فضلك راسلنا على هذا العنوان : mmusic2008@yahoo.com
</h3>
</body>
</html>
<?
}
?>