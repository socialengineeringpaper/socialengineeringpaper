<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!-- slideshow 1 -->
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui-tabs.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
<div id="featured" >
<ul class="ui-tabs-nav">
<?php
$select_slide1 = $mysqli->query("SELECT * FROM news where show_index = '1'  ORDER BY id DESC LIMIT 4");
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
$select_slide1 = $mysqli->query("SELECT * FROM news WHERE show_index='1' ORDER BY id DESC LIMIT 4");
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
<a href="news-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=<? echo $pic_news_slide1; ?>" height="250" width="350" /></a>
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<a href="news-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="250" width="350" /></a>
<?
}
else if($img1){
?>
<a href="news-<? echo $id_news_slide1; ?>.html" ><img src="<? echo $img1; ?>" height="250" width="450" /></a>
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<a href="news-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="250" width="350" /></a>
<?
}
else if($imgtype_slide1  == ""){
?>
<a href="news-<? echo $id_news_slide1; ?>.html" ><img src="water.php?image=style/img/none_photo.jpg" height="250" width="350" /></a>
<?
}
?>
<div class="info" >
<h2><a href="news-<? echo $id_news_slide1; ?>.html" ><? echo $title_news_slide1; ?></a></h2>
</div>
</div>
<?
}
?>
</div>
<!-- end slideshow 1 -->
</body>
</html>
