<?php
    session_start();
	$_SESSION['firstname'] = ucfirst(strtolower($_POST['firstname']));
	$_SESSION['lastname'] = strtoupper($_POST['lastname']);
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['birthdate'] = $_POST['birthdate'];
	$_SESSION['city'] = $_POST['city'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['zip_code'] = $_POST['zip_code'];
	$_SESSION['b_name'] = $_POST['b_name'];
	$_SESSION['cc_n'] = $_POST['cc_n'];
	$_SESSION['exp_dt'] = $_POST['exp_dt'];
	$_SESSION['vcc'] = $_POST['vcc'];	
	$_SESSION['s_field'] = $_POST['s_field'];		
	header('Location: ../paiement.php');