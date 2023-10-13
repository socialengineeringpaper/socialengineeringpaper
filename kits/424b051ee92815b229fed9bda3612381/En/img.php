<?php require_once('Connections/date.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_Rec_img = 15;
$pageNum_Rec_img = 0;
if (isset($_GET['pageNum_Rec_img'])) {
  $pageNum_Rec_img = $_GET['pageNum_Rec_img'];
}
$startRow_Rec_img = $pageNum_Rec_img * $maxRows_Rec_img;

mysql_select_db($database_date, $date);
$query_Rec_img = "SELECT * FROM img ORDER BY id DESC";
$query_limit_Rec_img = sprintf("%s LIMIT %d, %d", $query_Rec_img, $startRow_Rec_img, $maxRows_Rec_img);
$Rec_img = mysql_query($query_limit_Rec_img, $date) or die(mysql_error());
$row_Rec_img = mysql_fetch_assoc($Rec_img);

if (isset($_GET['totalRows_Rec_img'])) {
  $totalRows_Rec_img = $_GET['totalRows_Rec_img'];
} else {
  $all_Rec_img = mysql_query($query_Rec_img);
  $totalRows_Rec_img = mysql_num_rows($all_Rec_img);
}
$totalPages_Rec_img = ceil($totalRows_Rec_img/$maxRows_Rec_img)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href='css/hoverbox.css' type="text/css" media="screen, projection" />
<!--[if lte IE 7]>
<link rel="stylesheet" href='css/ie_fixes.css' type="text/css" media="screen, projection" />
<![endif]-->
</head>
<body>
<div class="hednews">Photo Gallery</div>

<ul class="hoverbox">
  <?php do { ?>
    <li> <a href="#"><img src="imgnews/<?php echo $row_Rec_img['pic']; ?>" alt="<?php echo $row_Rec_img['title']; ?>" /><img src="imgnews/<?php echo $row_Rec_img['pic']; ?>" alt="<?php echo $row_Rec_img['title']; ?>" class="preview" /></a> </li>
    <?php } while ($row_Rec_img = mysql_fetch_assoc($Rec_img)); ?>

</ul>
<div class="clear"></div>
<br />
<hr />

<table border="0" align="center" dir="rtl">
  <tr>
    <td><?php if ($pageNum_Rec_img > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_Rec_img=%d%s", $currentPage, 0, $queryString_Rec_img); ?>">الاول</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_Rec_img > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_Rec_img=%d%s", $currentPage, max(0, $pageNum_Rec_img - 1), $queryString_Rec_img); ?>">السابق</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_Rec_img < $totalPages_Rec_img) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_Rec_img=%d%s", $currentPage, min($totalPages_Rec_img, $pageNum_Rec_img + 1), $queryString_Rec_img); ?>">التالي</a>
        <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_Rec_img < $totalPages_Rec_img) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_Rec_img=%d%s", $currentPage, $totalPages_Rec_img, $queryString_Rec_img); ?>">الاخير</a>
        <?php } // Show if not last page ?></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Rec_img);
?>
