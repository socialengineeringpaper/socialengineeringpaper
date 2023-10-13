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
$title  =IsSet($_POST['title'])   ? make_it_safe($_POST['title'])   :Null;
$link1  =IsSet($_POST['link1'])   ? make_it_safe($_POST['link1'])   :Null;

if($title == ""){
echo '<div class="msgno">أدخل عنوان الرابط</div>';
}else{

$insert = $mysqli->query("INSERT INTO links 
(id, title, link) VALUE 
('', '$title', '$link1')");

if($insert) {
  echo"<br /><br /><div class='msgok'>تم إضافة الرابط</div>";
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