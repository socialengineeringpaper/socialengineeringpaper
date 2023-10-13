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

$news_df = $_POST['news_df'];
$comment_mode = $_POST['comment_mode'];
$new_news = $_POST['new_news'];
$new_comm = $_POST['new_comm'];


$updateinfo = $mysqli->query("Update news_page SET news_df='$news_df', comment_mode='$comment_mode' , new_news='$new_news' , new_comm='$new_comm' WHERE id='1'");

if ($updateinfo) {
echo '<div class="msgok">تم التحديث</div>';
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