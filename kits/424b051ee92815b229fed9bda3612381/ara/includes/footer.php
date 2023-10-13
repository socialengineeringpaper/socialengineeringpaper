<? echo $topfooter_html; ?>
<div id="footer">
<?php
$select_links = $mysqli->query("SELECT * FROM links");
$num_links = $selec_linkst->num_rows;

while ($rows_links = $select_links->fetch_array(MYSQL_ASSOC)){

$id_links         = $rows_links ['id'];
$title_links      = $rows_links ['title'];
$link_links      = $rows_links ['link'];
?>
<a href="<? echo $link_links; ?>"><? echo $title_links; ?></a> |
<?
}
?>
<a href="index.php">الرئيسية</a>

<br />
<span style=" font-size:12px;"><? echo $sitepr; ?></span>
<br />
This Script Powered By <a href="http://www.iq4host.com" target="_blank"> شركة الجنوب هوست لخدمات الويب المتنوعة® </a> Copyright ©2013 

</div>