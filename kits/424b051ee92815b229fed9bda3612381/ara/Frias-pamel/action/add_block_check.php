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
$con  = $_POST['con'];
$index  =IsSet($_POST['index'])   ? make_it_safe($_POST['index'])   :Null;
$place  =IsSet($_POST['place'])   ? make_it_safe($_POST['place'])   :Null;

if($title == ""){
echo '<div class="msgno">أدخل عنوان البلوك</div>';
}else if($con == ""){
echo '<div class="msgno">أدخل محتوى البلوك</div>';
}else{

$insert = $mysqli->query("INSERT INTO blocks 
(id, title, con, indexi, place) VALUE 
('', '$title', '$con', '$index', '$place')");

if($insert) {
  echo"<br /><br /><div class='msgok'>تم إضافة البلوك</div>";
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