<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1.js"></script>
<script type="text/javascript">


$(function() {

$('#foo1').carouFredSel({
auto: {
pauseOnHover: 'resume',
progress: '#timer1'
}
}, {
transition: true
});

});
</script>
<style type="text/css" media="all">
.list_carousel {
	width: 100%;				
}
.list_carousel ul {
	padding: 0;
	list-style: none;
	display: block;
}
.list_carousel .listslide {
	color: #999;
	text-align: center;
	padding: 0;
	margin: 6px;
	display: block;
	float: left;
}
.list_carousel.responsive {
	width: auto;
	margin-left: 0;
}
.clearfix {
	float: none;
	clear: both;
}
.pager {
	float: left;
	width: 300px;
	text-align: center;
}
.pager a {
	margin: 0 5px;
	text-decoration: none;
}
.pager a.selected {
	text-decoration: underline;
}
.timer {
	background-color: #ff0000;
	height: 6px;
	width: 0px;
}
.infotitle {
	position: absolute;
	font-weight: bold;
	background: rgba(0, 0, 0, 0.5);
	color: #fff;
	width: 160px;;
	text-shadow: 1px 1px 3px #000;
}
</style>
</head>
<body
<div class="list_carousel">
<ul id="foo1">
<?php
$select_slide2 = $mysqli->query("SELECT * FROM news WHERE show_index='1' ORDER BY id DESC LIMIT 4,8");
$num_slide2 = $select_slide2->num_rows;
while ($rows_slide2 = $select_slide2->fetch_array(MYSQL_ASSOC)){

$id_news_slide2         = $rows_slide2 ['id'];
$title_news_slide2      = $rows_slide2 ['title'];
$pic_news_slide2        = $rows_slide2 ['pic'];
$imgtype_slide2        = $rows_slide2 ['imgtype'];
$news_news_slide2       = $rows_slide2 ['news'];
$time_slide2            = $rows_slide2 ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_slide2, $img);
$img2 = $img[1];

?>
<li class="listslide">
<a href="news-<? echo $id_news_slide2; ?>.html">
<div class="infotitle"><? echo mb_substr ($title_news_slide2, 0, 35, 'utf-8'); ?></div>
<?php
if($imgtype_slide2  == 'pic1'){
?>
<img title="<? echo $title_news_slide2; ?>" src="water.php?image=<? echo $pic_news_slide2; ?>" height="120" width="160" />
<?
}
else if($imgtype_slide2  == 'pic2'){
?>
<img title="<? echo $title_news_slide2; ?>" src="water.php?image=imgnews/<? echo $pic_news_slide2; ?>" height="120" width="160" />
<?
}
else if($img2){
?>
<img title="<? echo $title_news_slide2; ?>" src="water.php?image=<? echo $img2; ?>" height="120" width="160" />
<?
}
else if($imgtype_slide2  == ""){
?>
<img title="<? echo $title_news_slide2; ?>" src="water.php?image=style/img/none_photo.jpg" height="120" width="160" />
<?
}
?>
</a>
</li>
<?
}
?>
</ul>
<div class="clearfix"></div>
<div id="timer1" class="timer"></div>
</body>
</html>
