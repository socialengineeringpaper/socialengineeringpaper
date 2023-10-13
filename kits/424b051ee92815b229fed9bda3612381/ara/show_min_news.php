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


$id_news_get    =intval (IsSet($_GET['id'])   ? make_it_safe($_GET['id'])   :Null);

$select = $mysqli->query("SELECT * FROM min_news where id='$id_news_get' limit 1");
$num = $select->num_rows;
if($num){
$rows = $select->fetch_array(MYSQL_ASSOC);
$id_news         = $rows ['id'];
$title_news      = $rows ['title'];
$pic             = $rows ['pic'];
$imgtype        = $rows ['imgtype'];
$minpage        = $rows ['minpage'];
$news_news       = $rows ['news'];
$time            = $rows ['time'];
$views            = $rows ['views'];
$pics  = $rows ['mor'];
$file = $rows ['file'];
preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_news, $img);
$img1 = $img[1];


$select_page = $mysqli->query("SELECT * FROM  min_page where id='$minpage'");
$rows_page = $select_page->fetch_array(MYSQL_ASSOC);

$id_page = $rows_page['id'];
$title_page = $rows_page['title'];
$pic_page = $rows_page['pic'];


$new_view = $views+1;
$updateview = $mysqli->query("Update min_news Set views='$new_view' WHERE id='$id_news' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="style/css/buttons.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<? echo $title_news; ?>" />
<meta name="keywords" content="<? echo $sitekey; ?>" />
<meta property="og:url" content="<? echo $sitelink; ?>/minnews-<? echo $id_news; ?>.html"/>
<meta name="description" content="<? echo $title_news; ?>">
<meta property="og:title" content="<? echo $title_news; ?>"/>

<meta property="og:image" content="<?php
if($imgtype  == 'pic1'){
?>
water.php?image=<? echo $pic; ?>
<?
}
else if($imgtype  == 'pic2'){
?>
water.php?image=imgnews/<? echo $pic; ?>
<?
}
else if($img1){
echo $img1;
}
else if($imgtype  == ""){
?>
water.php?image=style/img/none_photo.jpg
<?
}
?>"/>


<meta property="og:description" content="<? echo $title_news; ?>"/>
<meta property="og:type" content="article"/>

<title><? echo $title_news; ?></title>
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ticker.js"></script>
<script src="js/site.js" type="text/javascript"></script>

<script type="text/javascript">
function loadtab(getFile){
  $.ajax({
    url: getFile,
    beforeSend: function () {
      $(".con") .html("جارى التحميل");
    },
    success: function (data){
      $(".con") .html(data);
    }
  });
}
function loadcomm(getFile){
  $.ajax({
    url: getFile,
    beforeSend: function () {
      $(".commm") .html("جارى التحميل");
    },
    success: function (data){
      $(".commm") .html(data);
    }
  });
}
function loadcomm_face(getFile){
  $.ajax({
    url: getFile,
    beforeSend: function () {
      $(".commm_f") .html("جارى التحميل");
    },
    success: function (data){
      $(".commm_f") .html(data);
    }
  });
}
</script>

<script type="text/javascript">
$(document).ready(function(){
loadtab("includes/comment.php?id_news=<? echo $id_news; ?>");
$(".tabs > li") .click(function(){
  var i =  $(".tabs > li").index(this);

  if(i == 0){
     loadtab("includes/comment.php?id_news=<? echo $id_news; ?>");
  }else if (i == 1){
      loadtab("includes/comment_facebook.php?id_news=<? echo $id_news; ?>");
  }

$(".tabs > li") .removeAttr("class");
$(this) .addClass("active");

return false;
});

});
</script>
</head>
<body>
<?
if($siteclose == "1"){
  echo $closemsg;
}else{
?>
<div id="mynews">
<div align="center">
<img src="<? echo $pic_page; ?>" />
</div>
<div id="navbar">
<ul>
	<li id="firstmenu">&nbsp;</li>
<li><a href='index.php' class='link' title='الرئيسية'>رئيسية الموقع</a></li>
<li><a href='minpage-<? echo $id_page; ?>.html' class='link' title='الرئيسية'>رئيسية الصفحة</a></li>
<li><a href='photos.php?id=<? echo $id_page_get; ?>' class='link' title='معرض الصور'>معرض الصور</a></li>
	<li id="lastmenu">&nbsp;</li>
</ul>
</div>
<div id="body">
<div style="float: right; width: 705px;">


<div id="show_news">
<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="10%" valign="top">
<div class="nategahed">
<? echo date('j', $time); ?>
<br />
<? montharabic($time); ?>
</div>
<div class="nategabod">
<? echo date('Y', $time); ?>
</div>
</td>
<td width="90%" valign="top">
<div class="hedline"><? echo $title_news; ?></div>
<div class="timebe">نشر منذ <? echo timeBetween($time,time()); ?> - عدد المشاهدات : <? echo $views; ?></div>
</td>
</tr>
</table>

<div style='widtht 350px; float: left; margin:5px 5px 5px 5px; overflow:hidden;'>
<? echo $leftnews_html; ?>
</div>

<div style='widtht 350px; float:right;margin:5px 5px 5px 5px;overflow:hidden;'>
<? echo $rightnews_html; ?>
</div>

<?php
if($imgtype  == 'pic1'){
?>
<img src="<? echo $pic; ?>" height="300" width="450" />
<?
}
else if($imgtype  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic; ?>" height="300" width="450" />
<?
}
else if($img1){
echo "";
}
else if($imgtype  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="300" width="450" />
<?
}
?>
<br />
<?
$search_youtube = '#<a(.*?)(?:href="https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch?.*?v=))([\w\-]{10,12}).*<\/a>#x';
$replace_youtube = '<center><iframe width="640" height="385" frameborder="0" allowfullscreen src="http://www.youtube.com/embed/$2" type="application/x-shockwave-flash"></iframe></center>';
$news_news = preg_replace($search_youtube, $replace_youtube, $news_news);
?>

<?
echo $news_news;
?>
<br />
<div class="hedblock">صور مرفقة</div>
<br />
<?

$showpics = explode(",", $pics);

$numphoto = count($showpics);

for($x = 0; $x < $numphoto; $x++ ){
?>

<img src="water.php?image=files/<? echo $showpics[$x]; ?>" />
<br />
<?
}
?>
<br />

<?
if($file){
?>
<br />
<div class="hedblock">الملفات المرفقة</div>
<div class="bodblock">
<h3>
<a href="files/<? echo $file; ?>"><? echo $file; ?></a>
</h3>
<?
}
?>
</div>

<div align="center"><img src="style/img/logo2.png" style="border-radius:5px;" /></div>
<br />
<div class="line"></div>
<br />
<? echo $bottomnews_html; ?>
<br />
<div class="hedblock">أخبار متعلقة</div>
<div class="bodblock">
<?php
$select_same = $mysqli->query("SELECT * FROM min_news where (title LIKE  '%" . $title_news . "%' OR  news_cat='$newscat') and id != '$id_news' ORDER BY id DESC LIMIT 4");
$num_same = $select_same->num_rows;

if($num_same == 0){
echo "لا توجد أخبار متعلقة";
}

if($num_same){
echo " <table width='100%' border='0' cellpadding='4' cellspacing='0'>
<tr> ";
$max_same = 4;
$num_same = 0;


while ($rows_same = $select_same->fetch_array(MYSQL_ASSOC)){
$num_same++;
$id_same         = $rows_same ['id'];
$title_same      = $rows_same ['title'];
$pic_same        = $rows_same ['pic'];
$imgtypenews_same     = $rows_same ['imgtype'];
$news_same       = $rows_same ['news'];
$time_same       = $rows_same ['time'];

preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $news_same, $img);
$img_same = $img[1];

?>
<td width="25%">
<div class="backgr" align="center">
<a href="news-<? echo $id_same; ?>.html" title="<? echo $title_same; ?>">
<?php
if($imgtypenews_same  == 'pic1'){
?>
<img src="<? echo $pic_same; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_same  == 'pic2'){
?>
<img src="water.php?image=imgnews/<? echo $pic_same; ?>" height="100" width="150" />
<?
}
else if($img_same){
?>
<img src="<? echo $img_same; ?>" height="100" width="150" />
<?
}
else if($imgtypenews_same  == ""){
?>
<img src="water.php?image=style/img/none_photo.jpg" height="100" width="150" />
<?
}
?>
<br />
<span><? echo mb_substr ($title_same, 0, 50, 'utf-8'); ?></span>
</a>
</div>
</td>
<?
if($num_same == $max_same){
echo "</tr>";
$num_same = 0;
} //end if
}
}
echo "</table>";
?>

<div class="hedblock">مشاركة الخبر</div>
<div class="bodblock">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ef83cf81e138467"></script>
<!-- AddThis Button END -->
</div>  <!-- AddThis Button END -->

<div class="hedblock">التعليق بالفيس بوك</div>
<div class="bodblock">
<div id="fb-root"></div><script src="http://connect.facebook.net/ar_AR/all.js#appId=313496528707949&xfbml=1"></script>
<div class="fb-comments" data-href="<? echo $sitelink; ?>/minnews-<? echo $id_news; ?>.html" data-num-posts="2" data-width="650"></div>
<if condition="$show['spacer']"></if>
</div> <!-- facebook comment -->

</div> <!-- end #showbod -->

</div> <!-- end #show_news -->


</div> <!-- end #right -->

<div style="float: left; width: 290px;">
<div id="left">


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

</div> <!-- end #left -->
</div>
<div class="clear"></div>

</div> <!-- end #body -->
</div> <!-- end #mynews -->
<? include("includes/footer.php");

}
?>
</body>
</html>
<?
}else{
echo "Not Found News";
}
?>
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