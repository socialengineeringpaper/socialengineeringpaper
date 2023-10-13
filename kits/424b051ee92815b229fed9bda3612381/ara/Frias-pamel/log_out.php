<?php
ob_start();
session_start();
$_SESSION['username'] = $username ;

session_destroy();
 setcookie("username",$_SESSION['username'],time()-2592005);  
  setcookie("id",$_SESSION['id'],time()-2592005);  
?>
<META http-equiv="refresh" content="0;URL=login.php">
<?
ob_end_flush(); 
?>