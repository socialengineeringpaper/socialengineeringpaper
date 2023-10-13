<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
$select_cat = $mysqli->query("SELECT * FROM cats where show_index='1' and kind != '1' and kind != '5' order by ord_show");
$num_cat = $select_cat->num_rows;
while ($rows_cat = $select_cat->fetch_array(MYSQL_ASSOC)){

$id_cat       = $rows_cat ['id'];
$title_cat       = $rows_cat ['title'];
$show_index_cat       = $rows_cat ['show_index'];
$kind_cat       = $rows_cat ['kind'];

?>
<div class="hednews"><? echo $title_cat; ?></div>
<?
if($kind_cat == 2){

$select_news_cat = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 4");
$num_news_cat = $select_news_cat->num_rows;

if($num_news_cat){
echo " <table width='100%' border='0' cellpadding='4' cellspacing='0'>
<tr> ";
$max_news_cat = 4;
$num_cat = 0;


while ($rows_news_cat = $select_news_cat->fetch_array(MYSQL_ASSOC)){
$num_cat++;
$id_news_cat         = $rows_news_cat ['id'];
$title_news_cat      = $rows_news_cat ['title'];
$pic_news_cat        = $rows_news_cat ['pic'];
$imgtypenews_cat     = $rows_news_cat ['imgtype'];
$news_news_cat       = $rows_news_cat ['news'];
$time_news_cat       = $rows_news_cat ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1];

?>
<td width="25%">
<div class="backgr" align="center">
<a href="news-<? echo $id_news_cat; ?>.html" title="<? echo $title_news_cat; ?>">
<?php
if($imgtypenews_cat  == 'pic1'){
?>
<span class="video1"></span>
<img src="<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == 'pic2'){
?>
<span class="video1"></span>
<img src="water.php?image=imgnews/<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($img_cat){
?>
<span class="video1"></span>
<img src="<? echo $img_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == ""){
?>
<span class="video1"></span>
<img src="water.php?image=style/img/none_photo.jpg" height="100" width="150" />
<?
}
?>
<br />
<span><? echo mb_substr ($title_news_cat, 0, 50, 'utf-8'); ?></span>
</a>
</div>
</td>
<?
if($num_cat == $max_news_cat){
echo "</tr>";
$num_cat = 0;
} //end if
}
}
echo "</table>";
}
if($kind_cat == 3){

$select_news_cat = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 8");
$num_news_cat = $select_news_cat->num_rows;

if($num_news_cat){
echo " <table width='100%' border='0' cellpadding='4' cellspacing='0'>
<tr> ";
$max_news_cat = 4;
$num_cat = 0;


while ($rows_news_cat = $select_news_cat->fetch_array(MYSQL_ASSOC)){
$num_cat++;
$id_news_cat         = $rows_news_cat ['id'];
$title_news_cat      = $rows_news_cat ['title'];
$pic_news_cat        = $rows_news_cat ['pic'];
$imgtypenews_cat     = $rows_news_cat ['imgtype'];
$news_news_cat       = $rows_news_cat ['news'];
$time_news_cat       = $rows_news_cat ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1]; 

?>
<td width="25%">
<div class="backgr" align="center">
<a href="news-<? echo $id_news_cat; ?>.html" title="<? echo $title_news_cat; ?>">
<?php
if($imgtypenews_cat  == 'pic1'){
?>
<img src="<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($img_cat){
?>
<img src="<? echo $img_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="100" width="150" />
<?
}
?>
<br />
<span><? echo mb_substr ($title_news_cat, 0, 50, 'utf-8'); ?></span>
</a>
</div>
</td>
<?
if($num_cat == $max_news_cat){
echo "</tr>";
$num_cat = 0;
} //end if
}
}
echo "</table>";
}
if($kind_cat == 4){
?>
<div id="nbd">
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="60%" valign="top">
<?
$select_news_cat = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 1");
$num_news_cat = $select_news_cat->num_rows;
while ($rows_news_cat = $select_news_cat->fetch_array(MYSQL_ASSOC)){

$id_news_cat         = $rows_news_cat ['id'];
$title_news_cat     = $rows_news_cat ['title'];
$pic_news_cat        = $rows_news_cat ['pic'];
$imgtype_news_cat        = $rows_news_cat ['imgtype'];
$news_news_cat      = $rows_news_cat ['news'];
$time_news_cat           = $rows_news_cat ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1]; 
?>
<a title="<? echo $title_news_cat; ?>" href="news-<? echo $id_news_cat; ?>.html">
<div class="firstnews">
<?php
if($imgtype_news_cat  == 'pic1'){
?>
<img src="<? echo $pic_news_cat; ?>" height="190" width="400" />
<?
}
else if($imgtype_news_cat  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_cat; ?>" height="190" width="400" />
<?
}
else if($img_cat){
?>
<img src="<? echo $img_cat; ?>" height="190" width="400" />
<?
}
else if($imgtype_news_cat  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="190" width="400" />
<?
}
?>
<div class="hednbd1">
<? echo mb_substr($title_news_cat, 0, 60, 'utf-8'); ?>
</div>
</div>
</a>
<?
}
?>
</td>
<td valign="top">
<?
$select_news_cat2 = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 1,1");
$num_news_cat2 = $select_news_cat2->num_rows;

while ($rows_news_cat2 = $select_news_cat2->fetch_array(MYSQL_ASSOC)){

$id_news_cat         = $rows_news_cat2 ['id'];
$title_news_cat     = $rows_news_cat2 ['title'];
$pic_news_cat        = $rows_news_cat2 ['pic'];
$imgtype_news_cat        = $rows_news_cat2 ['imgtype'];
$news_news_cat      = $rows_news_cat2 ['news'];
$time_news_cat           = $rows_news_cat2 ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1]; 

?>
<a title="<? echo $title_news_cat; ?>" href="news-<? echo $id_news_cat; ?>.html">
<div class="scnews">
<?php
if($imgtype_news_cat  == 'pic1'){
?>
<img src="<? echo $pic_news_cat; ?>" height="190" width="265" />
<?
}
else if($imgtype_news_cat  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_cat; ?>" height="190" width="265" />
<?
}
else if($img_cat){
?>
<img src="<? echo $img_cat; ?>" height="190" width="265" />
<?
}
else if($imgtype_news_cat  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="190" width="265" />
<?
}
?>
<div class="hednbd2">
<? echo mb_substr($title_news_cat, 0, 60, 'utf-8'); ?>
</div>
</div>
</a>
<?
}
?>
</td>
</tr>
</table>
</div>
<?
$select_news_cat = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 2,4");
$num_news_cat = $select_news_cat->num_rows;

if($num_news_cat){
echo " <table width='100%' border='0' cellpadding='4' cellspacing='0'>
<tr> ";
$max_news_cat = 4;
$num_cat = 0;


while ($rows_news_cat = $select_news_cat->fetch_array(MYSQL_ASSOC)){
$num_cat++;
$id_news_cat         = $rows_news_cat ['id'];
$title_news_cat      = $rows_news_cat ['title'];
$pic_news_cat        = $rows_news_cat ['pic'];
$imgtypenews_cat     = $rows_news_cat ['imgtype'];
$news_news_cat       = $rows_news_cat ['news'];
$time_news_cat       = $rows_news_cat ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1];

?>
<td width="25%">
<div class="backgr" align="center">
<a href="news-<? echo $id_news_cat; ?>.html" title="<? echo $title_news_cat; ?>">
<?php
if($imgtypenews_cat  == 'pic1'){
?>
<img src="<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_cat; ?>" height="100" width="150" />
<?
}
else if($img_cat){
?>
<img src="<? echo $img_cat; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_cat  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="100" width="150" />
<?
}
?>
<br />
<span><? echo mb_substr ($title_news_cat, 0, 50, 'utf-8'); ?></span>
</a>
</div>
</td>
<?
if($num_cat == $max_news_cat){
echo "</tr>";
$num_cat = 0;
} //end if
}
}
echo "</table>";

$select_news_cat = $mysqli->query("SELECT * FROM news where news_cat = '$id_cat'  ORDER BY id DESC LIMIT 6,6");
$num_news_cat = $select_news_cat->num_rows;

if($num_news_cat){
echo " <table width='100%' border='0' cellpadding='2' cellspacing='0'>
<tr> ";
$max_news_cat = 2;
$num_cat = 0;


while ($rows_news_cat = $select_news_cat->fetch_array(MYSQL_ASSOC)){
$num_cat++;
$id_news_cat         = $rows_news_cat ['id'];
$title_news_cat      = $rows_news_cat ['title'];
$pic_news_cat        = $rows_news_cat ['pic'];
$imgtypenews_cat     = $rows_news_cat ['imgtype'];
$news_news_cat       = $rows_news_cat ['news'];
$time_news_cat       = $rows_news_cat ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news_cat, $img);
$img_cat = $img[1];

?>
<td width="25%">
<a href="news-<? echo $id_news_cat; ?>.html" class="linkcat" title="<? echo $title_news_cat; ?>">
<? echo mb_substr($title_news_cat, 0, 60, 'utf-8'); ?>
</a>
</td>
<?
if($num_cat == $max_news_cat){
echo "</tr>";
$num_cat = 0;
} //end if
}
}
echo "</table>";
}
} 
?>
<div class="line"></div>
<?
$select_cat2 = $mysqli->query("SELECT * FROM cats where show_index='1' and kind = '1' order by ord_show");
$num_cat2 = $select_cat2->num_rows;

if($num_cat2){
echo " <table width='100%' border='0' cellpadding='2' cellspacing='0'>
<tr> ";
$max_cat = 2;
$num_cat2 = 0;

while ($rows_cat2 = $select_cat2->fetch_array(MYSQL_ASSOC)){
$num_cat2++;
$id_cat           = $rows_cat2 ['id'];
$title_cat        = $rows_cat2 ['title'];
$show_index_cat   = $rows_cat2 ['show_index'];
$kind_cat         = $rows_cat2 ['kind'];
?>
<td width="50%" style="padding: 5px;">
<div class="hedblock"><? echo $title_cat; ?></div>
<div class="bodblock">
<div class="bottom_cat">
<?php
$select_news_cats = $mysqli->query("SELECT * FROM news where show_index = '1' and news_cat= '$id_cat'  ORDER BY id DESC LIMIT 4");
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
<a class="linkcats" href="news-<? echo $id_news_cats; ?>.html" title="<? echo $title_news_cats; ?>">
<table align="center" class="tablecat" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top" width="30%">
<?php
if($imgtype_news_cats  == 'pic1'){
?>
<img src="<? echo $pic_news_cats; ?>" class="imgcat" height="60" width="80" />
<?
}
else if($imgtype_news_cats  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_news_cats; ?>" class="imgcat" height="60" width="80" />
<?
}
else if($img_cats){
?>
<img src="<? echo $img_cats; ?>" class="imgcat" height="60" width="80" />
<?
}
else if($imgtype_news_cats  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" class="imgcat" height="60" width="80" />
<?
}
?>
</td>
<td valign="top" width="70%">
<span style="font-family: newb; font-size: 14px;"><? echo mb_substr ($title_news_cats, 0, 50, 'utf-8'); ?></span>
</td>
</tr>
</table>
</a>
<?
}
?>
<a href="cat-<? echo $id_cat; ?>.html" class="morenewscat">More News</a>
</div>
</div>
</td>
<?
if($num_cat2 == $max_cat){
echo "</tr>";
$num_cat2 = 0;
} //end if
}
}
echo "</table>";
?>

</body>
</html>