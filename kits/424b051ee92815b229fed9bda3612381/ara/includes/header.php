<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<div id="hed">
<ul id="hedmenu">
<li><a href="index.php">الرئيسية</a></li>
<li><a href="connect_us.php">اتصل بنا</a></li>
<?php
$select_pages = $mysqli->query("SELECT * FROM pages WHERE show_index = '1'");
$num_pages = $selec_pages->num_rows;

while ($rows_pages = $select_pages->fetch_array(MYSQL_ASSOC)){

$id_pages         = $rows_pages ['id'];
$title_links      = $rows_pages ['title'];
?>
<li><a href="page-<? echo $id_pages; ?>.html"><? echo $title_links; ?></a></li>
<?
}
?>
<li><a href="http://alfaidh-co.com/ara/index.php">Arbic</a></li>
<li><a href="http://alfaidh-co.com/En/index.php">English</a></li>
</ul>

<div class="date">
<script language="JavaScript">

var fixd;

function isGregLeapYear(year)
{
return year%4 == 0 && year%100 != 0 || year%400 == 0;
}


function gregToFixed(year, month, day)
{
var a = Math.floor((year - 1) / 4);
var b = Math.floor((year - 1) / 100);
var c = Math.floor((year - 1) / 400);
var d = Math.floor((367 * month - 362) / 12);

if (month <= 2)
e = 0;
else if (month > 2 && isGregLeapYear(year))
e = -1;
else
e = -2;

return 1 - 1 + 365 * (year - 1) + a - b + c + d + e + day;
}

function Hijri(year, month, day)
{
this.year = year;
this.month = month;
this.day = day;
this.toFixed = hijriToFixed;
this.toString = hijriToString;
}

function hijriToFixed()
{
return this.day + Math.ceil(29.5 * (this.month - 1)) + (this.year - 1) * 354 +
Math.floor((3 + 11 * this.year) / 30) + 227015 - 1;
}

function hijriToString()
{
var months = new Array("محرم","صفر","ربيع أول","ربيع ثانى","جمادى أول","جمادى ثانى","رجب","شعبان","رمضان","شوال","ذو القعدة","ذو الحجة");
return this.day + " " + months[this.month - 1]+ " " + this.year;
}

function fixedToHijri(f)
{
var i=new Hijri(1100, 1, 1);
i.year = Math.floor((30 * (f - 227015) + 10646) / 10631);
var i2=new Hijri(i.year, 1, 1);
var m = Math.ceil((f - 29 - i2.toFixed()) / 29.5) + 1;
i.month = Math.min(m, 12);
i2.year = i.year;
i2.month = i.month;
i2.day = 1;
i.day = f - i2.toFixed() + 1;
return i;
}

var tod=new Date();
var weekday=new Array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
var monthname=new Array("يناير","فبراير","مارس","إبريل","مايو","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر");

var y = tod.getFullYear();
var m = tod.getMonth();
var d = tod.getDate();
var dow = tod.getDay();
document.write(weekday[dow] + " " + d + " " + monthname[m] + " " + y);
m++;
fixd=gregToFixed(y, m, d);
var h=new Hijri(1421, 11, 28);
h = fixedToHijri(fixd);
document.write(" ميلادى - " + h.toString() + " هجرى &nbsp;&nbsp;");

</script>
</div>

<div class="clear"></div>
</div>
<br>
<div id="header">
<div class="center">
<table style="height:110px;" align="center" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="20%"><img src="style/img/header.png" width="1000" height="225" /></td>
<td width="80%">
<center>
<? echo $header_html; ?>
</center>
</td>
</tr>
</table>
</div>
</div>
<div class="center">
<div id="navbar">
<ul>
	<li id="firstmenu">&nbsp;</li>
<?
echo "<li><a href='index.php' class='link' title='الرئيسية'>الرئيسية</a></li>";
$select = $mysqli->query("SELECT * FROM cats");
$num = $select->num_rows;
while ($rows = $select->fetch_array(MYSQL_ASSOC)){
 
$id_cat       = $rows ['id'];
$title_cat       = $rows ['title'];
echo "<li><a href='cat-".$id_cat.".html' class='link' title='".$title_cat."'>".$title_cat."</a></li>";
}
?>
	<li id="lastmenu">&nbsp;</li>
</ul>
</div>  <!-- end navbar -->
<div id="search">
<form action="search.php" method="post">
<input type="text" class="search" name="search" placeholder="بحث عن خبر" />
<input type="submit" class="searchbutton" value="بحث" />
</form>
</div>
<div id="newnews">
<ul id="js-news" class="js-hidden">
<?
$select13 = $mysqli->query("SELECT * FROM news ORDER BY id DESC LIMIT  10 ");
$num13 = $select13->num_rows;
while ($rows13 = $select13->fetch_array(MYSQL_ASSOC)){
$id_news13       = $rows13 ['id'];
$title_news13       = $rows13 ['title'];
$views_news13       = $rows13 ['views'];
?>
<li class="news-item"> <a href="news-<? echo $id_news13; ?>.html" title="<? echo $title_news13; ?>"><? echo $title_news13; ?></a></li>
<?
}
?>
</ul>
</div>
</div>
<div class="clear"></div>
<? echo $bottomheader_html; ?>