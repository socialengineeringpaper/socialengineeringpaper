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


$id_comic    =IsSet($_GET['id'])   ? make_it_safe($_GET['id'])   :Null;


$select_slide1 = $mysqli->query("SELECT * FROM comic where id ='$id_comic'");
$num_slide1 = $select_slide1->num_rows;
while ($rows_slide1 = $select_slide1->fetch_array(MYSQL_ASSOC)){

$id_comic2         = $rows_slide1 ['id'];
$title_comic     = $rows_slide1 ['title'];
$pic_comic        = $rows_slide1 ['linkimg'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<title><? echo $title_comic; ?></title>
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
<center>
<h3 style="font-family: newb;"><? echo $title_comic; ?></h3>
<br />
<img src="<? echo $pic_comic; ?>" height="300" width="400" />
<br />
<?
$select_next = $mysqli->query("SELECT * FROM comic where id >'$id_comic2' limit 1");
$num_next = $select_next->num_rows;
while ($rows_next = $select_next->fetch_array(MYSQL_ASSOC)){

$id_next         = $rows_next ['id'];
?>
<a href="comic-<? echo $id_next; ?>.html" style="width:200px;" class="linkcat">الكاريكاتير التالى</a>
<?
}
?>

<?
$select_next = $mysqli->query("SELECT * FROM comic where id <'$id_comic2' limit 1");
$num_next = $select_next->num_rows;
while ($rows_next = $select_next->fetch_array(MYSQL_ASSOC)){

$id_next         = $rows_next ['id'];
?>
<a href="comic-<? echo $id_next; ?>.html" style="width:200px;" class="linkcat">الكاريكاتير السابق</a>
<?
}
?>
<br />
<div id="fb-root"></div><script src="http://connect.facebook.net/ar_AR/all.js#appId=313496528707949&xfbml=1"></script> 
<div class="fb-comments" data-href="<? echo $sitelink; ?>/news-<? echo $id_comic; ?>.html" data-num-posts="2" data-width="650"></div> 
<if condition="$show['spacer']"></div></if> 
</center>

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
</table>


</div>
</div>

<? include ("includes/footer.php"); ?>
<?
}
?>
</body>
</html>
<?
}

?>