<?php
include("includes/config.php");

$select_set = $mysqli->query("SELECT * FROM  setting where id='1'");
$rows_st = $select_set->fetch_array(MYSQL_ASSOC);

$sitetitle = $rows_st['sitetitle'];
$sitedesc  = $rows_st['sitedesc'];
$sitekey   = $rows_st['sitekey'];
$sitelink  = $rows_st['sitelink'];
$sitepr    = $rows_st['sitepr'];
$siteclose = $rows_st['close'];
$closemsg  = $rows_st['close_msg'];

$select_html = $mysqli->query("SELECT * FROM  htmlcode where id='1'");
$rows_html = $select_html->fetch_array(MYSQL_ASSOC);

$header_html = $rows_html['header'];
$bottomheader_html = $rows_html['bottomheader'];
$topfooter_html = $rows_html['topfooter'];
$rightnews_html = $rows_html['rightnews'];
$leftnews_html = $rows_html['leftnews'];
$bottomnews_html = $rows_html['bottomnews'];


if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");
 
 $search    =IsSet($_POST['search'])   ? make_it_safe($_POST['search'])   :Null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title><? echo $search; ?></title>
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
<? include ("includes/header.php"); ?>
<div id="body">
<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" width="70%">

<?

if($search == ""){

echo "<h3>Enter a word to search</h3>";
}else{
?>

<div id="news">
<div class="hednews">Search : <? echo $search; ?></div>

<?php
$select_slide1 = $mysqli->query("SELECT * FROM news where title LIKE '%$search%'  ORDER BY id DESC LIMIT 20");
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
Views : <? echo $views; ?>
</div>
<span style="color:#666;">Since publishing <? echo timeBetween($time_slide1,time());?></span>
</div>
</td>
</tr>
</table>
<div class="line"></div>
<?
}
}
?>
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
</table>


</div>
</div>

<? include ("includes/footer.php"); ?>
<?
}
?>
</body>
</html>
