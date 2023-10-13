<?php
session_start();
if(!$_SESSION['username']){
header("Location: login.php");
exit();
}
else{
include ("../../includes/config.php");
$id_member = $_SESSION['id'];
$select = $mysqli->query("SELECT * FROM users WHERE id='$id_member' LIMIT 1");
$rows = $select->fetch_array(MYSQL_ASSOC);
$num = $select->num_rows;
$id       = $rows ['id'];
$username = $rows ['username'];
$level = $rows ['level'];

if($level == 2){

if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$title      =IsSet($_POST['title'])    ? make_it_safe($_POST['title'])    :Null;
$news_cat   =IsSet($_POST['news_cat']) ? make_it_safe($_POST['news_cat']) :Null;
$pic1       =IsSet($_POST['pic1'])     ? make_it_safe($_POST['pic1'])     :Null;
$show_index       = intval (IsSet($_POST['show_index'])     ? make_it_safe($_POST['show_index'])     :Null);
$imgname    = $_FILES['pic2'] ['name'] ;
$news       = $_POST['news'];
$time       = time();

if($imgname OR ($imgname AND $pic1)){


$imgname     = $_FILES['pic2'] ['name'] ;
$imgsize     = $_FILES['pic2'] ['size'] ;
$imgtmpname  = $_FILES['pic2'] ['tmp_name'] ;
$imgtype     = $_FILES['pic2'] ['type'] ;
$size     = 6000000;
$imgtypes    = array('image/jpeg','image/gif','image/png');
$getsize = getimagesize($imgtmpname);

$imgwidth  = $getsize[0];
$imgheight = $getsize[1];


$new_name_time = time();
$new_name_rand = rand(0000,9999);
$new_name_md5 = md5($new_name_time);
$new_name = $new_name_md5.$new_name_rand.".jpeg";

if($imgwidth > 4900){
	$percent = 0.1;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4800){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4700){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4600){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4500){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4400){
	$percent = 0.115;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4300){
	$percent = 0.115;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4200){
	$percent = 0.12;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4100){
	$percent = 0.12;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4000){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3900){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3800){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3700){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3600){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3500){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3400){
	$percent = 0.15;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3300){
	$percent = 0.15;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3200){
	$percent = 0.155;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3100){
	$percent = 0.16;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3000){
	$percent = 0.165;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2900){
	$percent = 0.17;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2800){
	$percent = 0.175;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2700){
	$percent = 0.18;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2600){
	$percent = 0.186;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2500){
	$percent = 0.193;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2400){
	$percent = 0.2;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2300){
	$percent = 0.22;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2200){
	$percent = 0.23;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2100){
	$percent = 0.23;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2000){
	$percent = 0.24;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1900){
	$percent = 0.25;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1800){
	$percent = 0.265;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1700){
	$percent = 0.28;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1600){
	$percent = 0.295;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1500){
	$percent = 0.32;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1400){
	$percent = 0.35;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1300){
	$percent = 0.36;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1200){
	$percent = 0.4;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1100){
	$percent = 0.42;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1000){
	$percent = 0.46;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 900){
	$percent = 0.5;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 800){
	$percent = 0.56;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 700){
	$percent = 0.63;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 600){
	$percent = 0.72;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 500){
	$percent = 0.84;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth < 501){
	$newwidth = $imgwidth;
	$newheight = $imgheight;
	}
	
if(empty($title)){
echo "";
}
else if($news_cat == 0){
echo "";
}
else if($news == ""){
echo "";
}else{




create_image($imgtmpname, '../../imgnews/'.$new_name, $newwidth, $newheight);


if (create_image){
$imagesname = $new_name;
$typeimg = "pic2";
}


}

}else if($pic1){

$imagesname = $pic1;
$typeimg = "pic1";

}


$select = $mysqli->query("SELECT * FROM news_page WHERE id = '1' LIMIT 1");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_set        = $rows ['id'];
$news_df       = $rows ['news_df'];
$comment_mode  = $rows ['comment_mode'];
$new_news      = $rows ['new_news'];
$new_comm      = $rows ['new_comm'];


if($news_cat == 0){
$news_cat1 =  $news_df;
}else{
$news_cat1 = $news_cat;
}
}

if(empty($title)){
?>
<div class="msgno">أدخل عنوان الخبر</div>
<?
}
else if($news == ""){
?>
<div class="msgno">أدخل نص الخبر</div>
<?
}
else if($imgname AND (!in_array($imgtype,$imgtypes))){
  echo '<div class="msgno">صيغة الصورة غير معروفة</div>';
}else if($imgname AND ($imgsize > $size)){
  echo '<div class="msgno">هذة الصورة أكبر من 6 ميجا</div>';
}else if($imgname AND ($imgwidth > 5000)){
echo '<div class="msgno">الصورة كبيرة جدا !!</div>';
}


else{

$newfilename1 = $_FILES ['filesend'] ['name'];
$sizefilename1 = $_FILES ['filesend'] ['size'];
$temp_namefilename1 = $_FILES ['filesend'] ['tmp_name'];
$typefilename1 = $_FILES ['filesend'] ['type'];
$folder = "../../files/";


move_uploaded_file($temp_namefilename1,$folder.$newfilename1);



$file = $_FILES['upload'];

if($file){

for ($x = 0; $x<count($file ['name']); $x++){

$imgname     = $file ['name'] [$x] ;
$imgsize     = $file['size'] [$x];
$imgtmpname  = $file['tmp_name'] [$x];
$imgtype     = $file['type'] [$x];
$size     = 6000000;
$imgtypes    = array('image/jpeg','image/gif','image/png');

$new_name_time = time();
$new_name_rand = rand(0000,9999);
$new_name_md5 = md5($new_name_time);

$newx = md5(sha1($x));

$getsize = getimagesize($imgtmpname);

$imgwidth  = $getsize[0];
$imgheight = $getsize[1];

$new_name = $new_name_md5.$new_name_rand."".$x.".jpeg";

if($imgwidth > 4900){
	$percent = 0.1;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4800){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4700){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4600){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4500){
	$percent = 0.11;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4400){
	$percent = 0.115;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4300){
	$percent = 0.115;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4200){
	$percent = 0.12;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4100){
	$percent = 0.12;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 4000){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3900){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3800){
	$percent = 0.13;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3700){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3600){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3500){
	$percent = 0.14;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3400){
	$percent = 0.15;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3300){
	$percent = 0.15;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3200){
	$percent = 0.155;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3100){
	$percent = 0.16;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 3000){
	$percent = 0.165;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2900){
	$percent = 0.17;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2800){
	$percent = 0.175;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2700){
	$percent = 0.18;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2600){
	$percent = 0.186;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2500){
	$percent = 0.193;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2400){
	$percent = 0.2;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2300){
	$percent = 0.22;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2200){
	$percent = 0.23;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2100){
	$percent = 0.23;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 2000){
	$percent = 0.24;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1900){
	$percent = 0.25;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1800){
	$percent = 0.265;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1700){
	$percent = 0.28;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1600){
	$percent = 0.295;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1500){
	$percent = 0.32;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1400){
	$percent = 0.35;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1300){
	$percent = 0.36;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1200){
	$percent = 0.4;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1100){
	$percent = 0.42;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 1000){
	$percent = 0.46;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 900){
	$percent = 0.5;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 800){
	$percent = 0.56;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 700){
	$percent = 0.63;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 600){
	$percent = 0.72;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth > 500){
	$percent = 0.84;
	$newwidth = $imgwidth * $percent;
	$newheight = $imgheight * $percent;
	}
	else if($imgwidth < 501){
	$newwidth = $imgwidth;
	$newheight = $imgheight;
	}


create_image($imgtmpname, '../../files/'.$new_name, $newwidth, $newheight);

$pics[$x] = $new_name;

} // end for

}

if($pics){
$newdata = (implode(',', $pics));
}
$insert = $mysqli->query("INSERT INTO news ( title, news_cat, pic, imgtype, news, time, userpost, show_index, mor, file)
 VALUE 
( '$title', '$news_cat1', '$imagesname', '$typeimg', '$news', '$time', '$username', '$show_index', '$newdata', '$newfilename1')");

$id_insert = $mysqli->insert_id;
if($insert) {

?>
<script type="text/javascript">
$(function(){
$("#form") .hide();
})
</script>
<div class="msgok">تم إضافة الخبر بنجاح</div>

<?
$select1 = $mysqli->query("SELECT * FROM setting WHERE id = '1' LIMIT 1");
$num1 = $select1->num_rows;
while ($rows1 = $select1->fetch_array(MYSQL_ASSOC)){
 
$id_set       = $rows1 ['id'];
$sitetitle       = $rows1 ['sitetitle'];
$sitedesc      = $rows1 ['sitedesc'];
$sitekey      = $rows1 ['sitekey'];
$sitelink      = $rows1 ['sitelink'];
$sitepr      = $rows1 ['sitepr'];
$close      = $rows1 ['close'];
$close_msg      = $rows1 ['close_msg'];
?>

<br />
<table align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" style="padding: 5px;"><h4><? echo $title; ?></h4></td>
<td width="25%" style="padding: 5px;"><input size="40" class="inputtext" type="text" value="<? echo $sitelink; ?>/news-<? echo $id_insert; ?>.html" /></td>
<td width="25%" style="padding: 5px;"><a class="link" href="../news-<? echo $id_insert; ?>.html" target="_blank">اضغط هنا لمشاهدة الخبر</a></td>
</tr>
</table>
<?
}
?>
<br />
<div align="center">
<h3><a href="add_news.php" class="greenbutton" style="text-decoration: none; padding: 5px;">أضف خبر اخر</a></h3>
</div>
<?
}
}
?>
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?>