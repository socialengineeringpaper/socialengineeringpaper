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
$pic    =IsSet($_POST['pic'])     ? make_it_safe($_POST['pic'])     :Null;
$min_pic    =IsSet($_POST['min_pic'])     ? make_it_safe($_POST['min_pic'])     :Null;
$ds     =IsSet($_POST['ds'])      ? make_it_safe($_POST['ds'])      :Null;
$order  =IsSet($_POST['order'])   ? make_it_safe($_POST['order'])   :Null;
$id_page  =IsSet($_POST['id_page'])   ? make_it_safe($_POST['id_page'])   :Null;

if($title == ""){
echo '<div class="msgno">أدخل عنوان الصفحة</div>';
}
else if($ds == ""){
echo '<div class="msgno">أدخل وصف الصفحة</div>';
}
else if($pic == ""){
echo '<div class="msgno">أدخل صروة الصفحة</div>';
}else if ($order == 0){
echo '<div class="msgno">أدخل ترتيب الصفحة</div>';
}else{

$update = $mysqli->query("Update min_page SET title='$title', pic='$pic', minpic='$min_pic ', descr='$ds', ord_show='$order' WHERE id='$id_page'");

if($update) {
  echo"<br /><br /><div class='msgok'>تم التحديث</div>";
}else{
echo $mysqli->error;
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