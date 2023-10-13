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
$pass3 = $rows ['pass'];

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
$username1  =IsSet($_POST['username'])   ? make_it_safe($_POST['username'])   :Null;
$pass      =IsSet($_POST['pass'])       ? make_it_safe($_POST['pass'])       :Null;
$pass1     =IsSet($_POST['pass1'])      ? make_it_safe($_POST['pass1'])      :Null;
$repass1     =IsSet($_POST['repass1'])      ? make_it_safe($_POST['repass1'])      :Null;


$select1 = $mysqli->query("SELECT * FROM users WHERE username='$username1'");
$rows1 = $select1->fetch_array(MYSQL_ASSOC);
$num1 = $select1->num_rows;

if(($username != $username1) AND empty($pass)){

if(empty($username1)){
?>
<div class="msgno">لا يمكنك ترك اسم المستخدم قارغ</div>
<?
}else {
$updateinfo = $mysqli->query("Update users SET username='$username1' WHERE id='$id_member'");
?>
<br />
<br />
<br />
<div class='msgok'>تم تحديث البينات</div>
<script type="text/javascript">
$(function(){
$(".hed") .hide();
$(".bod") .hide();
});
</script>


<?
}


}else{

$pass = sha1($pass);

if(empty($username1)){
?>
<div class="msgno">أدخل اسم المستخدم</div>
<?
}
else if($num1 and ($username != $username1)) {
?>
<div class="msgno">هذا الأسم <? echo $username1; ?> مستخدم مسبقا</div>
<?
}
else if(empty($pass)) {
?>
<div class="msgno">أدخل كلمة المرور القديمة</div>
<?
}
else if($pass != $pass3){
?>
<div class="msgno">كلمة المرور القديمة غير صحيحة</div>
<?
}
else if(empty($pass1)) {
?>
<div class="msgno">أدخل كلمة المرور الجديدة</div>
<?
}
else if(empty($repass1)) {
?>
<div class="msgno">يجب إعادة كلمة المرور الجديدة</div>
<?
}
else if($pass1 != $repass1) {
?>
<div class="msgno">يجب ان تكون كلمة المرور الجديدة متطابقة</div>
<?
}
else{

$pass1 = sha1($pass1) ;

$updateinfo = $mysqli->query("Update users SET username='$username1', pass='$pass1' WHERE id='$id_member'");

?>
<br />
<br />
<br />
<div class='msgok'>تم تحديث البينات</div>
<script type="text/javascript">
$(function(){
$(".hed") .hide();
$(".bod") .hide();
});
</script>


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