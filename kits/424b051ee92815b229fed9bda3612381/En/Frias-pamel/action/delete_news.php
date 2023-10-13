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
$id_news  =IsSet($_POST['id_news'])   ? make_it_safe($_POST['id_news'])   :Null;



$select = $mysqli->query("SELECT * FROM news where id='$id_news' limit 1");
$num = $select->num_rows;

$rows = $select->fetch_array(MYSQL_ASSOC);

$id_news1         = $rows ['id'];
$title_news      = $rows ['title'];
$pic_news        = $rows ['pic'];
$imgtype        = $rows ['imgtype'];
$news_news       = $rows ['news'];
$time            = $rows ['time'];


if($imgtype  == 'pic2'){
unlink('../../imgnews/'.$pic_news);
}

$delete = $mysqli->query("DELETE FROM news WHERE id='$id_news'");

if($delete){
  echo"done";
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