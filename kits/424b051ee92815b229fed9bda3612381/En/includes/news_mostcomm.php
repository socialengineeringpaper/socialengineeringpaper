<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<ul class="newsmenu">
<?php
include("config.php");
$yesterday = (time() - 60 * 60 * 24);
$timenow = time();

$select_newspage = $mysqli->query("SELECT * FROM news_page");
$num_newspage = $select_newspage->num_rows;

while ($rows_newspage = $select_newspage->fetch_array(MYSQL_ASSOC)){

$id_gg          = $rows_newspage ['id'];
$comment_mode   = $rows_newspage ['comment_mode'];
$new_news       = $rows_newspage ['new_news'];
$new_comm       = $rows_newspage ['new_comm'];


if($new_comm == 1){$select_news_cats = $mysqli->query("SELECT * FROM news WHERE time BETWEEN $yesterday AND $timenow  ORDER BY comments DESC LIMIT 10");}
else if($new_comm == 2){$select_news_cats = $mysqli->query("SELECT * FROM news  ORDER BY comments DESC LIMIT 10");}

$num_news_cats = $select_news_cats->num_rows;
while ($rows_news_cats = $select_news_cats->fetch_array(MYSQL_ASSOC)){

$id_news_cats         = $rows_news_cats ['id'];
$title_news_cats      = $rows_news_cats ['title'];
$pic_news_cats        = $rows_news_cats ['pic'];
$imgtype_news_cats    = $rows_news_cats ['imgtype'];
$news_news_cats       = $rows_news_cats ['news'];
$time_news_cats       = $rows_news_cats ['time'];
$views_news_cats       = $rows_news_cats ['views'];
$comments_show_news       = $rows_news_cats ['comments'];

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
<span style="font-family: newo"> (<? echo $comments_show_news; ?> تعليق) </span>
 
</td>
</tr>
</table>
</a>
</li>
<?
}
}
?>
</ul>
</body>
</html>
