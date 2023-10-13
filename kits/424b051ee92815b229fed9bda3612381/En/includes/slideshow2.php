<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script type="text/javascript" src="js/slideshow2.js"></script>

<div id="slider">
	
	<div id="sliderNextImg">التالي</div>
	<div id="sliderPreviousImg">السابق</div>
	
	<div id="ImgsWrapper">
	
		<div id="description"><div id="desContent"></div></div>
		
		<div id="scroll">
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
<a href="news-<? echo $id_news_slide1; ?>.html">
<?
if($imgtype_slide1  == 'pic1'){
?>
<img src="water.php?image=<? echo $pic_news_slide1; ?>" height="250" width="700" />
<?
}
else if($imgtype_slide1  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_slide1; ?>" height="250" width="700" />
<?
}
else if($img1){
?>
<img src="water.php?image=<? echo $img1; ?>" height="250" width="700" />
<?
}
else if($imgtype_slide1  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="250" width="700" />
<?
}
?>
</a>
<?
}
?>
		</div>
		
	</div>
	
	<ul>
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

?>	
<li><? echo $title_news_slide1; ?></li>
<?
}
?>
	</ul>
	
</div>
</body>
</html>
