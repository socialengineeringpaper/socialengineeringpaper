<?php
include("includes/config.php");
$id_cat_get    =IsSet($_GET['id'])   ? make_it_safe($_GET['id'])   :Null;

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


$select = $mysqli->query("SELECT * FROM cats where id='$id_cat_get' limit 1");
$num = $select->num_rows;
$rows = $select->fetch_array(MYSQL_ASSOC);
$id_cat         = $rows ['id'];
$title_cat1         = $rows ['title'];
$dal_cat         = $rows ['dal'];
$kind_cat         = $rows ['kind'];
$ds_cat         = $rows ['ds'];
$ord_show         = $rows ['ord_show'];
$show_index         = $rows ['show_index'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="style/css/buttons.css" rel="stylesheet" type="text/css" />
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<? echo $ds_cat; ?>" />
<meta name="keywords" content="<? echo $dal_cat; ?>" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ticker.js"></script>
<script src="js/site.js" type="text/javascript"></script>
<script type="text/javascript">

/* Slide Show */
$(document).ready(function() {
	$('#slideShowItems div').hide().css({position:'absolute',width:'600px'});

var currentSlide = -1;
var prevSlide = null;
var slides = $('#slideShowItems div');
var interval = null;
var FADE_SPEED = 500;
var DELAY_SPEED = 15000;

var html = '<ul id="slideShowCount">'

for (var i = slides.length - 1;i >= 0 ; i--){
	html += '<li id="slide'+ i+'" class="slide"><span>'+(i+1)+'</span></li>' ;
}

html += '</ul>';
$('#slideShow').after(html);

for (var i = slides.length - 1;i >= 0 ; i--){
	$('#slide'+i).bind("click",{index:i},function(event){
		currentSlide = event.data.index;
		gotoSlide(event.data.index);
	});
};

if (slides.length <= 1){
	$('.slide').hide();
}

nextSlide();

function nextSlide (){

	if (currentSlide >= slides.length -1){
		currentSlide = 0;
	}else{
		currentSlide++
	}

	gotoSlide(currentSlide);

}

function gotoSlide(slideNum){

	if (slideNum != prevSlide){

		if (prevSlide != null){
			$(slides[prevSlide]).stop().hide();
			$('#slide'+prevSlide).removeClass('selectedTab');
		}

		$('#slide'+currentSlide).addClass('selectedTab');


		$('#slide'+slideNum).addClass('selectedTab');
		$('#slide'+prevSlide).removeClass('selectedTab');

		$(slides[slideNum]).stop().slideDown(FADE_SPEED,function(){
			$(this).css({opacity:1});
			if(jQuery.browser.msie){
				this.style.removeAttribute('filter');
			}
		});

		prevSlide = currentSlide;

		if (interval != null){
			clearInterval(interval);
		}
		interval = setInterval(nextSlide, DELAY_SPEED);
	}

}
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

<title><? echo $title_cat1; ?></title>
	<style type="text/css" media="screen">
	div#slideShowItems{
	  	height:110px;
		overflow:hidden;
		position:relative;
		font-family: newb;
	}
	
	div#slideShowItems div{
		width:100%;
	}
		div#slideShowItems p{
		font-family: newo;
	}
	
	
	
	div#slideShowItems img {
		margin-left:13px;
		float:right;
	}
	
	ul#slideShowCount{
		margin:0px;
		padding:0px;
		width:100%;
	}
	ul#slideShowCount li.slide{
		line-height:14px;
		float:left;
		cursor:pointer;
		width:26px;
		height:18px;
		display:block;
		background: #333;
		margin-right: 2px;
		text-align:center;
		border-bottom-right-radius: 5px; 
		border-bottom-left-radius: 5px; 
	}
	
	ul#slideShowCount li.slide span{
		padding-left:10px;
		color:#fff;
		font-size:12px;
		text-align:center;
		font-family: Tahoma;
	}
	
	ul#slideShowCount li.slide:hover{
		background: #990000;
	}
	
	ul#slideShowCount li.slide.selectedTab{
		background: #990000;
	}
	div#slideShow{
		width:100%;
		padding: 5px;
		margin-right: auto;
		margin-left: auto;
	}
	
	.shownewstbl {
	padding: 5px;
	border: 1px solid #CCCCCC;
	margin: 10px;
	box-shadow: 0px 0px 5px #ccc;
}
    </style>
</head>
<body>
<?
if($siteclose == "1"){
  echo $closemsg;
}else{
?>
<div id="mynews">
<? include ("includes/header.php"); ?>
<div id="body">
<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" width="70%">
<div id="news">
<div class="hednews">جديد الأخبار فى <? echo $title_cat1; ?></div>
<div id="slideShow">
<div id="slideShowItems">

<?php
$select_slide1 = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat_get'  ORDER BY id DESC LIMIT 4");
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

<div>
<a href="show_news?id=<? echo $id_news_slide1; ?>">
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
<a href="news-<? echo $id_news_slide1; ?>.html" title="<? echo $title_news_slide1 ; ?>" class="linkcats">
<h2><? echo mb_substr($title_news_slide1, 0, 100, 'utf-8'); ?></h2>
</a>
<p><? echo mb_substr($title_news_slide1, 0, 100, 'utf-8'); ?></p>
</div>
<?
}
?>
			
</div>
</div>
</div>
<br />
<br />
<div id="news">
<div class="hednews"> <? echo $title_cat1; ?></div>
<?php
$select_slide1 = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat_get'  ORDER BY id DESC LIMIT 4,20");
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
<img src="style/img/none_photo.jpg" class="imgcat" height="100" width="150" />
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
<div class="showmore"></div>
</div>
<div align="center">
<span class="loading"></span>
<button rel="<? echo $id_cat_get; ?>" id="<? echo $id_news_slide2; ?>" class="more">عرض المزيد من الأخبار</button>
</div>
</td>
<td valign="top" width="30%">
<div id="left">

<?php
$select_block = $mysqli->query("SELECT * FROM blocks WHERE place='1' and indexi='2'");
$num_block = $select_block->num_rows;

while ($rows_block = $select_block->fetch_array(MYSQL_ASSOC)){

$id_block          = $rows_block ['id'];
$title_block       = $rows_block ['title'];
$con_block       = $rows_block ['con'];
?>
<div class="hedblock"><? echo $title_block; ?></div>
<div class="bodblock"><? echo $con_block; ?></div>
<?
}
?>

<div class="hedblock">استطلاع رأى</div>
<div class="bodblock">
<? include("includes/poll.php"); ?>
</div>
<div class="hedblock">أخبار</div>
<div class="bodblock">
<? include("includes/news.php"); ?>
</div>


<?php
$select_block = $mysqli->query("SELECT * FROM blocks WHERE place='2' and indexi='2'");
$num_block = $select_block->num_rows;

while ($rows_block = $select_block->fetch_array(MYSQL_ASSOC)){

$id_block          = $rows_block ['id'];
$title_block       = $rows_block ['title'];
$con_block       = $rows_block ['con'];
?>
<div class="hedblock"><? echo $title_block; ?></div>
<div class="bodblock"><? echo $con_block; ?></div>
<?
}
?>



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
هذا السكربت غير مرخص من فضلك راسلنا على هذا العنوان : alisq11@yahoo.com
</h3>
</body>
</html>
<?
}
?>