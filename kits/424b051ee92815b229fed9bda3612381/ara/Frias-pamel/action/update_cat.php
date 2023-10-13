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
$dal    =IsSet($_POST['dal'])     ? make_it_safe($_POST['dal'])     :Null;
$ds     =IsSet($_POST['ds'])      ? make_it_safe($_POST['ds'])      :Null;
$kind   =IsSet($_POST['kind'])    ? make_it_safe($_POST['kind'])    :Null;
$show   =IsSet($_POST['show'])    ? make_it_safe($_POST['show'])    :Null;
$order  =IsSet($_POST['order'])   ? make_it_safe($_POST['order'])   :Null;
$id_cat =IsSet($_POST['id_cat'])  ? make_it_safe($_POST['id_cat'])  :Null;


if($title == ""){
echo '<div class="msgno">أدخل عنوان القسم</div>';
}
else if($ds == ""){
echo '<div class="msgno">أدخل وصف القسم</div>';
}
else if($dal == ""){
echo '<div class="msgno">أدخل الكلمات الدليلية</div>';
}else if ($kind == 0){
echo '<div class="msgno">أدخل نوع القسم</div>';
}else{


$update = $mysqli->query("Update cats SET title='$title', dal='$dal', ds='$ds', kind='$kind', ord_show='$order', show_index='$show'  WHERE id='$id_cat'");


if($update) {
  echo"<br /><br /><div class='msgok'>تم التحديث بنجاح</div>";
}else{
printf("Connect failed: %s\n", mysqli_error());
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