<?php 
include ("includes/config.php");


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

$uss  = $rows_st['uss'];


$new_uss = $uss+1;

$updateuss = $mysqli->query("Update setting Set uss='$new_uss' WHERE id='1' ");



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


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl"xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="<? echo $sitedesc; ?>" />

<meta name="keywords" content="<? echo $sitekey; ?>" />

<meta name="msapplication-starturl" content="<? echo $sitelink; ?>" />

<title><? echo $sitetitle; ?></title>

<link href="style/css/style.css" rel="stylesheet" type="text/css" />

<link href="style/css/slideshow1.css" rel="stylesheet" type="text/css" />

<link href="style/css/slideshow2.css" rel="stylesheet" type="text/css" />

<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.js">
</script>

<script type="text/javascript" src="js/jquery.ticker.js"></script>

<script src="js/site.js" type="text/javascript"></script>

</head>

<body>

<?
if($siteclose == "1"){
  echo $closemsg;

}else{
?>
<div id="mynews">

<? include ("includes/header.php");
 ?>

<div id="body">

<div style="float: right; width: 705px;">
<div id="news">

<div class="hednews">New News</div>

<? include("includes/slideshow1.php"); ?>
<br />

<div class="hednews">More News</div>


<? include("includes/bottom_slider1.php"); ?>

<br />
<? include("img.php"); ?>
<br />
<div class="clear"></div>
<? include("includes/cats.php"); ?>

</div>

</div>

<div style="float: left; width: 290px;">

<div id="left">

<?php
$select_block = $mysqli->query("SELECT * FROM blocks WHERE place='1'");

$num_block = $select_block->num_rows;

while ($rows_block = $select_block->fetch_array(MYSQL_ASSOC)){

$id_block   = $rows_block ['id'];

$title_block = $rows_block ['title'];
$con_block= $rows_block ['con'];
?>

<div class="hedblock"><? echo $title_block; ?></div>

<div class="bodblock"><? echo $con_block; ?></div>
<?
}
?>

<div class="hedblock">Advertising</div>

<div class="bodblock">

<?php
$select_bnr = $mysqli->query("SELECT * FROM ads order by id desc limit 1 ");
$num_bnr = $select_bnr->num_rows;


while ($rows_bnr = $select_bnr->fetch_array(MYSQL_ASSOC)){

$id_bnr = $rows_bnr ['id'];
$src_bnr = $rows_bnr ['src'];

$link_bnr  = $rows_bnr ['link'];
?>

<center>
<a href="<? echo $link_bnr; ?>" style=" color:#fff;">
<img src="<? echo $src_bnr ; ?>" width="225" /></a>

</center>
<?
}
?>
</div>
<div class="hedblock">Founders</div>
<div class="bodblock">

<?php
$select_min_page = $mysqli->query("SELECT * FROM min_page ORDER BY ord_show");

$num_min_page = $select_min_page->num_rows;

while ($rows_min_page = $select_min_page->fetch_array(MYSQL_ASSOC)){

$id_min_page          = $rows_min_page ['id'];

$title_min_page       = $rows_min_page ['title'];

$minpic  = $rows_min_page ['minpic'];

?>
<div align="center">
<a href="minpage-<? echo  $id_min_page?>.html">
<img src="<? echo $minpic; ?>" width="250" style="margin: 5px;" />
</a>
<br />
</div>

<?
}
?>
</div>

<div class="hedblock">Visitors counter</div>

<div class="bodblock">
<center><b>ALL Visitors  : <? echo $uss; ?></b>
</center>
</div>
<?
$select_cat = $mysqli->query("SELECT * FROM cats where show_index='1' and kind = '5' order by ord_show");

$num_cat = $select_cat->num_rows;

while ($rows_cat = $select_cat->fetch_array(MYSQL_ASSOC)){

$id_cat2= $rows_cat ['id'];
$title_cat=$rows_cat ['title'];

$show_index_cat= $rows_cat ['show_index'];

$kind_cat       = $rows_cat ['kind'];
?>

<div class="hedblock"><? echo $title_cat; ?></div>

<div class="bodblock">

<ul class="newsmenu">
<?
$select_news_cats = $mysqli->query("SELECT * FROM news WHERE news_cat ='$id_cat2 ' ORDER BY time DESC LIMIT 5");

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
<a href="news-<? echo $id_news_cats; ?>.html" title="<? echo $title_news_cats; ?>">

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
<span style="font-family: newo">(<? echo $views_news_cats; ?> Watch)</span>
</td>
</tr>
</table>
</a>
</li>
<?
}
?>
</ul>
</div>
<?
}
?>

<?php
$select_block = $mysqli->query("SELECT * FROM blocks WHERE place='2'");
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
</div>
<div class="clear"></div>
</div>
</div>
<?
include("includes/footer.php"); 
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
هذا السكربت غير مرخص من فضلك راسلنا على هذا العنوان : alisqq@yahoo.com
</h3>
</body>
</html>
<?
}
?>