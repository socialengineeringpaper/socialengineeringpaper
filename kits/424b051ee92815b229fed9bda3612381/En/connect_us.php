<?php
include("includes/config.php");

$select_set = $mysqli->query("SELECT * FROM  setting where id='1'");
$rows_st = $select_set->fetch_array(MYSQL_ASSOC);

$sitetitle = $rows_st['sitetitle'];
$sitedesc  = $rows_st['sitedesc'];
$sitekey   = $rows_st['sitekey'];
$sitelink  = $rows_st['sitelink'];
$sitepr    = $rows_st['sitepr'];
$siteclose = $rows_st['close'];
$closemsg  = $rows_st['close_msg'];

$select_html = $mysqli->query("SELECT * FROM  htmlcode where id='1'");
$rows_html = $select_html->fetch_array(MYSQL_ASSOC);

$header_html = $rows_html['header'];
$bottomheader_html = $rows_html['bottomheader'];
$topfooter_html = $rows_html['topfooter'];
$rightnews_html = $rows_html['rightnews'];
$leftnews_html = $rows_html['leftnews'];
$bottomnews_html = $rows_html['bottomnews'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/css/style.css" rel="stylesheet" type="text/css" />
<link href="style/css/buttons.css" rel="stylesheet" type="text/css" />
<title>اتصل بنا</title>
<link href="style/css/ticker-style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.ticker.js"></script>
<script src="js/site.js" type="text/javascript"></script>

</head>
<body>
<?
if($siteclose == "1"){
  echo $closemsg;
}else{
?>
<div id="mynews">
<? include ("includes/header.php"); ?>
<div id="body">
<form action="send_msg.php" method="post" enctype="multipart/form-data">
<table align="center" width="50%" cellpadding="0" cellspacing="0">
<tr>
<td width="30%" style="padding: 5px;">Neam</td>
<td width="70%" style="padding: 5px;"><input type="text" name="yourname" class="inputtext" size="50" /></td>
</tr>
<tr>
<td width="30%" style="padding: 5px;">Your Email</td>
<td width="70%" style="padding: 5px;"><input type="text" name="msgmail" class="inputtext" size="50" /></td>
</tr>
<tr>
<td width="30%" style="padding: 5px;">Thesis title</td>
<td width="70%" style="padding: 5px;"><input type="text" name="msgname" class="inputtext" size="50" /> </td>
</tr>
<tr>
<td width="30%"style="padding: 5px;">Message</td>
<td width="70%"style="padding: 5px;"><textarea class="textarea" name="msg" style="width:400px; height:150px;"></textarea></td>
</tr>
<tr>
<td width="30%"style="padding: 5px;">Attach Photo </td>
<td width="70%"style="padding: 5px;">
You can specify more than one picture
<input type="file" name="upload[]" multiple="" />
</td>
<tr>
<td>اكتب الرمز</td>
<td><div class="g-recaptcha" data-sitekey="6LcGgSMTAAAAAEEEQh3gsI9uF9kHU4WyK0drhgYU"></div>
</td>
</tr>
</tr>
<tr>
<td width="100%" colspan="2" style="text-align:center; padding:5px;"><input type="submit" style=" font-family: newb; font-size: 14px; text-shadow: 1px 1px 3px #333;" class="small color blue button" value="Send a message" />
</td>
</tr>
</table>
</form>


</div>
</div>

<? include ("includes/footer.php"); ?>
<?
}
?>
</body>
</html>

