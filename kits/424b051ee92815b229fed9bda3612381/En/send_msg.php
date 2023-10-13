<?php
ini_set('memory_limit', '-1');
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


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="style/css/buttons.css" rel="stylesheet" type="text/css" />
<title>connect_us</title>
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ticker.js"></script>
<script src="js/site.js" type="text/javascript"></script>

</head>
<body>


<div>
<?php
/*
$yourname  =IsSet($_POST['yourname'])   ? make_it_safe($_POST['yourname'])   :Null;
$msgmail  =IsSet($_POST['msgmail'])   ? make_it_safe($_POST['msgmail'])   :Null;
$msgname  =IsSet($_POST['msgname'])   ? make_it_safe($_POST['msgname'])   :Null;
$msg  =IsSet($_POST['msg'])   ? make_it_safe($_POST['msg'])   :Null;

if($yourname == ""){
echo '<div class="msgno">Enter Your Name</div>';
}
else if($msgmail == ""){
echo '<div class="msgno">Enter Your E-mail</div>';
}
else if($msgname == ""){
echo '<div class="msgno">Enter The Message Title</div>';
}
else if($msg == ""){
echo '<div class="msgno">Enter The Message</div>';
}
else{
$insert = $mysqli->query("INSERT INTO msgs
(id, yourname, msgmail, msgname, msg) VALUE
('', '$yourname', '$msgmail', '$msgname', '$msg')");

if($insert) {
echo '<div class="msgok">The message was sent successfully</div>';
}
}
*/
$yourname  =IsSet($_POST['yourname'])   ? make_it_safe($_POST['yourname'])   :Null;
$msgmail  =IsSet($_POST['msgmail'])   ? make_it_safe($_POST['msgmail'])   :Null;
$msgname  =IsSet($_POST['msgname'])   ? make_it_safe($_POST['msgname'])   :Null;
$msg  =IsSet($_POST['msg'])   ? make_it_safe($_POST['msg'])   :Null;
$file     = $_FILES['upload'];

if($yourname == ""){
echo '<div class="msgno">enter your name</div>';
}
else if($msgmail == ""){
echo '<div class="msgno">Enter Your E-mail</div>';
}
else if($msgname == ""){
echo '<div class="msgno">Enter The Message Title</div>';
}
else if($msg == ""){
echo '<div class="msgno">Enter The Message</div>';
}
else{

$id_insert = $mysqli->insert_id;

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


create_image($imgtmpname, 'files/'.$new_name, $newwidth, $newheight);

$pics[$x] = $new_name;

} // end for

$numphoto = count($pics);


$newdata = (implode(',', $pics));



$insert = $mysqli->query("INSERT INTO msgs
(id, yourname, msgmail, msgname, msg, pics) VALUE
('', '$yourname', '$msgmail', '$msgname', '$msg', '$newdata')");

if($insert) {
echo '<div class="msgok">The message was sent successfully</div>';
}
else { die($mysqli->error); }

} //end else

?>

</div>
</div>

</body>
</html>
