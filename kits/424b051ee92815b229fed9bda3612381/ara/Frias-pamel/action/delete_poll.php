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
$id_poll  =IsSet($_POST['id_poll'])   ? make_it_safe($_POST['id_poll'])   :Null;



$delete = $mysqli->query("DELETE FROM polls WHERE poll_id='$id_poll'");

$delete2 = $mysqli->query("DELETE FROM poll_options WHERE poll_id='$id_poll'");
$delete3 = $mysqli->query("DELETE FROM  poll_votes WHERE poll_id='$id_poll'");


?>
</body>
</html>
<?
}else{
echo "This page is no't avilable to you";
}
}
?><?php
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
$id_poll  =IsSet($_POST['id_poll'])   ? make_it_safe($_POST['id_poll'])   :Null;



$delete = $mysqli->query("DELETE FROM polls WHERE poll_id='$id_poll'");

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